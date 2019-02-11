@extends('layouts.app')

@section('script_cabecera')

@endsection

@section('content')
<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Configuración</a></li>
		<li><a href="javascript:;">Usuarios</a></li>
		<li class="active">Nuevo</li>
	</ol>

	<h1 class="page-header">Gestión de Usuarios </h1>

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
                            <h4 class="panel-title">Nuevo Registro</h4>
                        </div>

                        <div class="panel-body">
                            <div class="">
                                <a href="{{url('cliente')}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
                            </div>
                            <br>
                            <div>
                                @include('errors.errores')
                                <form class="" method="POST" action="{{url('cliente')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">DNI (*)</label>
                                        {{--{!! Form::text('txt_dni',null,['class' => 'form-control','id'=>'txt_dni', 'maxlength'=>'8','placeholder'=>'Ingrese DNI']) !!}--}}
                                        <input type="text" name="txt_dni" id="txt_dni" placeholder="Ingrese DNI" maxlength="8" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombres (*)</label>
                                        <input type="text" name="txt_nombres" id="txt_nombres" placeholder="Ingrese Nombres" maxlength="100" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Apellidos (*)</label>
                                        <input type="text" name="txt_apellidos" id="txt_apellidos" placeholder="Ingrese Apellidos" maxlength="150" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sexo</label>
                                        <select class="form-control" id="cbo_sexo" name="cbo_sexo">
                                            <option value="M">-Masculino-</option>
                                            <option value="F">-Femenino-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Teléfono</label>
                                        <input type="text" name="txt_telefono" id="txt_telefono" placeholder="Ingrese Teléfono" maxlength="9" class="form-control" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Correo</label>
                                        <input type="email" name="txt_correo" id="txt_correo" placeholder="Ingrese Correo" maxlength="100" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Dirección</label>
                                        <input type="text" name="txt_direccion" id="txt_direccion" placeholder="Ingrese Dirección" maxlength="250" class="form-control" autocomplete="off">
                                    </div>


                                    <div class="form-group">
                                    <label>(*) Campos Obligatorios</label>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5"><span class="glyphicon glyphicon-save"></span> Registrar</button>
                                    <a href="{{url('cliente')}}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
                                </fieldset>
                            </form>
                            </div>

                        </div>
                    </div>
                    <!-- end panel -->
                </div>
	</div>

</div>
@endsection

@section('script_pie')

@endsection