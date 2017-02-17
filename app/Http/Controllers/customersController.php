<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Customers as customers;

class customersController extends Controller
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
        return customers::all->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = new customers;
        $customers->contactNumber = $request->contactNumber;
        $customers->firstName = $request->fistName;
        $customers->lastName = $request->lastName;
        $customers->phone = $request->phone;
        $customers->addressLine1 = $request->addressLine1;
        $customers->addressLine2 = $request->addressLine2;
        $customers->city = $request->city;
        $customers->state = $request->state;
        $customers->postalCode = $request->postalCode;
        $customers->country = $request->country;
        $customers->salesRepEmployeeNumber = $request->salesRepEmployeeNumber;
        $customers->creditLimit = $request->creditLimit;
        $customers->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return customers::findOrFail($id)->toJSON();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return customers::findOrFail($id)->toJSON();
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
        $customers = customers::findOrFail($id);
        $customers->contactNumber = $request->contactNumber;
        $customers->firstName = $request->fistName;
        $customers->lastName = $request->lastName;
        $customers->phone = $request->phone;
        $customers->addressLine1 = $request->addressLine1;
        $customers->addressLine2 = $request->addressLine2;
        $customers->city = $request->city;
        $customers->state = $request->state;
        $customers->postalCode = $request->postalCode;
        $customers->country = $request->country;
        $customers->salesRepEmployeeNumber = $request->salesRepEmployeeNumber;
        $customers->creditLimit = $request->creditLimit;
        $customers->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers = customers::findOrFail($id);
        $customers->delete();
    }
}
