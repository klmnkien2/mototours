<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Destination;
use App\Http\Requests\CreateDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use Illuminate\Http\Request;



class DestinationController extends Controller {

	/**
	 * Display a listing of destination
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $destination = Destination::all();

		return view('admin.destination.index', compact('destination'));
	}

	/**
	 * Show the form for creating a new destination
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.destination.create');
	}

	/**
	 * Store a newly created destination in storage.
	 *
     * @param CreateDestinationRequest|Request $request
	 */
	public function store(CreateDestinationRequest $request)
	{
	    
		Destination::create($request->all());

		return redirect()->route(config('quickadmin.route').'.destination.index');
	}

	/**
	 * Show the form for editing the specified destination.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$destination = Destination::find($id);
	    
	    
		return view('admin.destination.edit', compact('destination'));
	}

	/**
	 * Update the specified destination in storage.
     * @param UpdateDestinationRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDestinationRequest $request)
	{
		$destination = Destination::findOrFail($id);

        

		$destination->update($request->all());

		return redirect()->route(config('quickadmin.route').'.destination.index');
	}

	/**
	 * Remove the specified destination from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Destination::destroy($id);

		return redirect()->route(config('quickadmin.route').'.destination.index');
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
            Destination::destroy($toDelete);
        } else {
            Destination::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.destination.index');
    }

}
