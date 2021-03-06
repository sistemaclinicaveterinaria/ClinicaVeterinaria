
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
<h1>Mascotas</h1>
</header>



<a href="{{url('Mascotas/create')}}" class="btn btn-primary btn-lg" style="float: right"><i class="fa fa-paw fa-lg" aria-hidden="true">&nbsp;Nueva Mascota</a></i>
<br />
<br />
<br />


<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Fecha_Nacimiento</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Color</th>
            <th>Microchip</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mascotas as $mascota)

        <tr>
            <td>{{$loop->iteration}}</td>

            <td>
            <img src=" {{ asset('storage').'/'.$mascota->Foto}}" alt="" width="90" class="img-table">
            </td>

            <td>{{ $mascota->Nombre}}</td>
            <td>{{ $mascota->Genero}}</td>
            <td>{{ $mascota->Fecha_Nacimiento}}</td>
            <td>{{ $mascota->Especie}}</td>
            <td>{{ $mascota->Raza}}</td>
            <td>{{ $mascota->Color}}</td>
            <td>{{ $mascota->Microchip}}</td>
            <td>
                
              <a href="{{url ('/Mascotas/'.$mascota->id.'/edit') }}">
              <button class="btn btn-primary" type="submit" ><i class="fa fa-pencil fa-lg" aria-hidden="true">&nbsp;Editar</button></i>
              </a>  

                <form id="formt" method="post" action="{{ url ('/Mascotas/'.$mascota->id) }}" style="display:inline">
                    {{csrf_field()}}
                    {{ method_field ('DELETE')}}
                    
                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿ Desea borrar registro ?');"><i class="fa fa-trash-o fa-lg" aria-hidden="true">&nbsp;Eliminar</button></i>
                    
                </form>
                
            </td>
            
        </tr>
        @endforeach
    </tbody>

</table>
<!--Codigo paginacion-->
{{ $mascotas->links() }}
<!---------------------->
</div>
</div>

@stop