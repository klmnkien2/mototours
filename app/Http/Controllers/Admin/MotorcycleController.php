<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Motorcycle;
use App\Http\Requests\CreateMotorcycleRequest;
use App\Http\Requests\UpdateMotorcycleRequest;
use Illuminate\Http\Request;



class MotorcycleController extends Controller {

	/**
	 * Display a listing of motorcycle
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $motorcycle = Motorcycle::all();

		return view('admin.motorcycle.index', compact('motorcycle'));
	}

	/**
	 * Show the form for creating a new motorcycle
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.motorcycle.create');
	}

	/**
	 * Store a newly created motorcycle in storage.
	 *
     * @param CreateMotorcycleRequest|Request $request
	 */
	public function store(CreateMotorcycleRequest $request)
	{
	    
		Motorcycle::create($request->all());

		return redirect()->route(config('quickadmin.route').'.motorcycle.index');
	}

	/**
	 * Show the form for editing the specified motorcycle.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$motorcycle = Motorcycle::find($id);
	    
	    
		return view('admin.motorcycle.edit', compact('motorcycle'));
	}

	/**
	 * Update the specified motorcycle in storage.
     * @param UpdateMotorcycleRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMotorcycleRequest $request)
	{
		$motorcycle = Motorcycle::findOrFail($id);

        

		$motorcycle->update($request->all());

		return redirect()->route(config('quickadmin.route').'.motorcycle.index');
	}

	/**
	 * Remove the specified motorcycle from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Motorcycle::destroy($id);

		return redirect()->route(config('quickadmin.route').'.motorcycle.index');
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
            Motorcycle::destroy($toDelete);
        } else {
            Motorcycle::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.motorcycle.index');
    }

}
