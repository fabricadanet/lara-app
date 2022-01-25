<?php

namespace App\Http\Controllers;

use App\Models\BuyIntention;
use App\Models\Client;
use App\Models\Realty;
use App\Models\SaleOrder;
use Illuminate\Http\Request;

class BuyIntentionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buy_intentions = BuyIntention::where('status', 'active')->get();
        dd($buy_intentions);
        return view('app.buy_intention.index', [
            'buy_intentions' => $buy_intentions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $realties = Realty::all();
        return view('app.client.intention.create',compact('clients','realties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buyIntention = $request->all();

        $buyIntention['user_id'] = auth()->user()->id;
        $buyIntention['status'] = 'active';

        BuyIntention::create($buyIntention);
        return redirect()->route('clients.intention');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuyIntention  $buyIntention
     * @return \Illuminate\Http\Response
     */
    public function show(BuyIntention $buyIntention, $id)
    {
        $buyIntention = BuyIntention::find($id);
        return view('app.client.intention.show',compact('buyIntention'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuyIntention  $buyIntention
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyIntention $buyIntention)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BuyIntention  $buyIntention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyIntention $buyIntention)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuyIntention  $buyIntention
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyIntention $buyIntention)
    {
        //
    }

    public function createSale($id)
    {
        $buyIntention = BuyIntention::find($id);
        $buyIntention->status = 'sale_order';
        $buyIntention->update();
        SaleOrder::create([
            'buy_intention_id' => $id,
            'user_id' => auth()->user()->id,
            'status' => 'waiting'
        ]);
        return redirect()->route('clients.intention');
    }
}