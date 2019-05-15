@extends('plantilla')

@section('seccion')

<header>
<div class="titulo">
    
    <h1>Registro de Paciente RIP</h1>
</header>

<body>
<div class="cont">
  <table class="ctablas">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nuevo Paciente RIP</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td height="300">
      <div class="main-container">  
     <img src="https://image.flaticon.com/icons/png/512/59/59580.png" alt="" margin width="250" height="250" align="left">
    </div>
      </td>
    </td>
    <td>
    </br>
      <div class="form-group">
     <label for="pwd" style="margin-right: 60px" >Paciente:</label>
     <input class="box-info box-info-mediano" style="margin-right: 150px" placeholder="Pepito" type="text" class="form-control" id="usr"  disabled>
</div>
      <div class="form-group">
     <label for="pwd" style="margin-right: 20px" >Fecha Difuncion:  </label>
      <input class="box-info box-info-mediano"  style="margin-right: 150px" placeholder="15-04-2019" class="form-control" id="pwd"   disabled>
    </div>
      <div class="form-group">
     <label for="pwd"  style="margin-right: 20px">Dueño Mascota: </label>
     <input class="box-info box-info-mediano" style="margin-right: 150px" placeholder="Mariana Gonzales" class="form-control" id="usr"  disabled>
    </div>
    <div class="form-group">
     <label for="pwd" style="margin-right: 25px">Motivo Muerte: </label>
    <textarea  rows="11" cols="74" style="background-color:#d8ecf7; border:1px solid #afcde3; margin-right: 155px;" placeholder=" Murio en la operacion" disabled></textarea> 
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