<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payments as payments;

class paymentsController extends Controller
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
        return payments::all()->toJSON();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payments = new payments;
        $payments->customersNumber = $request->customersNumber;
        $payments->checkNumber = $request->checkNumber;
        $payments->paymentDate = $request->$paymentDate;
        $payments->amount = $request->amount;
        $payments->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return payments::findOrFail($id)->toJSON();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return payments::findOrFail($id)->toJSON();
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
        $payments = payments::findOrFail($id);
        $payments->customersNumber = $request->customersNumber;
        $payments->checkNumber = $request->checkNumber;
        $payments->paymentDate = $request->$paymentDate;
        $payments->amount = $request->amount;
        $payments->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payments = payments::findOrFail($id);
        $payments->delete();
    }
}
