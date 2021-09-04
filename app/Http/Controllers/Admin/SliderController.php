<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders= Slider::orderBy('id', 'desc')->get();
        return view('admin.slider.index', compact('sliders'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.form');
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
         'sliders' => 'required',
         'images' => 'required'
        ]);
        $slug = str_slug($request->sliders);
        $image = $request->file('images');
        if (isset($image)) {
            $imageName = $slug . '-' . time() . '.' . $image->extension();
            $image->move(public_path('images/slider'), $imageName);
        } else {
            $imageName = "";
        }
        Slider::create([
            'name' => $request->sliders,
            'img'=>$imageName
        ]);
        toastr()->success('Slider created successfully', 'Success');
        return redirect()->route('admin.sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.form',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'sliders' => 'required',
        ]);

        $slug = str_slug($request->sliders);
        $image = $request->file('images');

        if (isset($image)) {

            $imageName = $slug . '-' . time() . '.' . $image->extension();
            $image->move(public_path('images/slider'), $imageName);
        } else {
            $imageName = "";
        }

        $slider->update([
            'name' => $request->sliders,
            'img' => $imageName
        ]);
        toastr()->success('Slider updated successfully', 'Success');
        return redirect()->route('admin.sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
         toastr()->success('Slider deleted successfully', 'Success');
        return redirect()->route('admin.sliders.index');
    }
}
