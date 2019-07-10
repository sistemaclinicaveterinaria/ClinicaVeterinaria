<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=3.0"> 
		<link rel="shortcut icon" href="../favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Clinica') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}" defer></script>
    <script src="{{ asset('js/classie.js')}}" defer></script>
    <script src="{{ asset('js/gnmenu.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/label.js') }}"></script>
    <script src="{{ asset('js/filtroRut.js') }}"></script>
    <script src="{{ asset('js/validarRut.js') }}"></script>
  


    
    <!--link de iconos bootstrap-->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">

    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pestañas.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/component.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">

    <link href="{{ asset('https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


    <!--opcion css para datatables--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/> 
    <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>  -->

    <link rel="stylesheet" href="<?php echo asset('css/tablas.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/formularios.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/titulos.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('../../css/iconosidebar.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('../../fontello/css/fontello-codes.css')?>" type="text/css">

    	
	 @yield('scripts')
	
</head>


<body>
       
        <!--SIDEBAR-->
        <div class="container">
            
            <ul id="gn-menu" class="gn-menu-main">         
                  
            <li class="gn-trigger">                    
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">

                                    <li> <a href="{{url('Cli_Mas')}}" class="gn-icon gn-icon-download">Dueños y Mascotas</a></li>
                                        <!---<li><a href="{{url('Mascotas')}}" class="gn-icon gn-icon-download">Mascotas</a></li>--->
                                        <!---<li><a href="{{url('Clientes')}}" class="gn-icon gn-icon-download">Mascotas</a></li>-->
                                                        <li><a href="{{url('eventos')}}" class="gn-icon gn-icon-cog">Calendario</a></li>
                                                        <li><a href="{{url('especialistas')}}" class="gn-icon gn-icon-help">Especialistas</a></li>
                                                    <li><a href="{{url('rips')}}"  class="gn-icon gn-icon-help" >RIP </a></li>
                                    <li><a href="" class="gn-icon gn-icon-article">Administración</a></li>
                               
                            </ul>
        </nav>
        </li>
        <li><div style="float:left"><a href="{{url('home')}}"><img src="../../logos/logo.png" alt="Logo"  height="50" holastyle="width:100%; max-width:200px" class="img-responsive"></a></div></li>
            <li><!-- Authentication Links -->
                  @guest
                            <li style="text-align: right;" class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest</li>
                
                    
		</ul>	    
        </div><!-- /container -->
        <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>
          <div>
        
       
                   
        <main class="py-4">
     
            @yield('content')
        </main>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
<script src="https://cdn.rawgit.com/ashl1/datatables-rowsgroup/fbd569b8768155c7a9a62568e66a64115887d7d0/dataTables.rowsGroup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

</body>
</html>