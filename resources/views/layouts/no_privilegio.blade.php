@extends('layouts.app')

@section('script_cabecera')
@endsection

@section('content')
<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Seguridad</a></li>
		<li class="active">Privilegios</li>
	</ol>

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
                            <h4 class="panel-title">Seguridad</h4>
                        </div>

                        <div class="panel-body">
                            <h4><span class="glyphicon glyphicon-lock"></span> No tienes privilegios para acceder a esta sección</h4>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
	</div>

</div>
@endsection

@section('script_pie')

@endsection