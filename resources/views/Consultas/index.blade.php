@extends('layouts.app')

@section('content')
 
<br/>
<br/>
<div class="container">
<div class="cont">
<header>
<div class="titulo">   
<h1>Historial de {{ $mascotas->Nombre}}</h1>
</header>
<a href="{{ url('Consultas/create/'.$id)}}"class="btn btn-primary btn-lg" style="float: right"><i class="fa fa-medkit fa-lg" aria-hidden="true">&nbsp;Nueva Ficha</a></i>
<table id="example"class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Registro</th>
            <th>Modificado</th>
            <th>motivo_consulta</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        <tr>
        @foreach($data as $row)
        <td>{{$loop->iteration}}</td>
        <td>{{ $row->created_at}}</td>
        <td>{{ $row->updated_at}}</td>
        <td>{{ $row->motivo_consulta}}</td>
        <td>

        <div class="btn-group" role="group" aria-label="Basic example">

        <a href="{{ url('/Consultas/'.$row->id_consulta.'/edit')}}">
          <button style="border-radius:50px;" class="btn btn-success" type="submit" ><i class="fa fa-pencil" aria-hidden="true">&nbsp;Editar</button></i>
          </a>
          
        <a href="{{('/DocumentosFicha/'.$row->id_consulta)}}">
          <button style="border-radius:50px;" class="btn btn-primary" type="submit" ><i class="fa fa-folder-open-o" aria-hidden="true">&nbsp;Documentos Adjuntos</button></i>
          </a>  
          
          <a href="{{ url('/PDFficha/'.$row->id_consulta)}}" target="_blank" >
          <button style="border-radius:50px;" class="btn btn-outline-dark"><i class="fa fa-file-pdf-o" aria-hidden="true">&nbsp;Exportar</button></i>
          </a>
        </div>

               

         </td>
        
        </tr>
        @endforeach
    </tbody>
    <tfoot>
         <th>#</th>
            <th>Registro</th>
            <th>Modificado</th>
            <th>motivo_consulta</th>
            <th>Acciones</th>
     </tfoot>
        
<!----js del datatable----->
<script>
$(document).ready(function() {
   var table = $('#example').DataTable({
    "language": {searchPlaceholder: "Fecha Registro, Modificación, Motivo de consulta..",
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"},
      "pagingType": "full_numbers",
      "sDom": '<"top"f>rt<"bottom"p><"bottom"i>',
      responsive: true
      
   });  
});

</script>
</table>

<!--Script para Agrupacion de datos de la datatable-->


<script></script>

</div>
</div>
@endsection