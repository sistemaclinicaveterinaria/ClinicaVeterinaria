
@extends('layouts.app')
@section('content')
<div class="container">
<div class="cont">
<form action="{{url('/Mascotas/'.$mascotas->cliente_id)}}" method="post" enctype="multipart/form-data">
{{csrf_field () }}

@include('Mascotas.form', ['Modo'=>'crear'])





</form>
</div>
</div>
@endsection
