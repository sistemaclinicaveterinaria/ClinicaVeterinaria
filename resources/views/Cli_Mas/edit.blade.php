@extends('layouts.app')

@section('content')
<div class="container">
        
<div class="cont">
<form id="formt" action="{{ url('/Cli_Mas/'.$cliente->id_cliente) }}" method="post" >
    {{ csrf_field()}}
    {{ method_field('PATCH')}}
    @include('Cli_Mas.form',['Modo'=>'editar'])
</form>
</div></div>

@endsection