<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\franchise;
use App\Http\Requests\StorefranchiseRequest;
use App\Http\Requests\UpdatefranchiseRequest;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $franchises = Franchise::all();
        return view('app.franchise.index', compact('franchises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('app.franchise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefranchiseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefranchiseRequest $request)
    {

       $data = $request->all();

       $data['user_id'] = auth()->user()->id;
       $data['address_id'] = Address::create($data)->id;
       Franchise::create($data);

        return redirect()->route('franchise.index')->withStatus(__('Franchise successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function show(franchise $franchise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function edit(franchise $franchise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefranchiseRequest  $request
     * @param  \App\Models\franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefranchiseRequest $request, franchise $franchise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function destroy(franchise $franchise)
    {
        //
    }
}
