<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Newsletter;
use App\Http\Requests\CreateNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;
use Illuminate\Http\Request;



class NewsletterController extends Controller {

	/**
	 * Display a listing of newsletter
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $newsletter = Newsletter::all();

		return view('admin.newsletter.index', compact('newsletter'));
	}

	/**
	 * Show the form for creating a new newsletter
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.newsletter.create');
	}

	/**
	 * Store a newly created newsletter in storage.
	 *
     * @param CreateNewsletterRequest|Request $request
	 */
	public function store(CreateNewsletterRequest $request)
	{
	    
		Newsletter::create($request->all());

		return redirect()->route(config('quickadmin.route').'.newsletter.index');
	}

	/**
	 * Show the form for editing the specified newsletter.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$newsletter = Newsletter::find($id);
	    
	    
		return view('admin.newsletter.edit', compact('newsletter'));
	}

	/**
	 * Update the specified newsletter in storage.
     * @param UpdateNewsletterRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateNewsletterRequest $request)
	{
		$newsletter = Newsletter::findOrFail($id);

        

		$newsletter->update($request->all());

		return redirect()->route(config('quickadmin.route').'.newsletter.index');
	}

	/**
	 * Remove the specified newsletter from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Newsletter::destroy($id);

		return redirect()->route(config('quickadmin.route').'.newsletter.index');
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
            Newsletter::destroy($toDelete);
        } else {
            Newsletter::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.newsletter.index');
    }

}
