@extends('plantilla')

@section('seccion')


<header>
<div class="titulo">
    
    <h1>Listado de especialistas</h1>

</header>




<div class="cont">

  <div class="center-table">
    <span class="cn-icon gn-icon-search">
    <input class="box-blue" placeholder="Ingrese ID o nombre de especialistas" type="search" id="miBusqueda" name="q">
   <a  href="{{route('paginanuevoespecialista')}}" class="nbtn nbtn-ver" style="float: right;"><span class="nn-icon nn-icon-ver">
    </span>Nuevo Especialista</a>
  </div>

  <table class="ctablas">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Ciudad</th>
      <th scope="col">????</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Armando casas</td>
      <td>+569 46378855</td>
      <td>Puerto Varas</td>
      <td>????</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginaverespecialista')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Visualizar</a>
      <a href="{{route('paginaverespecialista')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar </a>
      </td>
    </div>
      </tr>
    <tr>
         <th scope="row">2</th>
      <td>Empirilio Guajardo</td>
      <td>+569 46378855</td>
      <td>Puerto Montt</td>
      <td>?????</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginaverespecialista')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Visualizar</a>
      <a href="" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      </div>
    </tr>
    
       <tr>
         <th scope="row">3</th>
      <td>Alam brito Delgado</td>
      <td>+569 46378855</td>
      <td>Caracas</td>
      <td>?????</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginaverespecialista')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Visualizar</a>
      <a href="" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      </div>
    </tr>

  </tbody>
</div>
</table>

@endsection