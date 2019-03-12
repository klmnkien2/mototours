<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\AddCommentRequest;
use App\Media;
use DB;
use App\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Pages;
use Session;

class MainController extends Controller
{
    public function home()
    {
        $recentPhotos = Media::orderby('id')->paginate(12);
        return view('main.home', compact('recentPhotos'));
    }

    public function medias()
    {
        $recentPhotos = Media::orderby('id')->paginate(5);
        return view('main.medias', compact('recentPhotos'));
    }

    public function tourList()
    {
        $allTours = Tours::orderby('id')->paginate(20);
        return view('main.tour_list', compact('allTours'));
    }

    public function pageStatic(Pages $pages)
    {
        return view('main.page_static', compact('pages'));
    }

    public function pageDestination(Tours $tours)
    {
        $stages = $tours->stages;
        $itinerarys = $tours->itinerarys;
        $tourPrices = $tours->tourPrices;
        $allComments = $tours->comments;
        return view('main.page_destination', compact('tours', 'stages', 'itinerarys', 'tourPrices', 'allComments'));
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
                    return redirect()->to(app('url')->previous(). '#comment-message')->withErrors($validation->errors())->withInput();
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

    public function contact()
    {
        return view('main.contact');
    }
}
