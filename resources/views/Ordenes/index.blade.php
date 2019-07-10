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
<h1>Rx</h1>
</header>

<div class="jumbotron" style="background-color:white;">
<img src="https://scontent.fzal1-1.fna.fbcdn.net/v/t1.0-9/44286416_1919846044763632_1258321264771072000_n.jpg?_nc_cat=102&_nc_eui2=AeGU7eD0sKE9JgDDt5fonUYRvJe81C0-ajhr2tfNKZMCpn4ziGoP80P9KtM2e0xFlWIpQTyaLWjvdem6lofeYHSoqb8Ql784DXR-SmOcegm9JQ&_nc_ht=scontent.fzal1-1.fna&oh=2e48fd37dd7471317f7832564800a681&oe=5DBE5C11"  width="18%" height="18%" style=" margin-right:1100px;">

<div class="form-group row"style="position:absolute; margin-top:-160px; width: 320px; ;right:250px; left:1100px;" >
    <label for="inputFecha3"  class="col-sm-2 col-form-label">Fecha</label>
    <div class="col-sm-7">
      <input type="date" class="form-control" id="inputFecha3" placeholder="Fecha">
    </div>
  </div>
  <div class="form-group row " style="position:absolute; margin-top:-110px;  width: 320px; ;right:250px; left:1100px;" >
    <label for="inputControl3" class="col-sm-2 col-form-label">Control Fecha</label>
    <div class="col-sm-7">
      <input type="date" class="form-control" id="inputcontrol3" placeholder="Control">
    </div>
  </div>

<div class="form-group row" style="margin-top:100px;">
    <label for="inputPaciente3" class="col-sm-1 col-form-label">Paciente</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputPaciente3" placeholder="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEspecie3" class="col-sm-1 col-form-label">Especie</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEspecie3" placeholder="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputRaza3" class="col-sm-1 col-form-label">Raza</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputRaza3" placeholder="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEdad3" class="col-sm-1 col-form-label">Edad</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEdad3" placeholder="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPropietario3" class="col-sm-1 col-form-label">Propietario</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputPropietario3" placeholder="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputDescripcion3" class="col-sm-1 col-form-label">Descripcion</label>
    <div class="col-sm-4">
<textarea class="form-control" name="" id="" rows="7" style=" width:900px; height:246px"> </textarea>
 </div>

  <button style=" margin-top:260px;" type="submit" class="btn btn-primary">Aceptar</button>
  </div>
  <br/>
<br/>
<br/>
 ------------------------------
  <br/>
          Firma
          <br/>
          <br/>
                             No se aceptan cambios en la receta
                             <br/>
                             
_________________________________________________________________________________________________________________________________________
<br/>
  PADRE HARTER 341 - FONO 65 2 276969 - CEL: +569 56147724 - PUERTO MONTT    
</div>
</div>
@endsection