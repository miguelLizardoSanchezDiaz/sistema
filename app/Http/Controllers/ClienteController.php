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
    	
    }
    public function edit($id){
		//Método para llamar a la vista dónde estará el formulario de edición(Update)
		
    }
    public function update(Request $request,$id){
    	//Método para editar los campos que fueron llenados en la vista edit(Update)
    }
    public function show($id){
    	//Método para mostrar mensaje de confirmación, antes de borrar(Destroy)
    	
    }
    public function destroy($id){
    	//Método que borra el registro confirmado(Destroy)
    }

}
