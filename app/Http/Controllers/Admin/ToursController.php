<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Tours;
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
	    
	    
	    return view('admin.tours.create');
	}

	/**
	 * Store a newly created tours in storage.
	 *
     * @param CreateToursRequest|Request $request
	 */
	public function store(CreateToursRequest $request)
	{
	    
		Tours::create($request->all());

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
