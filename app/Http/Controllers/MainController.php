<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Contact;
use App\Destination;
use App\Http\Requests\AddCommentRequest;
use App\Media;
use App\Motorcycle;
use App\Newsletter;
use DB;
use App\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Pages;
use Session;

class MainController extends Controller
{
    public function home()
    {
        $recentPhotos = Media::orderby('id')->paginate(12);
        $recentTours = Tours::recent();
        return view('main.home', compact('recentPhotos', 'recentTours'));
    }

    public function medias()
    {
        $recentPhotos = Media::orderby('id')->paginate(5);
        return view('main.medias', compact('recentPhotos'));
    }

    public function tourList(Request $request)
    {
        $destination = null;
        $allTours = [];

        $destinationId = $request->get('des');
        $motorBrand = $request->get('motor');
        $destination = Destination::find($destinationId);
        if (empty($destination) && empty($motorBrand)) {
            throw new \Exception('No destination found. No Brand selected.');
        }

        $queryBuilder = DB::table('tours')
            ->leftjoin('tour_destination', 'tours.id', '=', 'tour_destination.tours_id')
            ->leftjoin('tour_prices', 'tours.id', '=', 'tour_prices.tours_id')
            ->leftjoin('motorcycle', 'tour_prices.motorcycle_id', '=', 'motorcycle.id');
        if (!empty($destination)) {
            $queryBuilder->where('tour_destination.destination_id', '=', $destinationId);
        } else if (!empty($motorBrand)) {
            $queryBuilder->where('motorcycle.brand', '=', $motorBrand);
        }

        $allTours = $queryBuilder->select('tours.id', 'tours.name', 'tours.location', 'tours.photo', 'tours.description')
            ->groupby('tours.id')
            ->orderby('tours.id', 'desc')
            ->paginate(1)
            ->appends(Input::except('page'));

        return view('main.tour_list', compact('allTours', 'destination'));
    }

    public function searchTour(Request $request)
    {
        $destination = $request->get('destination');
        $keyword = $request->get('keyword');
        $adventureLevel = $request->get('adventure_level');
        $motorcycle = $request->get('motorcycle');
        $date = $request->get('date');


        $queryBuilder = DB::table('tours')
            ->leftjoin('tour_destination', 'tours.id', '=', 'tour_destination.tours_id')
            ->leftjoin('tour_prices', 'tours.id', '=', 'tour_prices.tours_id')
            ->leftjoin('motorcycle', 'tour_prices.motorcycle_id', '=', 'motorcycle.id');

        if (!empty($destination)) {
            $queryBuilder->where('tour_destination.destination_id', '=', $destination);
        }

        if (!empty($keyword)) {
            $queryBuilder->where('tours.name', 'LIKE', '%' . $keyword . '%');
        }

        if (!empty($adventureLevel)) {
            $queryBuilder->where('tours.adventure_level', '=', $adventureLevel);
        }

        if (!empty($motorcycle)) {
            $queryBuilder->where('motorcycle.brand', '=', $motorcycle);
        }

        $searchedTours = $queryBuilder->select('tours.id', 'tours.name', 'tours.location', 'tours.duration', 'tours.photo', 'tours.description')
            ->groupby('tours.id')
            ->orderby('tours.id', 'desc')
            ->paginate(3)
            ->appends(Input::except('page'));

        return view('main.tour_search', compact('searchedTours'));
    }

    public function pageStatic(Pages $pages)
    {
        $recentTours = Tours::recent();
        return view('main.page_static', compact('pages', 'recentTours'));
    }

    public function pageDestination(Tours $tours)
    {
        $stages = $tours->stages;
        $itinerarys = $tours->itinerarys;
        $allTourPrices = $tours->tourPrices;
        $tourPrices = [];
        foreach ($allTourPrices as $aPrice) {
            if (!isset($tourPrices[$aPrice->motorcycle_id])) {
                $motorcycleEntity = Motorcycle::findOrFail($aPrice->motorcycle_id);
                $tourPrices[$aPrice->motorcycle_id] = [
                    'motor' => $motorcycleEntity,
                    $aPrice->type => $aPrice->price
                ];
            } else {
                $tourPrices[$aPrice->motorcycle_id][$aPrice->type] = $aPrice->price;
            }
        }

        $allComments = $tours->comments;
        return view('main.page_destination', compact('tours', 'stages', 'itinerarys', 'tourPrices', 'allComments'));
    }
	
	public function tourDetail($slug)
    {
		$tours = Tours::where('slug', '=', $slug)->first();
		return $this->pageDestination($tours);
    }

    public function comment(AddCommentRequest $request)
    {
        if ($request->hasFile('photo')) {
            try {
                $validation = Validator::make($request->all(), [
                    'name'  => 'required|max:150',
                    'year'  => 'required|max:150',
                    'description'  => 'required|max:500'
                ]);
                if ($validation->fails()) {
                    return redirect()->to(app('url')->previous(). '#comment-area')->withErrors($validation->errors())->withInput();
                }

                $request = $this->saveFiles($request);
                $comment = Comment::create($request->all());

                Session::flash('success', trans('Comment is posted.'));
                return redirect()->to(app('url')->previous(). '#comment-area');
            } catch (\Exception $exception) {
                $request->session()->flash('error', 'Internal Error:' . $exception->getMessage());
                return redirect()->to(app('url')->previous(). '#comment-area');
            }
        } else {
            $request->session()->flash('error', trans('Photo is required.'));
            return redirect()->to(app('url')->previous(). '#comment-area');
        }
    }

    public function contact(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'name'  => 'required|max:150',
                'email'  => 'required|email',
                'description'  => 'required|max:500'
            ]);
            if ($validation->fails()) {
                Session::flash('error', $validation->errors()->first());
                return redirect()->to(app('url')->previous())->withInput();
            }

            $contact = Contact::create($request->all());

            Session::flash('success', trans('Your request have been sent.'));
            return redirect()->to(app('url')->previous());
        } catch (\Exception $exception) {
            Session::flash('error', 'Internal Error:' . $exception->getMessage());
            return redirect()->to(app('url')->previous());
        }
    }

    public function newsletter(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'name'  => 'required|max:150',
                'email'  => 'required|email|unique:newsletter,email'
            ]);
            if ($validation->fails()) {
                Session::flash('error-newsletter', $validation->errors()->first());
                return redirect()->to(app('url')->previous(). '#newsletter-area')->withInput();
            }

            $newsletter = Newsletter::create($request->all());

            Session::flash('success-newsletter', trans('Your request have been sent.'));
            return redirect()->to(app('url')->previous(). '#newsletter-area');
        } catch (\Exception $exception) {
            Session::flash('error-newsletter', 'Internal Error:' . $exception->getMessage());
            return redirect()->to(app('url')->previous(). '#newsletter-area');
        }
    }
}
