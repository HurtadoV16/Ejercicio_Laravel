<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\Camion;
use Illuminate\Http\Request;
use App\Http\Requests\StorePaqueteRequest;
use App\Http\Requests\UpdatePaqueteRequest;

class PaqueteController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paquetes = Paquete::with('camiones')->get();
        return view('paquetes.index', compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $camiones = Camion::all();
        return view('paquetes.create', compact('camiones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paquete = Paquete::create($request->all());

        if ($request->has('camiones')) {
            $paquete->camiones()->attach($request->input('camiones'));
        }

        return redirect()->route('paquetes.index')->with('success', 'Paquete creado correctamente.');
    }

    /**
     * Asignar un camión a un paquete.
     */
    public function asignarCamion(Paquete $paquete, Camion $camion)
    {
        $paquete->camiones()->attach($camion);
        return redirect()->route('paquetes.show', $paquete)->with('success', 'Camión asignado correctamente.');
    }

    /**
     * Quitar un camión de un paquete.
     */
    public function quitarCamion(Paquete $paquete, Camion $camion)
    {
        $paquete->camiones()->detach($camion);
        return redirect()->route('paquetes.show', $paquete)->with('success', 'Camión quitado correctamente.');
    }
    public function show(Paquete $paquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paquete $paquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaqueteRequest $request, Paquete $paquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paquete $paquete)
    {
        //
    }
}
