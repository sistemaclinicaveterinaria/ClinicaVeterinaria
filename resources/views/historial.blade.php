@extends('plantilla')

@section('seccion')


<header>
<div class="titulo">
    
    <h1>Historial Medico</h1>

</header>


<div class="cont">

  <div class="center-table">
   <input class="box-blue" placeholder="Ingrese ID o nombre de especialistas" type="search" id="miBusqueda" name="q">
    <a class="nbtn nbtn-ver"  href="{{route('paginanuevaconsulta')}}" style="float: right;"><span class="nn-icon nnc-icon-nuevacon"> Nueva consulta </a>
    </span></button>
  </div>

  <table class="ctablas">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha consulta</th>
      <th scope="col">Hora</th>
      <th scope="col">Especialista</th>
      <th scope="col">Motivo consulta</th>
      <th scope="col">Procedimiento</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>09/06/2017</td>
      <td>18:36</td>
      <td>Alam Brito Delgado</td>
       <td>Fractura</td>
        <td>Cirugia</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginadocumentos')}}" class="cbtn abtn-agendar">
      <span class="cn-icon cn-icon-archivos"></span>Dctos. Adjuntos</a>
      <a href="{{route('paginaverconsulta')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Visualizar Ficha</a>
      </td>
      
      
    </div>
      </tr>
         <tr>
      <th scope="row">1</th>
      <td>09/06/2017</td>
      <td>18:36</td>
      <td>Armando Torres</td>
       <td>Escoliosis</td>
        <td>Revisión</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginadocumentos')}}" class="cbtn abtn-agendar">
      <span class="cn-icon cn-icon-archivos"></span>Dctos. Adjuntos</a>
       <a href="{{route('paginaverconsulta')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Visualizar Ficha</a>
      </td>
    </div>
      </tr>
         <tr>
      <th scope="row">1</th>
      <td>09/06/2017</td>
      <td>18:36</td>
      <td>Cynda Quill Gonzales</td>
       <td>Revisión</td>
        <td>Examen de hemoglobina</td>
      <td>
      <div class="main-container">
      <a href="{{route('paginadocumentos')}}" class="cbtn abtn-agendar">
      <span class="cn-icon cn-icon-archivos"></span>Dctos. Adjuntos</a>
      <a href="{{route('paginaverconsulta')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-ver"></span>Visualizar Ficha</a>
      </td>
      
    </div>
      </tr>

  </tbody>
</div>
</table>
@endsection