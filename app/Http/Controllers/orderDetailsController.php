<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetails as orderDetails;

class orderDetailsController extends Controller
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
        return orderDetails::all()->toJSON();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orderDetails = new orderDetails;
        $orderDetails->orderCode = $request->orderCode;
        $orderDetails->quantityOrdered = $request->quantityOrdered;
        $orderDetails->priceEach = $request->priceEach;
        $orderDetails->orderLineNumber = $request->orderLineNumber;
        $orderDetails->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return orderDetails::findOrFail($id)->toJSON();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return orderDetails::findOrFail($id)->toJSON();
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
        $orderDetails = orderDetails::findOrFail($id);
        $orderDetails->orderCode = $request->orderCode;
        $orderDetails->quantityOrdered = $request->quantityOrdered;
        $orderDetails->priceEach = $request->priceEach;
        $orderDetails->orderLineNumber = $request->orderLineNumber;
        $orderDetails->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderDetails = orderDetails::findOrFail($id);
        $orderDetails->delete();
    }
}
