<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AjaxUploadRequest;
use Redirect;
use Schema;
use App\Media;
use App\Http\Requests\CreateMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class MediaController extends Controller {

	/**
	 * Display a listing of media
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $media = Media::all();

		return view('admin.media.index', compact('media'));
	}

	/**
	 * Show the form for creating a new media
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.media.create');
	}

	/**
	 * Store a newly created media in storage.
	 *
     * @param CreateMediaRequest|Request $request
	 */
	public function store(CreateMediaRequest $request)
	{
	    $request = $this->saveFiles($request);
		Media::create($request->all());

		return redirect()->route(config('quickadmin.route').'.media.index');
	}

	/**
	 * Show the form for editing the specified media.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$media = Media::find($id);
	    
	    
		return view('admin.media.edit', compact('media'));
	}

	/**
	 * Update the specified media in storage.
     * @param UpdateMediaRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMediaRequest $request)
	{
		$media = Media::findOrFail($id);

        $request = $this->saveFiles($request);

		$media->update($request->all());

		return redirect()->route(config('quickadmin.route').'.media.index');
	}

	/**
	 * Remove the specified media from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Media::destroy($id);

		return redirect()->route(config('quickadmin.route').'.media.index');
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
            Media::destroy($toDelete);
        } else {
            Media::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.media.index');
    }

    public function uploadFileAjax(AjaxUploadRequest $request)
    {
        if ($request->hasFile('upload')) {
            try {
                $request = $this->saveFiles($request);
                return response()->json([
                    'fileName' => $request->get('upload'),
                    'uploaded' => 1,
                    'url' => asset('uploads/' . $request->get('upload')),
                ]);
            } catch (\Exception $exception) {
                return response()->json([
                    'error' => ['number' => 1001, 'message' => trans('Internal Error:') . $exception->getMessage()]
                ]);
            }
        } else {
            return response()->json([
                'error' => ['number' => 1000, 'message' => trans('no file selected')]
            ]);
        }
    }

}
