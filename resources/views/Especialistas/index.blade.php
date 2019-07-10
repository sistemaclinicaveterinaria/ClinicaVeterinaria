@extends('layouts.app')

@section('content')


    <div class="container">
    <div class="cont">

    <header>
    <div class="titulo">
        <h1>Especialistas</h1>
    </header>

<a href="{{ url('especialistas/create')}}"class="btn btn-primary btn-lg" style="float: right"><i class="fa fa-user-md fa-lg" aria-hidden="true">&nbsp;Nuevo Especialista</a></i>
<br/>
<br/>
<br/>
<table class="table">
    
    <thead>
        <tr>
            <th>#</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Especialidad</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($especialistas as $especialista)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $especialista->rut_espe }}</td>
            <td>{{ $especialista->nom_espe }} {{ $especialista->apePat_espe }} {{ $especialista->apeMat_espe }}</td>
            <td>{{ $especialista->email_espe }}</td>
            <td>{{ $especialista->especialidad }}</td>
            <td> 
                <a  href="{{ url('/especialistas/'.$especialista->id_espe.'/edit')}}">
               <button class="btn btn-primary" type="submit" ><i class="fa fa-pencil fa-lg" aria-hidden="true">&nbsp;Editar</button></i>
                </a>

                <form  id="formt" method="post" action="{{ url('/especialistas/'.$especialista->id_espe)}}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea borrar registro?');"><i class="fa fa-trash-o fa-lg" aria-hidden="true">&nbsp;Eliminar</button></i>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<!--codigo paginacion-->
{{ $especialistas->links() }}
<!---------------------------->
</div>
@endsection
