<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders as orders;

class ordersController extends Controller
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
        return orders::all()->toJSON();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders = new orders;
        $orders->ordersDate = $request->ordersDate;
        $orders->requiredDate = $request->requiredDate;
        $orders->shippedDate = $request->shippedDate;
        $orders->status = $request->status;
        $orders->comments = $request->comments;
        $orders->customersNumber = $request->customersNumber;
        $orders->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return orders::findOrFail($id)->toJSON();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return orders::findOrFail($id)->toJSON();
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
        $orders = orders::findOrFail($id);
        $orders->ordersDate = $request->ordersDate;
        $orders->requiredDate = $request->requiredDate;
        $orders->shippedDate = $request->shippedDate;
        $orders->status = $request->status;
        $orders->comments = $request->comments;
        $orders->customersNumber = $request->customersNumber;
        $orders->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = orders::findOrFail($id);
        $orders->delete();
    }
}
