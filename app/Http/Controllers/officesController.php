<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offices as offices;

class officesController extends Controller
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
    public function select()
    {
        return offices::all()->toJSON();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offices = new offices;
        $offices->city = $request->city;
        $offices->phone = $request->phone;
        $offices->addressLine1 = $request->addressLine1;
        $offices->addressLine2 = $request->addressLine2;
        $offices->state = $request->state;
        $offices->country = $request->country;
        $offices->postalCode = $request->postalCode;
        $offices->territory = $request->territory;
        $offices->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return offices::findOrFail($id)->toJSON();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return offices::findOrFail($id)->toJSON();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offices = offices::findOrFail($id);
        $offices->city = $request->city;
        $offices->phone = $request->phone;
        $offices->addressLine1 = $request->addressLine1;
        $offices->addressLine2 = $request->addressLine2;
        $offices->state = $request->state;
        $offices->country = $request->country;
        $offices->postalCode = $request->postalCode;
        $offices->territory = $request->territory;
        $offices->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offices = findOrFail($id);
        $offices->delete();
    }
}
