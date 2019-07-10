@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<div class="container">
    <div class="cont">

    <header>
    <div class="titulo">
        <h1>Documentos</h1>
    </header>
<a href="{{ url('Documentos/create/'.$id) }} " class="btn btn-primary btn-lg" style="float: right"><i class="fa fa-paperclip fa-lg" aria-hidden="true">&nbsp;Adjuntar Documento</a></i>

<table id="example" class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Cliente_ID</th>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Archivo</th>
            <th>Opciones</th>
        </tr>
    </thead>
    @foreach($documentos as $documento)  
    <tbody>
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$documento->consulta_id}}</td>
            <td>{{$documento->created_at}}</td>
            <td>{{$documento->Nombre}}</td>
            <td>
            <a target="_blank" href="{{ asset('storage').'/'.$documento->Archivo}}">ARCHIVO</a>
            </td>


            <td>

            <form id="formt" method="post" action="{{ url('/documentos/'.$documento->id) }}" style="display:inline">
             {{csrf_field() }}   
             {{method_field('DELETE')}}
             <button  style="border-radius:50px;" class="btn btn-danger"  type="submit" onclick="return confirm('¿Borrar?');"><i class="fa fa-trash-o fa-lg" aria-hidden="true">&nbsp;Eliminar</button></i>
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
            <th>#</th>
            <th>Cliente_ID</th>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Archivo</th>
            <th>Opciones</th>
     </tfoot>

</table>

 <!--js del datatable-->

 <script>
                        $(document).ready(function() {
                        var table = $('#example').DataTable({
                            "language": {searchPlaceholder: "Fecha,Nombre..",
                                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"},
                            "pagingType": "full_numbers",
                            "sDom": '<"top"f>rt<"bottom"p><"bottom"i>',
                            responsive: true
                            
                        });  
                        });

                        </script>
    </div>
@endsection