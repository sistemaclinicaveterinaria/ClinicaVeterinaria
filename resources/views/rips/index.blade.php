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
        <h1>Defunciones</h1>
    </header>

<a href="{{ url('rips/create') }}" class="btn btn-primary btn-lg" style="float: right"><i class="fa fa-heartbeat fa-lg" aria-hidden="true">&nbsp;Nuevo</a></i>
<br/>
<br/>
<br/>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Fecha Defuncion</th>
            <th>Motivo</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
      @foreach($rips as $rip)  
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$rip->Fecha_Defuncion}}</td>
            <td>{{$rip->Motivo}}</td>
            <td>
            <a href="{{ url('/rips/'.$rip->id.'/edit') }}">
              <button class="btn btn-primary" type="submit" ><i class="fa fa-pencil fa-lg" aria-hidden="true">&nbsp;Editar</button></a></i>
              </a>  

        
            <form id="formt" method="post" action="{{ url('/rips/'.$rip->id) }}"  style="display:inline">

             {{csrf_field() }}   
             {{ method_field('DELETE') }}
             
             <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');"><i class="fa fa-trash-o fa-lg" aria-hidden="true">&nbsp;Eliminar</button></i>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<!-- codigo paginacion-->
{{ $rips->links() }}
<!------------------------------>
    </div>
@endsection