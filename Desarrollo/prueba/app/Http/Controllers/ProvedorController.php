<?php

namespace App\Http\Controllers;

use App\Models\Provedor;
use App\Http\Requests\ProveedoresRequest;

class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Provedor::all();
        return view('proveedores/index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProveedoresRequest $request)
    {
        Provedor::create($request->validated());
        return redirect()->route('proveedores.index'); 
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provedor $proveedor)
    {
        return view('proveedores/edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProveedoresRequest $request, Provedor $proveedor)
    {
        $datos_validados = $request->validated();
        $proveedor->update($datos_validados);
        return redirect()->route('proveedores.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedores.index'); 
    }
}
