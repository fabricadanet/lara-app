<?php

namespace App\Http\Controllers;

use App\Models\franchise;
use App\Http\Requests\StorefranchiseRequest;
use App\Http\Requests\UpdatefranchiseRequest;

class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $franchises = [];
        return view('app.franchise.index', compact('franchises'));
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
     * @param  \App\Http\Requests\StorefranchiseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefranchiseRequest $request)
    {
        //
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