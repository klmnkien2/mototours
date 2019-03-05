<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Comment;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Tours;


class CommentController extends Controller {

	/**
	 * Display a listing of comment
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $comment = Comment::with("tours")->get();

		return view('admin.comment.index', compact('comment'));
	}

	/**
	 * Show the form for creating a new comment
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $tours = Tours::pluck("id", "id")->prepend('Please select', 0);

	    
	    return view('admin.comment.create', compact("tours"));
	}

	/**
	 * Store a newly created comment in storage.
	 *
     * @param CreateCommentRequest|Request $request
	 */
	public function store(CreateCommentRequest $request)
	{
	    $request = $this->saveFiles($request);
		Comment::create($request->all());

		return redirect()->route(config('quickadmin.route').'.comment.index');
	}

	/**
	 * Show the form for editing the specified comment.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$comment = Comment::find($id);
	    $tours = Tours::pluck("id", "id")->prepend('Please select', 0);

	    
		return view('admin.comment.edit', compact('comment', "tours"));
	}

	/**
	 * Update the specified comment in storage.
     * @param UpdateCommentRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCommentRequest $request)
	{
		$comment = Comment::findOrFail($id);

        $request = $this->saveFiles($request);

		$comment->update($request->all());

		return redirect()->route(config('quickadmin.route').'.comment.index');
	}

	/**
	 * Remove the specified comment from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Comment::destroy($id);

		return redirect()->route(config('quickadmin.route').'.comment.index');
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
            Comment::destroy($toDelete);
        } else {
            Comment::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.comment.index');
    }

}
