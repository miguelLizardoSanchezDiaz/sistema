@extends('layouts.app')


@section('content')
<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		
		<li><a href="javascript:;">Gestión de clientes</a></li>
		<li class="active">Listado</li>
	</ol>

	<h1 class="page-header">Gestión de Clientes </h1>

	<div class="row">
		<div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Listado</h4>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                        	   <div class="col-sm-6 col-xs-12">
                            	   <a href="{{route('cliente.create')}}" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span> Nueva Entrada</a>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    @include('successful.successful')
                                </div>
                            </div>
                            <br>
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>DNI</th>
                                        <th>Apellidos</th>
                                        <th>Nombres</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($registros as $cliente)
                                    <tr class="">
                                        <td>{{$cliente->cli_codigo}}</td>
                                        <td>{{$cliente->cli_apellidos}}</td>
                                        <td>{{$cliente->cli_nombres}}</td>
                                        <td>{{$cliente->cli_telefono}}</td>
                                        <td>{{$cliente->cli_correo}}</td>
                                        <td align="center"><a href="{{route('cliente.edit',$cliente->id)}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span></a></td>
                                        <td align="center"><a href="{{route('cliente.show',$cliente->id)}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                                        
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
	</div>

</div>
@endsection

@section('script_pie')
	
@endsection