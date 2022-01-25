<?php

namespace App\Http\Controllers;

use App\Models\SaleOrder;
use Illuminate\Http\Request;

class SaleOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale_orders = SaleOrder::all();
      
        return view('app.client.sale_order.index', [
            'sale_orders' => $sale_orders
        ]);
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
     * @param  \App\Models\saleOrder  $saleOrder
     * @return \Illuminate\Http\Response
     */
    public function show(saleOrder $saleOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\saleOrder  $saleOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(saleOrder $saleOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\saleOrder  $saleOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, saleOrder $saleOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\saleOrder  $saleOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(saleOrder $saleOrder)
    {
        //
    }
}