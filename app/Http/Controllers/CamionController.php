<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use App\Http\Requests\StoreCamionRequest;
use App\Http\Requests\UpdateCamionRequest;
use Illuminate\Http\Request;

class CamionController extends Controller
{
    public function index()
    {
        $camiones = Camion::all();
        return view('camiones.index', compact('camiones'));
    }

    public function create()
    {
        return view('camiones.create');
    }

    public function store(Request $request)
    {
        Camion::create($request->all());
        return redirect()->route('camiones.index')->with('success', 'Camión creado correctamente.');
    }

    public function show(Camion $camion)
    {
        //
    }


    public function edit(Camion $camion)
    {
        //
    }


    public function update(UpdateCamionRequest $request, Camion $camion)
    {
        //
    }


    public function destroy(Camion $camion)
    {
        //
    }
}
