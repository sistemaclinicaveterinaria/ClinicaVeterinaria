@extends('layouts.app')
@section('content')

  
<br/>
<br/>
<div class="container">
<div class="cont">
<header>
<div class="titulo">   
<h1>Dueños y Mascotas</h1>
</header>
<a href="{{ url('/Cli_Mas/create')}}"class="btn btn-primary btn-lg" style="float: right;"><i class="fa fa-user-plus fa-lg" aria-hidden="true">&nbsp;Nuevo Registro</a></i>
<table id="example"class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre Dueño</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Nombre Mascota</th>
            <th>Especie</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        <tr>
        @foreach($data as $row)
        <td>{{ $row->id_cliente}}</td>
        <td>{{ $row->nom_cliente}} {{ $row->apePat_cliente}} {{ $row->apeMat_cliente}}</td>
        <td>{{ $row->telefono_cliente}}</td>
        <td>{{ $row->email_cliente}}</td>
        <td>{{ $row->Nombre}}</td>
        <td>{{ $row->Especie}}</td>
        <td>
               
        <a href="{{ url('/detalle/'.$row->id_cliente) }}">
                <button style="border-radius:50px;" class="btn btn-success" type="submit" ><i class="fa fa-eye" aria-hidden="true">&nbsp;Ver perfil</button></i>
                </a> 

       <!-- <a href="{{url ('/Cli_Mas/'.$row->id_cliente.'/edit') }}">
                <button class="btn btn-primary" type="submit" ><i class="fa fa-pencil fa-lg" aria-hidden="true">&nbsp;Editar</button></i>
                </a>  
  
                  <form id="formt" method="post" action="{{ url ('/Cli_Mas/'.$row->id_cliente) }}" style="display:inline">
                      {{csrf_field()}}
                      {{ method_field ('DELETE')}}
                      
                      <button class="btn btn-danger" type="submit" onclick="return confirm('¿ Desea borrar registro ?');"><i class="fa fa-trash-o fa-lg" aria-hidden="true">&nbsp;Eliminar</button></i>
                      
                  </form> -->
                  
              </td>
        
        </tr>
        @endforeach
    </tbody>
    <tfoot>
            <th>#</th>
            <th>Nombre Dueño</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Nombre Mascota</th>
            <th>Especie</th>
            <th>Acciones</th>
        </tfoot>
        
<script>
$(document).ready(function() {
   var table = $('#example').DataTable({
    "language": {searchPlaceholder: "Nombre de mascota, Nombre Dueño, Apellido, RUT....",
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"},
      'rowsGroup': [0,1,2,3,6],
      "pagingType": "full_numbers",
      "sDom": '<"top"f>rt<"bottom"p><"bottom"i>',
      
   });  
});

</script>
</table>

<!--Script para Agrupacion de datos de la datatable-->


<script></script>

</div>
</div>


@endsection