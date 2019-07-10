@extends('layouts.app')

@section('content')

<div class="container">
    <div class="cont">

    <header>
    <div class="titulo">
        <h1>Clientes</h1>
    </header>


<a href="{{ url('clientes/create')}}"class="btn btn-primary btn-lg" style="float: right"><i class="fa fa-user-plus fa-lg" aria-hidden="true">&nbsp;Nuevo Cliente</a></i>
<br/>
<br/>
<br/>
<table id="clientes" class="table" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id_cliente}}</td>
            <td>{{ $cliente->rut_cliente}}</td>
          
            <td> 
                <a  href="{{ url('/Clientes/'.$cliente->id_cliente.'/edit')}}">
               <button class="btn btn-primary" type="submit" ><i class="fa fa-pencil fa-lg" aria-hidden="true">&nbsp;Editar</button></i>
                </a>

                <form id="formt" method="post" action="{{ url('/Clientes/'.$cliente->id_cliente)}}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <br>
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea Borrar Registro?');"><i class="fa fa-trash-o fa-lg" aria-hidden="true">&nbsp;Eliminar</button></i>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Opciones</th>
        </tr>
    </tfoot>
</table>
<!--codigo paginacion-->
{{ $clientes->links() }}
<!------------------------->
<script>
$(document).ready(function() {
    $('#clientes').DataTable();
} );
</script>
</div>
</div>
</div>
@endsection
