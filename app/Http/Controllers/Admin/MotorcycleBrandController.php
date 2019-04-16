<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\MotorcycleBrand;
use App\Http\Requests\CreateMotorcycleBrandRequest;
use App\Http\Requests\UpdateMotorcycleBrandRequest;
use Illuminate\Http\Request;



class MotorcycleBrandController extends Controller {

	/**
	 * Display a listing of motorcyclebrand
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $motorcyclebrand = MotorcycleBrand::all();

		return view('admin.motorcyclebrand.index', compact('motorcyclebrand'));
	}

	/**
	 * Show the form for creating a new motorcyclebrand
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.motorcyclebrand.create');
	}

	/**
	 * Store a newly created motorcyclebrand in storage.
	 *
     * @param CreateMotorcycleBrandRequest|Request $request
	 */
	public function store(CreateMotorcycleBrandRequest $request)
	{
	    
		MotorcycleBrand::create($request->all());

		return redirect()->route(config('quickadmin.route').'.motorcyclebrand.index');
	}

	/**
	 * Show the form for editing the specified motorcyclebrand.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$motorcyclebrand = MotorcycleBrand::find($id);
	    
	    
		return view('admin.motorcyclebrand.edit', compact('motorcyclebrand'));
	}

	/**
	 * Update the specified motorcyclebrand in storage.
     * @param UpdateMotorcycleBrandRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMotorcycleBrandRequest $request)
	{
		$motorcyclebrand = MotorcycleBrand::findOrFail($id);

        

		$motorcyclebrand->update($request->all());

		return redirect()->route(config('quickadmin.route').'.motorcyclebrand.index');
	}

	/**
	 * Remove the specified motorcyclebrand from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		MotorcycleBrand::destroy($id);

		return redirect()->route(config('quickadmin.route').'.motorcyclebrand.index');
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
            MotorcycleBrand::destroy($toDelete);
        } else {
            MotorcycleBrand::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.motorcyclebrand.index');
    }

}
