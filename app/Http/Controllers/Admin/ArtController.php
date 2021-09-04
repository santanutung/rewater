<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Art;
use App\Models\Category;
use Illuminate\Http\Request;
use File;
use App\Models\ExtraImages;


class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = Art::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('admin.arts.index', compact('arts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('admin.arts.form', compact('categories'));
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
            'name' => 'required',
            'description' => 'required'
        ]);

        $slug = str_slug($request->name);

        $image = $request->file('main_images');
        if (isset($image)) {
            $imageName = $slug . '-' . time() . '.' . $image->extension();
            $image->move(public_path('images/art/'), $imageName);
        } else {
          $imageName ="";
        }



      $art=  Art::create([
            "name" => $request->name,
            "description" => $request->description,
            "item_id" => 0,
            "digital" => $request->digital ?? 0,
            "physical" => $request->physical ?? 0,
            "physical_instructions" => $request->physical_instructions ?? '',
            "digital_instructions" => $request->digital_instructions ?? '',
            "digital_art_price"  => $request->digital_art_price ?? '',
            "digital_art_dis" => $request->digital_art_dis ?? '',
            "digital_art_sell" => $request->digital_art_sell ?? '',
            "physical_art_price" => $request->physical_art_price ?? '',
            "physical_art_dis" => $request->physical_art_dis ?? '',
            "physical_art_sell" =>  $request->physical_art_sell ?? '',
            "size_physical" => $request->size_physical ?? '',
            "frame_color" => $request->frame_color ?? '',
            "materia_used_painting" => $request->materia_used_painting ?? '',
            "main_images" => $imageName,

        ]);


        if ($request->extra_images) {
            foreach ($request->extra_images as $key => $extra_image) {

                $slug = str_slug($request->name);
                $image = $extra_image;

                $extra_image = $slug . '-' . time() . '.' . $image->extension();
                $image->move(public_path('extra_image/art/'), $extra_image);

                ExtraImages::create([
                    'art_id' => $art->id,
                    'img' => $extra_image
                ]);


                $extra_images_name[] = $extra_image;
            }
        }
        // $extra_images_name = $extra_images_name ?? [0];

        $extra_images_save_name = $extra_images_name ?? [0];
        $extra_images_save_name = implode(",", $extra_images_save_name);

        toastr()->success('Art created successfully', 'Success');
        return redirect()->route('admin.arts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show(Art $art)
    {
        return view('admin.arts.show', compact('art'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        return view('admin.arts.form', compact('art'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Art $art)
    {


        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $slug = str_slug($request->name);
        $image = $request->file('main_images');
        if (isset($image)) {
            $imageName = $slug . '-' . time() . '.' . $image->extension();
            $image->move(public_path('images/art/'), $imageName);

            $image = public_path('images/art/' . $art->main_images);
            if (file_exists($image)) {
                unlink($image);
            }

        }else{
            // $imageName = "default.png";main_images
            $imageName = $art->main_images;
        }




        if ($request->extra_images) {
            foreach ($request->extra_images as $key => $extra_image) {

                $slug = str_slug($request->name);
                $image = $extra_image;

                $extra_image = $slug . '-' . time() . '.' . $image->extension();
                $image->move(public_path('extra_image/art/'), $extra_image);
                 $extra_images_name[] = $extra_image ;

                ExtraImages::where('art_id', $art->id)->update([
                    'img' => $extra_image
                ]);

            }
        }
        // $extra_images_name = $extra_images_name ?? [0];


        if (!isset($extra_images_name)) {
            $extra_images_save_name = $art->extra_images;

        }else{

            // $image = public_path('extra_image/art/' . $extra_image);
            // if (file_exists($image)) {
            //     unlink($image);
            // }
             $extra_images_save_name = $extra_images_name;
            $extra_images_save_name = implode(",", $extra_images_save_name);

        }

       //




        // dd($extra_images_save_name);
        //   dd($extra_images_name);


        // \File::delete($filename);

        $art->update([
            "name" => $request->name,
            "description" => $request->description,
            "item_id" => 0,
            "digital" => $request->digital ?? $art->digital,
            "physical" => $request->physical ?? $art->physical,
            "physical_instructions" => $request->physical_instructions ?? '',
            "digital_instructions" => $request->digital_instructions ?? '',
            "digital_art_price"  => $request->digital_art_price ?? '',
            "digital_art_dis" => $request->digital_art_dis ?? '',
            "digital_art_sell" => $request->digital_art_sell ?? '',
            "physical_art_price" => $request->physical_art_price ?? '',
            "physical_art_dis" => $request->physical_art_dis ?? '',
            "physical_art_sell" =>  $request->physical_art_sell ?? '',
            "size_physical" => $request->size_physical ?? '',
            "frame_color" => $request->frame_color ?? '',
            "materia_used_painting" => $request->materia_used_painting ?? '',
            "physical_art_delivery_time"=>'',
            "main_images" => $imageName,
            "extra_images" => $extra_images_save_name
        ]);

        //  $post->categories()->attach($request->categories);


        toastr()->success('Art updated successfully', 'Success');

        return redirect()->route('admin.arts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
        $art->update([
            'deleted' => 1
        ]);
        toastr()->success('Art deleted successfully', 'Success');
        return redirect()->route('admin.arts.index');
    }
}
