
@extends('layouts.app')
@section('content')
<div class="container">
<div class="cont">
<form id="formtConsulta"  action="{{ url('/Consultas/'.$consulta->id_consulta) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('Consultas.form',['Modo'=>'editar'])

</form>
</div></div>
@endsection
