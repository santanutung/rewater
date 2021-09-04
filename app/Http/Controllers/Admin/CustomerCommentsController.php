<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Art;

class CustomerCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('id', 'desc')->where('is_approve',0)->get();
        return view('admin.newcomments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $arts = Art::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('admin.newcomments.form',compact('arts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
    public function edit(Request $request)
    {

         $comment= Comment::find($request->newcomment);
         $art = Art::find($comment->art_id);




        return view('admin.newcomments.form',compact('comment','art'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

         $request->validate([
            'name' => 'required',
            'rating' => 'required',
            'comment'  => 'required',
            'approve'=>'required'
        ]);


      $comment= Comment::find($request->newcomment);
        $comment->update([
            'name' => $request->name,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'is_approve'=>$request->approve

        ]);
        toastr()->success('Comment updated successfully', 'Success');
        return redirect()->route('admin.newcomments.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $comment= Comment::find($request->newcomment);
       $comment->delete();
        toastr()->success('Comment deleted successfully', 'Success');
        return redirect()->route('admin.newcomments.index');
    }
}
