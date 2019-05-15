@extends('plantilla')

@section('seccion')

<header>
<div class="titulo">
    
    <h1>Registro de Especialistas</h1>
</header>

<body>
<div class="cont">
  <table class="ctablas">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nuevo Especialista</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td height="300">
      <div class="main-container">  
     <img src="https://image.flaticon.com/icons/png/512/56/56996.png" alt="" margin width="250" height="250" align="left">
    </div>
      </td>
    </td>
    <td>
    </br>
      <div class="form-group">
     <label for="pwd" style="margin-right: 15px">Nombre: </label>
     <input class="box-info"  style="margin-right: 7px" placeholder="Bayron Narvaez" type="text" class="form-control" id="usr"  disabled>
     <label for="pwd" >Especialidad: </label>
      <input class="box-info"   placeholder="Oftalmologo" class="form-control" id="pwd"  style="width: 260px;"  disabled>
    </div>
      <div class="form-group">
     <label for="pwd" style="margin-right: 16px">Ciudad   : </label>
     <input class="box-info box-info-xl" style="margin-right: 3px" placeholder="Puerto montt" class="form-control" id="usr"  disabled>
    </div>
    <div class="form-group">
     <label for="pwd" style="margin-right: 1px">Telefono: </label>
     <input class="box-info" style="margin-left: 7px" placeholder="+569 6523545" class="form-control" id="usr"  disabled>
     <label for="pwd">Correo: </label>
      <input class="box-info"  style="margin-left: 5px" placeholder="bayronluigi@gmail.cl" class="form-control" id="pwd"  disabled>
    </div>
    </td>
    </tr>
  </tbody>
</table>

<table class="ctablas">
 
  <tfoot>
<tr>
<td colspan="7">
<div class="">    <a href="" class="ncbtn ncbtn-ver" ><span class="cn-icon nnc-icon-ver" ></span>Registrar</a>
      <a href="" class="ncbtn ncbtn-eliminar"><span class="cn-icon cn-icon-cancelar">Cancelar</span></a></div>
</td>
</tr>
</tfoot>
 
</table>
@endsection