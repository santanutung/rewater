<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sitesetting;
use Illuminate\Http\Request;

class SitesettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function show(Sitesetting $sitesetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Sitesetting $sitesetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sitesetting $sitesetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sitesetting $sitesetting)
    {
        //
    }

    public function portfoliosetting_show()
    {
        $sitesetting = Sitesetting::find(1);
        return view('admin.settings.portfolio.form', compact('sitesetting'));
    }
    public function portfoliosetting_update(Request $request)
    {



        $request->validate([
            'portfolio_page_tittle' => 'required',
            'portfolio_page_text' => 'required'

        ]);

        $contactpage_setting = Sitesetting::find(1);

        $contactpage_setting->update([
            'portfolio_page_tittle' => $request->portfolio_page_tittle,
            'portfolio_page_text' => $request->portfolio_page_text

        ]);

        toastr()->success('Portfolio page   updated successfully', 'Success');
        return back();
    }
    public function sitesetting_show()
    {
        $sitesetting = Sitesetting::find(1);
        return view('admin.settings.sitesettings.form', compact('sitesetting'));
    }
    public function sitesetting_update(Request $request)
    {

        // return  $request->all();

        $request->validate([
            'font_logo_text' => 'required',
            'showcase_tittle' => 'required',
            'showcase_text' => 'required',
            'news_tittle' => 'required',
            'news_text' => 'required'
        ]);

        $contactpage_setting = Sitesetting::find(1);

        $contactpage_setting->update([
            'font_logo_text' => $request->font_logo_text,
            'portfolio_tittle' => $request->showcase_tittle,
            'portfolio_text' => $request->showcase_text,
            'news_tittle' => $request->news_tittle,
            'news_text' => $request->news_text
        ]);

        toastr()->success('home page   updated successfully', 'Success');
        return back();
    }
    public function rozerpay_show()
    {
        $sitesetting = Sitesetting::find(1);
        return view('admin.settings.rozerpay.form', compact('sitesetting'));
    }
    public function rozerpay_update(Request $request)
    {

        // return  $request->all();

        $request->validate([
            'rozerpay_key_id' => 'required',
            'rozerpay_key_secret' => 'required'
        ]);

        $contactpage_setting = Sitesetting::find(1);

        $contactpage_setting->update([
            'rozerpay_key_id' => $request->rozerpay_key_id,
            'rozerpay_key_secret' => $request->rozerpay_key_secret
        ]);

        toastr()->success('Rozerpay key   updated successfully', 'Success');
        return back();
    }
}
