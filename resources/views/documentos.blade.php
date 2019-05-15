@extends('plantilla')

@section('seccion')

<header>
<div class="titulo">
    
    <h1>Documentos Pelusita</h1>

</header>

   <div class="center-table">
    <span class="cn-icon gn-icon-search">
    <input class="box-blue" placeholder="Ingrese nombre examen" type="search" id="miBusqueda" name="q">

    <a  href="{{route('paginanuevocliente')}}" class="nbtn nbtn-ver" style="float: right;"><span class="nn-icon nn-icon-mas">
    </span>Adjuntar archivo</button></a>
    </span>   
  </div>


<div class="center-table">

  <table class="ctablas">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha</th>
      <th scope="col">Nombre</th>
      <th scope="col">Archivo</th>

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
      <td>20-05-2018</td>
      <td>Examen de sangre</td>
      <td>examen_de_sangre.pdf</td>
      </tr>
    <tr>
         <th scope="row">2</th>
       <td>05-07-2018</td>
      <td>Radiografia pata</td>
      <td>radiografia_pata.jpg</td>
    </tr>
    <tr>
         <th scope="row">3</th>
      <td>09-03-2019</td>
      <td>Ecografia</td>
      <td>ecogragia_3semanas.jpg</td>
    </tr>
  </tbody>

</div>
	

</table>

@endsection