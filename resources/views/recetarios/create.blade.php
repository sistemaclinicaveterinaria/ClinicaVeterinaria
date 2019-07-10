
@extends('layouts.app')
@section('content')

<div class="container">
<div class="cont">
<form action="{{ url('/recetarios')}}" method="post" enctype="multipart/form-data"> 
{{ csrf_field() }}

@include('recetarios.form',['Modo'=>'crear'])

</form>
</div></div>
@endsection
