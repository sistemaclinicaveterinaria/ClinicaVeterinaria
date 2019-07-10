@extends('layouts.app')

@section('content')

<div class="container">
<div class="cont">
<form action="{{ url('/especialistas/'.$especialista->id_espe) }}" method="post" >
    {{ csrf_field()}}
    {{ method_field('PATCH')}}
    @include('especialistas.form',['Modo'=>'editar'])
</form>
</div></div>
@endsection