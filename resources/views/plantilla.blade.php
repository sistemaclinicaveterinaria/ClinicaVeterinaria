<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<link rel="stylesheet" type="text/css" href="css/estilocards.css" />
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Hospital clinico veterinario del lago</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/PantallaPrincipal.css" />
		<link rel="stylesheet" type="text/css" href="css/Sidebar.css" />
		<link rel="stylesheet" type="text/css" href="css/fontello-codes.css" />
		<link rel="stylesheet" type="text/css" href="css/tablas.css" />
		/*FontAwesome*/
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		
			<link rel="stylesheet" type="text/css" href="css\cajasdetexto.css" />
			<link rel="stylesheet" type="text/css" href="css\titulos.css" />
				<link rel="stylesheet" type="text/css" href="css\Botones.css" />

		<script src="js/modernizr.custom.js"></script>
		/<!-- INICIO -->
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Buscar" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Buscar</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-cym"
									<a href="{{route('paginaclientes')}}">Clientes y Mascotas</a>
									<a class="gn-icon gn-icon-calendario"
									<a href="{{route('paginacalendario')}}">Calendario</a>
									<a class="gn-icon gn-icon-especialista"
									<a href="{{route('paginaespecialistas')}}">Especialistas</a>
									<a class="gn-icon gn-icon-administracion" 
									<a href="{{route('paginaadmin')}}">Administración</a>
									<a class="gn-icon gn-icon-cruz" 
									<a href="{{route('paginarip')}}">RIP</a> 
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-especialista">******</a></li>
									</ul>
							</ul>
						</div>
						<!-- NAVEGADOR FIN -->
					</nav>
				</li>

				 <img src="/icons/logo.png" href="{{route('index')}}" height="50" holastyle="width:100%; max-width:200px" class="img-responsive">

				<li><a class="gn-icon gn-icon-user">Bienvenido, Raul</a></li>

			</ul>
			<!-- CONTENEDOR -->
			<div class="container"> 
				@yield('seccion')
			</div>
			<!-- CONTENEDOR -->
		</div><!-- /container -->
		<!---------------------------------BOOSTRAP---------------------------------------->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		<script type="text/javascript" src="js/cambiarPestanna.js"></script>
            <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

</br>
</br>
</br>
        <div id="pagina">
  <div align="center" id="pie">"Versión 1.0 Plantilla Intranet Hospital Clinico Veterinario Del lago"
  </div>
</div>

	</body>
</html>