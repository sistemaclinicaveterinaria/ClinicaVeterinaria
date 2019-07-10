@extends('layouts.app')
@section('content')
<div class="container">
<div class="cont">
<form action="{{ url('/documentos/')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('documentos.form',['Modo'=>'crear'])

</form>
</div></div>
@endsection

