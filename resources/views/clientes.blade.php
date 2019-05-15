@extends('plantilla')

@section('seccion')

<header>
<div class="titulo">
    
    <h1>Listado de clientes</h1>

</header>


<div class="cont">

     <div class="center-table">
    <span class="cn-icon gn-icon-search">
    <input class="box-blue" placeholder="Ingrese ID, nombre cliente o nombre de mascota" type="search" id="miBusqueda" name="q">
    <a  href="{{route('paginanuevocliente')}}" class="nbtn nbtn-ver" style="float: right;"><span class="nn-icon nn-icon-ver">
    </span>Nuevo cliente</a>
    </span>   
  </div>
  <table class="ctablas">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Nombre Mascota</th>
      <th scope="col">Especie</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tfoot>
<tr>
<td colspan="7">
<div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
</td>
</tr>
</tfoot>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Bayron</td>
      <td>+569 46378855</td>
      <td>Panchito</td>
      <td>Canino</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
        <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
    </div>
      </tr>
    <tr>
         <th scope="row">2</th>
      <td>Bayron</td>
      <td>+569 46378855</td>
      <td>Sharon</td>
      <td>Felino</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <tr>
         <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
    <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
  <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
    <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
    <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
   <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
 <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
 <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
   <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
   <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
    <th scope="row">3</th>
      <td>Javiera</td>
      <td>+569 46378855</td>
      <td>Firulais</td>
      <td>Canino</td>
      <td>
  <div class="main-container">
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Ver Perfil</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      
      </div>
    </tr>
  </tbody>

</div>
	

</table>

@endsection