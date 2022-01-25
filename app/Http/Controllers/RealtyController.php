<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Franchise;
use App\Models\Realty;
use App\Http\Requests\StoreRealtyRequest;
use App\Http\Requests\UpdateRealtyRequest;

class RealtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.realty.index', [
            'realties' => Realty::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('app.realty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRealtyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRealtyRequest $request)
    {
        $data = $request->all();

        $data['user_id'] = auth()->user()->id;
        $data['address_id'] = Address::create($data)->id;
        $data['franchise_id'] = 1;

        Realty::create($data);

        return redirect()->route('realties.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Realty  $realty
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('app.realty.show', [
            'realty' => Realty::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Realty $realty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $realty = Realty::findOrFail($id);

        return view('app.realty.edit', [
            'realty' => $realty
        ]);
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRealtyRequest  $request
     * @param  \App\Models\Realty  $realty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRealtyRequest $request, $id)
    {
        $realty = Realty::findOrFail($id);
        $realty->update($request->all());

        return redirect()->route('realties.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Realty  $realty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realty $id)
    {
        $realty = Realty::find($id);
        $realty->delete();

        return redirect()->route('realties.index');
    }
}