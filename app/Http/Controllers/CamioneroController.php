<?php

namespace App\Http\Controllers;

use App\Models\Camionero;
use App\Http\Requests\StoreCamioneroRequest;
use App\Http\Requests\UpdateCamioneroRequest;
use App\Models\Camion;
use Illuminate\Http\Request;

class CamioneroController extends Controller
{
    public function index()
    {
        $camioneros = Camionero::all();
        return view('Frmcamionero', compact('camioneros'));
    }


    public function create()
    {
        return view('Frmcamionero');
    }


    public function store(Request $request)
    {
        $camionero = new Camionero();
        $camionero->nombre=$request->nombre;
        $camionero->poblacion=$request->poblacion;
        $camionero->dni=$request->dni;
        $camionero->tfno=$request->tfno;
        $camionero->direccion=$request->direccion;
        $camionero->salario=$request->salario;
        $camionero->save();
        return $camionero;
    }
    public function show(Camionero $camionero)
    {
        return view('camioneros.show', compact('camionero'));
    }


    public function edit(Camionero $camionero)
    {
        return view('camioneros.edit', compact('camionero'));
    }


    public function update(Request $request, Camionero $camionero)
    {
        $request->validate([
            'nombre' => 'required',
            'poblacion' => 'required',
            'dni' => 'required',
            'tfno' => 'required',
            'direccion' => 'required',
            'salario' => 'required|numeric',
        ]);

        $camionero->update($request->all());

        return redirect()->route('camioneros.index')
            ->with('success', 'Camionero actualizado correctamente.');
    }


    public function destroy(Camionero $camionero)
    {
        $camionero->delete();

        return redirect()->route('camioneros.index')
            ->with('success', 'Camionero eliminado correctamente.');
    }
}
