<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaisModel;
use App\Http\Requests\PaisRequest;

class PaisController extends Controller
{
    //Función principal donde permitirá listar y mostrar formulario principal
    public function index(){
        return view('basicos.pais.index');
    }

    //Grabará en la tabla el País
    public function store(PaisRequest $request){
        //print_r($request->all());
        try {
            $obPais = new PaisModel;
            $obPais->pais_nombre = mb_strtoupper($request->input('pais_nombre'));
            $obPais->pais_coddane = $request->input('pais_coddane');
            $obPais->pais_codiso = mb_strtoupper($request->input('pais_codiso'));
            $obPais->usuario_modificacion = 1;
            $obPais->estado = 'ACTIVO';
            $hora_actual = date("H:i:s");
            $obPais->hora_modificacion = $hora_actual;
            $obPais->save();
            return redirect()->route('pais.index')->with('info','El pais se creó exitosamente.');

        } catch (\Illuminate\Database\QueryException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        } catch (Exception $exception){
            return back()->withError($exception->getMessage())->withInput();
        }
        
    }

    public function list(){
        return view('basicos.pais.index');
    }
}
