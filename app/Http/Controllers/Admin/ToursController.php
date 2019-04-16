<?php

namespace App\Http\Controllers\Admin;

use App\Destination;
use App\Http\Controllers\Controller;
use App\Motorcycle;
use App\Stages;
use App\TourDestination;
use App\TourPrices;
use Redirect;
use Schema;
use DB;
use Illuminate\Support\Facades\Validator;
use App\Tours;
use App\Itinerary;
use App\Http\Requests\CreateToursRequest;
use App\Http\Requests\UpdateToursRequest;
use Illuminate\Http\Request;



class ToursController extends Controller {

	/**
	 * Display a listing of tours
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $tours = Tours::all();

		return view('admin.tours.index', compact('tours'));
	}

	/**
	 * Show the form for creating a new tours
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
        $motorList = Motorcycle::all();
        $priceForList = [
            'room2ride2' => 'sharing room, riding 2 up',
            'room2ride1' => 'sharing room, riding solo',
            'room1ride1' => 'single room, riding solo',
        ];
        //$destinationList = Destination::all();
        $adventureLevels = config('category.tour_adventure_level');

	    return view('admin.tours.create', compact('destinationList', 'adventureLevels', 'motorList', 'priceForList'));
	}

	/**
	 * Store a newly created tours in storage.
	 *
     * @param CreateToursRequest|Request $request
	 */
	public function store(CreateToursRequest $request)
	{
        $validation = Validator::make($request->all(), [
            'name'  => 'required'
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        DB::beginTransaction();
        try {
            $request = $this->saveFiles($request);
            $tours = Tours::create($request->except(['itinerary_title']));

            $fields = [];
            foreach ($request->itinerary_title as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'title' => $field,
                    'description' => $request->itinerary_description[$index],
                ];

                Itinerary::create($fields[$index]);
            }

            $fields = [];
            foreach ($request->tour_price_motorcycle as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'motorcycle_id' => $field,
                    'type' => $request->tour_price_type[$index],
                    'price' => $request->tour_price_price[$index],
                ];

                TourPrices::create($fields[$index]);
            }

            $fields = [];
            foreach ($request->stage_number as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'number' => $field,
                    'from_date' => new \DateTime('@' . strtotime($request->stage_from_date[$index])),
                    'to_date' => new \DateTime('@' . strtotime($request->stage_to_date[$index])),
                    'description' => $request->stage_description[$index],
                ];

                Stages::create($fields[$index]);
            }

            $fields = [];
            foreach ($request->tour_destination_id as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'destination_id' => $field,
                    'sort' => $request->tour_destination_id[$index],
                ];

                TourDestination::create($fields[$index]);
            }

        } catch (\Exception $e) {
            DB::rollback();
            $request->session()->flash('error', 'Transaction could not be done! ' . $e->getMessage());
            return redirect()->back()->withInput();
        }

        DB::commit();

		return redirect()->route(config('quickadmin.route').'.tours.index');
	}

	/**
	 * Show the form for editing the specified tours.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$tours = Tours::find($id);
		$allTourDestination = TourDestination::where('tours_id', '=', $id)->get();
		$allTourItinerary = Itinerary::where('tours_id', '=', $id)->get();
		$allTourStages = Stages::where('tours_id', '=', $id)->get();
		$allTourPrices = TourPrices::where('tours_id', '=', $id)->get();

		// list for global using
        $motorList = Motorcycle::all();
        $priceForList = [
            'room2ride2' => 'sharing room, riding 2 up',
            'room2ride1' => 'sharing room, riding solo',
            'room1ride1' => 'single room, riding solo',
        ];
        //$isUpdate = true;

        return view('admin.tours.edit', compact(
            'tours',
            'allTourDestination',
            'allTourItinerary',
            'allTourStages',
            'allTourPrices',
            //'isUpdate',
            'motorList',
            'priceForList'
        ));
	}

	/**
	 * Update the specified tours in storage.
     * @param UpdateToursRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateToursRequest $request)
	{
		$tours = Tours::findOrFail($id);

        DB::beginTransaction();
        try {

            $request = $this->saveFiles($request);
            $tours->update($request->all());

            $fields = [];
            foreach ($request->itinerary_title as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'title' => $field,
                    //'photo' => $this->saveFileArray($request, 'itinerary_photo', $index),
                    'description' => $request->itinerary_description[$index],
                ];

                if (empty($request->itinerary_id[$index])) {
                    Itinerary::create($fields[$index]);
                } else {
                    $record = Itinerary::findOrFail($request->itinerary_id[$index]);
                    $record->update($fields[$index]);
                }
            }

            $fields = [];
            foreach ($request->tour_price_motorcycle as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'motorcycle_id' => $field,
                    'type' => $request->tour_price_type[$index],
                    'price' => $request->tour_price_price[$index],
                ];

                if (empty($request->tour_price_id[$index])) {
                    TourPrices::create($fields[$index]);
                } else {
                    $record = TourPrices::findOrFail($request->tour_price_id[$index]);
                    $record->update($fields[$index]);
                }
            }

            $fields = [];
            foreach ($request->stage_number as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'number' => $field,
                    'from_date' => new \DateTime('@' . strtotime($request->stage_from_date[$index])),
                    'to_date' => new \DateTime('@' . strtotime($request->stage_to_date[$index])),
                    'description' => $request->stage_description[$index],
                ];

                if (empty($request->stage_id[$index])) {
                    Stages::create($fields[$index]);
                } else {
                    $record = Stages::findOrFail($request->stage_id[$index]);
                    $record->update($fields[$index]);
                }
            }

            $fields = [];
            foreach ($request->tour_destination_id as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'destination_id' => $field,
                    'sort' => $request->tour_destination_id[$index],
                ];

                if (empty($request->tour_destination_rowid[$index])) {
                    TourDestination::create($fields[$index]);
                } else {
                    $record = TourDestination::findOrFail($request->tour_destination_rowid[$index]);
                    $record->update($fields[$index]);
                }
            }
        } catch (\Exception $e) {
            DB::rollback();
            $request->session()->flash('error', 'Transaction could not be done! ' . $e->getMessage());
            return redirect()->back()->withInput();
        }

        DB::commit();

		return redirect()->route(config('quickadmin.route').'.tours.index');
	}

	/**
	 * Remove the specified tours from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Tours::destroy($id);

		return redirect()->route(config('quickadmin.route').'.tours.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Tours::destroy($toDelete);
        } else {
            Tours::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.tours.index');
    }

}
