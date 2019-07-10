
@extends('layouts.app')
@section('content')

<div class="container">
<div class="cont">
<form action="{{ url('/rips/'.$rip->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('rips.form',['Modo'=>'editar'])

</form>
</div></div>
@endsection