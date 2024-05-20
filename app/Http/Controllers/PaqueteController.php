<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\Camion;
use Illuminate\Http\Request;
use App\Http\Requests\StorePaqueteRequest;
use App\Http\Requests\UpdatePaqueteRequest;

class PaqueteController extends Controller
{

    public function index()
    {
        $paquetes = Paquete::with('camiones')->get();
        return view('paquetes.index', compact('paquetes'));
    }


    public function create()
    {
        $camiones = Camion::all();
        return view('paquetes.create', compact('camiones'));
    }


    public function store(Request $request)
    {
        $paquete = Paquete::create($request->all());

        if ($request->has('camiones')) {
            $paquete->camiones()->attach($request->input('camiones'));
        }

        return redirect()->route('paquetes.index')->with('success', 'Paquete creado correctamente.');
    }


    public function asignarCamion(Paquete $paquete, Camion $camion)
    {
        $paquete->camiones()->attach($camion);
        return redirect()->route('paquetes.show', $paquete)->with('success', 'Camión asignado correctamente.');
    }

        public function quitarCamion(Paquete $paquete, Camion $camion)
    {
        $paquete->camiones()->detach($camion);
        return redirect()->route('paquetes.show', $paquete)->with('success', 'Camión quitado correctamente.');
    }
    public function show(Paquete $paquete)
    {
        //
    }


    public function edit(Paquete $paquete)
    {
        //
    }


    public function update(UpdatePaqueteRequest $request, Paquete $paquete)
    {
        //
    }


    public function destroy(Paquete $paquete)
    {
        //
    }
}
