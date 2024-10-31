<?php

namespace App\Http\Controllers;

use App\Models\Materiales;
use App\Http\Requests\StoreMaterialesRequest;
use App\Http\Requests\UpdateMaterialesRequest;

class MaterialesController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaterialesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterialesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function show(Materiales $materiales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiales $materiales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialesRequest  $request
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterialesRequest $request, Materiales $materiales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiales $materiales)
    {
        //
    }
}
