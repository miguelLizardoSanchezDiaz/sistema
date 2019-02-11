<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SISTEMA WEB - CLASE MODELO</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    @include('layouts.script_cabecera')
    @yield('script_cabecera')
</head>
<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-default navbar-fixed-top">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin mobile sidebar expand / collapse button -->
                <div class="navbar-header">
                    <a href="#" class="navbar-brand"><span class="navbar-logo"></span> Demo</a>
                    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- end mobile sidebar expand / collapse button -->
                
                <!-- begin header navigation right -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form full-width">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar..." />
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    
                    <li class="dropdown navbar-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            
                            {!! HTML::image('/assets/img/user-13.jpg','usuario',array('class'=>'')) !!}
                            <span class="hidden-xs">Administrador</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="javascript:;">Perfil</a></li>
                            <li><a href="javascript:;">Configuración</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                <form id="logout-form" action="#" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                           </li>
                        </ul>
                    </li>
                </ul>
                <!-- end header navigation right -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <div class="image">
                            <a href="javascript:;">
                                {!! HTML::image('/assets/img/user-13.jpg','usuario',array('class'=>'')) !!}
                            </a>
                        </div>
                        <div class="info">
                            Administrador
                            {{--<small>Front end developer</small>--}}
                        </div>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->              
                @include('layouts.menu')
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->
        @yield('content')
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
    @include('layouts.script_pie')
    @yield('script_pie')
    <script>
        $(document).ready(function() {
            App.init();
            
        });
    </script>
</body>
</html>
