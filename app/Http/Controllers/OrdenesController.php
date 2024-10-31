<?php

namespace App\Http\Controllers;

use App\Models\Ordenes;
use App\Http\Requests\StoreOrdenesRequest;
use App\Http\Requests\UpdateOrdenesRequest;

class OrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Ordenes::all();
        return view('ordenes.index', ['ordenes' => $ordenes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ordenes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrdenesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdenesRequest $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login'); // Redirige a la página de login
        }
        $request->validate([
            'nrOrden' => 'required|unique:ordenes|max:20',
            'direccion' => 'required|string',
            'tarea_id' => 'required|Integer',
            'cliente_id' => 'required|Integer',
            'fecha' => 'required|date',
            'estado_id' => 'required|Integer',
            'vehiculo_id' => 'required|Integer',
        ]);
        
        $ordenes = new Ordenes();
        $ordenes ->nrOrden = $request->input('nrOrden');
        $ordenes ->direccion = $request->input('direccion');
        $ordenes ->tarea_id = $request->input('tarea_id');
        $ordenes ->cliente_id = $request->input('cliente_id');
        $ordenes ->fecha = $request->input('fecha');
        $ordenes ->estado_id = $request->input('estado_id');
        $ordenes ->vehiculo_id = $request->input('vehiculo_id');
        $ordenes->save();

        return redirect()->route('ordenes.index')->with('msg', 'Registro guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return \Illuminate\Http\Response
     */
    public function show(Ordenes $ordenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordenes = Ordenes::find($id);
        return view('ordenes.edit', ['ordenes' => $ordenes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrdenesRequest  $request
     * @param  \App\Models\Ordenes  $ordenes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdenesRequest $request, $id)
    {
        $request->validate([
            'nrOrden' => 'required|unique:ordenes,nrOrden,' . $id . '|max:20',
            'direccion' => 'required|string',
            'tarea_id' => 'required|integer',
            'cliente_id' => 'required|integer',
            'fecha' => 'required|date',
            'estado_id' => 'required|integer',
            'vehiculo_id' => 'required|integer',
        ]);

        $ordenes = Ordenes::find($id);
        $ordenes->nrOrden = $request->input('nrOrden');
        $ordenes->direccion = $request->input('direccion');
        $ordenes->tarea_id = $request->input('tarea_id');
        $ordenes->cliente_id = $request->input('cliente_id');
        $ordenes->fecha = $request->input('fecha');
        $ordenes->estado_id = $request->input('estado_id');
        $ordenes->vehiculo_id = $request->input('vehiculo_id');
        $ordenes->save();

        return redirect()->route('ordenes.index')->with('msg', 'Registro modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ordenes = Ordenes::find($id);
        if ($ordenes) {
            $ordenes->delete();
            return redirect()->route('ordenes.index')->with('msg', 'Registro eliminado');
        }
    
        return redirect()->route('ordenes.index')->with('error', 'Registro no encontrado');
    }
}
