<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Art;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('id', 'desc')->where('is_approve',1)->get();

        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arts = Art::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('admin.comments.form',compact('arts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'art' => 'required',
            'name' => 'required',
            'rating' => 'required',
            'comment'  => 'required',

        ]);
       


        Comment::create([
            'art_id' => $request->art,
            'name' => $request->name,
            'rating' => $request->rating,
            'comment' => $request->comment,
              'is_approve'=>1

        ]);
        toastr()->success('Comment created successfully', 'Success');
        return redirect()->route('admin.comments.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $arts = Art::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('admin.comments.form', compact('comment', 'arts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'art' => 'required',
            'name' => 'required',
            'rating' => 'required',

            'comment'  => 'required'
        ]);
        $digital = $request->digital ?? '0';
        $physical = $request->physical ?? '0';


        $comment->update([
            'art_id' => $request->art,
            'digital' => $digital,
            'physical' => $physical,
            'name' => $request->name,
            'rating' => $request->rating,
            'comment' => $request->comment

        ]);
        toastr()->success('Comment updated successfully', 'Success');
        return redirect()->route('admin.comments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {

        $comment->delete();
        toastr()->success('Comment deleted successfully', 'Success');
        return redirect()->route('admin.comments.index');
    }
}
