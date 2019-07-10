@extends('layouts.app')
@section('content')
<div class="container">
<div class="cont">
<form id="formtConsulta" action="{{url('/Consultas/'. $consulta->mascota_id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('Consultas.form',['Modo'=>'crear'])

</form>
</div></div>
@endsection