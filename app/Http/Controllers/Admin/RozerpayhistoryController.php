<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rozerpay;
use Illuminate\Http\Request;

class RozerpayhistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rozerpay =  Rozerpay::orderBy('id', 'desc')->get();
        return  view('admin.razorpay_history.index', compact('rozerpay'));

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
     * @param  \App\Models\Rozerpay  $rozerpay
     * @return \Illuminate\Http\Response
     */
    public function show(Rozerpay $rozerpay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rozerpay  $rozerpay
     * @return \Illuminate\Http\Response
     */
    public function edit(Rozerpay $rozerpay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rozerpay  $rozerpay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rozerpay $rozerpay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rozerpay  $rozerpay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rozerpay $rozerpay)
    {
        //
    }
}
