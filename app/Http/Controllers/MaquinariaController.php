<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaquinariaRequest;
use App\maquinaria;
use App\finca;
use App\marca;
use App\Http\Requests\VehiculosRequest;
use Illuminate\Http\Request;

class MaquinariaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $maq=maquinaria::orderBy('id','DESC')->paginate();
        return view('maquinaria.maqindex', compact('maq'));
    }

    public function create(){
        $fin = finca::all();
        $marc = marca::all();
        return view('maquinaria.create', compact('fin','marc'));
    }

    public function store(MaquinariaRequest $request){

        $maq = new maquinaria;
        $maq->idFiinc = $request->idFiinc; //primer valor es la caja de texto, segundo es la BD
        $maq->idmarc = $request->idmarc;
        $maq->Combustible = $request->Combustible;
        $maq->Rendimiento = $request->Rendimiento;
        $maq->ModeloMaq = $request->ModeloMaq;
        $maq->yearFabricacion = $request->yearFabricacion;
        $maq->Adepreciacion = $request->Adepreciacion;
        $maq->valorActMaq = $request->ValorActMaq;
        $maq->Unidad = $request->Unidad;
        $maq->noSerieMotor = $request->noSerieMotor;
        $maq->save();

        return redirect()->route('maqui.index')
            ->with('info', 'Guardado con exito');
    }

    public function update(MaquinariaRequest $request, $id){

        $maq=maquinaria::find($id);
        $maq->idFiinc = $request->idFiinc; //primer valor es la caja de texto, segundo es la BD
        $maq->idmarc = $request->idmarc;
        $maq->Combustible = $request->Combustible;
        $maq->Rendimiento = $request->Rendimiento;
        $maq->ModeloMaq = $request->ModeloMaq;
        $maq->yearFabricacion = $request->yearFabricacion;
        $maq->Adepreciacion = $request->Adepreciacion;
        $maq->valorActMaq = $request->ValorActMaq;
        $maq->Unidad = $request->Unidad;
        $maq->noSerieMotor = $request->noSerieMotor;
        $maq->save();
        return redirect()->route('maqui.index')
            ->with('info', 'Actualizado correctamente');
    }

    public function edit($id){
        $fin = finca::all();
        $marc = marca::all();
        $maq = maquinaria::find($id);
        return view('maquinaria.edit', compact('fin','marc', 'maq'));
    }

    public function show($id){
        $fin = finca::all();
        $marc = marca::all();
        $maq=maquinaria::find($id);
        return view('maquinaria.show', compact('fin','marc', 'maq'));
    }

    public function destroy($id){
        $maq =maquinaria::findOrFail($id);
        $maq->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
