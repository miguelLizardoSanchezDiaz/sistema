<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;//Modelo
use Session;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    public function index(){
    	//Método para listar los registros de nuestra tabla cliente(Read)
    	$registros=Cliente::obtiene_clientes();
    	return view('cliente.listado',compact('registros'));
    }
    public function create(){
    	//Método para llamar a la vista dónde estará el formulario de nuevo(Create)
    	return view('cliente.nuevo');
    }
    public function store(Request $request){
    	//Método para grabar los datos que fueron llenados en la vista nuevo(Create)
    	$request->validate([
    		'txt_dni' => 'required|unique:sistema.cliente,cli_codigo',
    		'txt_nombres' =>'required',
    		'txt_apellidos' =>'required'
    		
		]);


    	$cliente=new Cliente;
    	$cliente->cli_codigo=$request->txt_dni;
    	$cliente->cli_nombres=$request->txt_nombres;
    	$cliente->cli_apellidos=$request->txt_apellidos;
    	$cliente->cli_sexo=$request->cbo_sexo;
    	$cliente->cli_telefono=$request->txt_telefono;
    	$cliente->cli_correo=$request->txt_correo;
    	$cliente->cli_direccion=$request->txt_direccion;

    	if($cliente->save()){
    		Session::flash('flash_message', 'Registro guardado correctamente!');
        	return Redirect::to('cliente');
    	}

    }
    public function edit($id){
		//Método para llamar a la vista dónde estará el formulario de edición(Update)
		$registro=Cliente::findOrFail($id);
        return view('cliente.editar', compact('registro'));
    }
    public function update(Request $request,$id){
    	//Método para editar los campos que fueron llenados en la vista edit(Update)
    }
    public function show($id){
    	//Método para mostrar mensaje de confirmación, antes de borrar(Destroy)
    	$registro=Cliente::findOrFail($id);
        return view('cliente.eliminar', compact('registro'));
    }
    public function destroy($id){
    	//Método que borra el registro confirmado(Destroy)
    }

}
}