@extends('plantilla')

@section('seccion')


<header>
<div class="titulo">
    
    <h1>Listado de muertitos</h1>

</header>




<div class="cont">

  <div class="center-table">
    <span class="cn-icon gn-icon-search">
    <input class="box-blue" placeholder="Ingrese ID o nombre de especialistas" type="search" id="miBusqueda" name="q">
     <a  href="{{route('paginanuevorip')}}" class="nbtn nbtn-ver" style="float: right;"><span class="nn-icon nn-icon-ver">
    </span>Nuevo paciente RIP</a>
  </div>

  <table class="ctablas">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha Difuncion</th>
      <th scope="col">Paciente</th>
      <th scope="col">Dueño mascota</th>
      <th scope="col">Motivo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>15-05-2019</td>
      <td>Pepito</td>
      <td>Mariana Gonzales</td>
      <td>Murio en operacion</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginaverrip')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Visualizar detalle</a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
    </div>
      </tr>
    <tr>
         <th scope="row">2</th>
       <td>15-05-2019</td>
      <td>Pepito</td>
      <td>Mariana Gonzales</td>
      <td>Murio en operacion</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginaverrip')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Visualizar detalle</a>
      <a href="" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      </div>
    </tr>
    
       <tr>
         <th scope="row">3</th>
      <td>15-05-2019</td>
      <td>Pepito</td>
      <td>Mariana Gonzales</td>
      <td>Murio en operacion</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginaverrip')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Visualizar detalle</a>
      <a href="" class="cbtn cbtn-eliminar">
      <span class="cn-icon cn-icon-eliminar"></span>Eliminar</a>
      </td>
      </div>
    </tr>

  </tbody>
</div>
</table>

@endsection