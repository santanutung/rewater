<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news= News::orderBy('id', 'desc')->get();
         return view('admin.news.index',compact('news') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('admin.news.form');
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
         'tittle' => 'required',
         'description' => 'required'
        ]);

        News::create([
            'tittle' => $request->tittle,
            'description'=>$request->description
        ]);
        toastr()->success('News created successfully', 'Success');
        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
          return view('admin.news.form',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
         $request->validate([
         'tittle' => 'required',
         'description' => 'required'
        ]);

         $news->update([
            'tittle' => $request->tittle,
            'description'=>$request->description
        ]);
        toastr()->success('News updated successfully', 'Success');
        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        toastr()->success('News deleted successfully', 'Success');
        return redirect()->route('admin.news.index');
    }
}
