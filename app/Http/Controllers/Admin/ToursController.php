<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Motorcycle;
use App\Stages;
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

	    return view('admin.tours.create', compact('motorList', 'priceForList'));
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
            $tours = Tours::create($request->except(['itinerary_title']));

            foreach ($request->itinerary_title as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'title' => $field,
                    'description' => $request->itinerary_description[$index],
                ];

                Itinerary::create($fields[$index]);
            }

            foreach ($request->tour_price_motorcycle as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'motorcycle_id' => $field,
                    'type' => $request->tour_price_type[$index],
                    'price' => $request->tour_price_price[$index],
                ];

                TourPrices::create($fields[$index]);
            }

            foreach ($request->stage_number as $index => $field) {
                $fields[$index] = [
                    'tours_id' => $tours->id,
                    'number' => $field,
                    'from_date' => $request->stage_from_date[$index],
                    'to_date' => $request->stage_to_date[$index],
                    'description' => $request->stage_description[$index],
                ];

                Stages::create($fields[$index]);
            }
        } catch (\Exception $e) {
            DB::rollback();
            $request->session()->flash('error', 'Transaction could not be done!');
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
	    
	    
		return view('admin.tours.edit', compact('tours'));
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

        

		$tours->update($request->all());

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
