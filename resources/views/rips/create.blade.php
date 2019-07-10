
@extends('layouts.app')
@section('content')
<div class="container">
<div class="cont">
<form action="{{ url('/rips')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('rips.form',['Modo'=>'crear'])

</form>
</div></div>
@endsection
