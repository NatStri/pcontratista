<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClientesRequest;
use App\Http\Requests\UpdateClientesRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|unique:clientes|max:10',
            'apellido' => 'required|max:50',
            'nombre' => 'required|max:50',
            'fecha_nac' => 'required|date',
        ]);
        
        $clientes = new Clientes();
        $clientes ->dni = $request->input('dni');
        $clientes ->apellido = $request->input('apellido');
        $clientes ->nombre = $request->input('nombre');
        $clientes ->fecha_nac = $request->input('fecha_nac');
        $clientes->save();

        return view('clientes.message', ['msg' => "Registro guardado"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Cambia a 'cliente' para reflejar que es un solo registro
        $cliente = Clientes::find($id);
    
        // Verifica que el cliente exista
        if (!$cliente) {
            return redirect()->route('clientes.index')->with('error', 'Cliente no encontrado.');
        }
    
        return view('clientes.edit', ['cliente' => $cliente]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientesRequest  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'dni' => 'required|string|max:20',
        'apellido' => 'required|string|max:50',
        'nombre' => 'required|string|max:50',
        'fecha_nac' => 'required|date', // Asegúrate de que aquí esté
    ]);

    $cliente = Clientes::find($id);
    if (!$cliente) {
        return redirect()->route('clientes.index')->with('error', 'Cliente no encontrado.');
    }

    $cliente->dni = $request->input('dni');
    $cliente->apellido = $request->input('apellido');
    $cliente->nombre = $request->input('nombre');
    $cliente->fecha_nac = $request->input('fecha_nac');
    $cliente->save();

    return redirect()->route('clientes.index')->with('msg', 'Cliente actualizado correctamente');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Clientes::find($id);
    
        if (!$cliente) {
            return redirect()->route('clientes.index')->with('error', 'Cliente no encontrado.');
        }
    
        $cliente->delete();
    
        return redirect()->route('clientes.index')->with('msg', 'Cliente eliminado.');
    }
    
}
