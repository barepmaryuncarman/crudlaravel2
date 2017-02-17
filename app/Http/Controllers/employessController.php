<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employess as employess;

class employessController extends Controller
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
        return employess::all->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employess = new employess;
        $employess->firstName = $request->firstName;
        $employess->lastName = $request->lastName;
        $employess->extension = $request->extension;
        $employess->email = $request->email;
        $employess->officeCode = $request->officeCode;
        $employess->reportsTo = $request->reportsTo;
        $employess->jobTitle = $request->jobTitle;
        $employess->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return employess::findOrFail($id)->toJSON();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return employess::findOrFail($id)->toJSON();
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
        $employess = employess::findOrFail($id);
        $employess->firstName = $request->firstName;
        $employess->lastName = $request->lastName;
        $employess->extension = $request->extension;
        $employess->email = $request->email;
        $employess->officeCode = $request->officeCode;
        $employess->reportsTo = $request->reportsTo;
        $employess->jobTitle = $request->jobTitle;
        $employess->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employess = employess::findOrFail($id);
        $employess->delete();
    }
}
