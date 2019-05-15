@extends('plantilla')

@section('seccion')

<header>
<div class="titulo">
    
    <h1>Informacion Paciente RIP</h1>

</header>
        
        <div class="cont">
   
    <body  />
        <div class="contenedor">
            <div id="pestanas">
                <ul id=lista>
                    <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>PACIENTE RIP</a></li>
                </ul>
            </div>
            
            <div id="contenidopestanas">
                <div id="cpestana1">
                <image style="float: right; margin: px 20px 5px 10px;"src="https://image.flaticon.com/icons/png/512/59/59580.png" width="300"/></image>
                <br>
                <br>
                    <form  action="/action_page.php">
                           <br>

     <label for="pwd" style="margin-right: 50px">Paciente:</label>
     <input class="box-info box-info-xs"  placeholder="Pepito" type="text" class="form-control" id="usr"  disabled>

     <label for="pwd" >Fecha Difuncion:  </label>
      <input class="box-info box-info-xs"  placeholder="15-04-2019" class="form-control" id="pwd"   disabled>
   <br><br>
     <label for="pwd" >Dueño Mascota: </label>
     <input class="box-info" style="width: 520px;" placeholder="Mariana Gonzales" class="form-control" id="usr"  disabled>
    <br><br>
     <label for="pwd" style="margin-right: 10px" >Motivo Muerte: </label>
    <textarea  rows="6" cols="68" style="background-color:#d8ecf7; border:1px solid #afcde3; " placeholder=" Murio en la operacion" disabled></textarea> <br><br>
    
   <div class="center-table">
  <a  href="" class="nbtn nbtn-ver" style="  position:absolute;  left: 700px;"><span class="nn-icon nn-icon-actualizar">
    </span>Actualizar Datos</button></a></div>
                


@endsection