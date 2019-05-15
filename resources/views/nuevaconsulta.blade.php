@extends('plantilla')

@section('seccion')

<header>
  <div class="titulo">
<h1>NUEVA CONSULTA</h1>
</header>

<div class="cont">
  
<div class="jumbotron" style="position: center; width: 1095px;">

 <form>
  <div class="form-group">
    <font style="margin-left: 100px" size=5 face="Comic Sans MS"> Paciente: Panchito</font>  <font  face="Comic Sans MS" style="margin-left: 400px" size=5> Fecha: 05-07-2019</font>                 
    <font style="margin-left: 100px" size=5 face="Comic Sans MS">Dueño Mascota: Bayron Narvaez</font><font face="Comic Sans MS" style="margin-left: 245px" size=5> Hora: 10:30</font>      
  </div>
  <br><br>
  <div class="form-group">
      <font size=5 face="Comic Sans MS" >Motivo:</font>
    <textarea class="form-control" style="background-color:#d8ecf7;
  border:1px solid #afcde3;" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
  <br>
   <div class="form-group">
      <font  size=5 face="Comic Sans MS">Anamnesis:</font>
    <textarea style="background-color:#d8ecf7;
  border:1px solid #afcde3;" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
  <br>
 
      <div ><font  size=5 face="Comic Sans MS">Examen Clinico:</font>
    <textarea  class="textarea1"  rows="7" ></textarea>
    
    <table class="tabla1">
    <tr>
      <th>FC</th>
       <td><input class="box-tabla" type=""> L/m</td>
      <th></th>
    </tr>
    <tr>
       <th>FR</th>
       <td><input class="box-tabla" type=""> C/m</td>
    </tr>
   <tr>
       <th>PESO</th>
       <td><input class="box-tabla" type=""> L/m</td>
    </tr>
    <tr>
       <th>T°</th>
       <td><input class="box-tabla" type=""> °C</td>
    </tr>
    <tr>
       <th>PC</th>
       <td><input class="box-tabla" type=""> Seg</td>
    </tr>
    <tr>
       <th>TRC</th>
       <td><input class="box-tabla" type=""> Seg</td>
    </tr>
    <tr>
       <th>CC</th>
       <td><input class="box-tabla" type=""> /5</td>
    </tr>
</table>

<br><br><br>

      <font  size=5 face="Comic Sans MS">Examenes:</font> <br>
   <br />
<div>

<div>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1"> RX
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 140px"> ECOCARDIO
  </label>
  <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1"> ECOGRAFIA
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 76px"> HEMOGRAMA
  </label>
 <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1" > PERFIL BIOQUIMICO
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 16px"> TEST PARVO
  </label>
   <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1"> TEST DISTEMPER
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 40px">  TEST BRUCELOSIS
  </label>
  <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1"> TEST VIF/VILEF
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 56px">  BIOPSIA
  </label>
   <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1"> DIRECTO PELO
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 56px">  RASPADO PROFUNDO
  </label>
    <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1"> REACTIVO KOH
  </label>

  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 52px">  T3-T4
  </label> 
</div> 

<br><br>
<a href="" class="cbtn cbtn-ver" style="position:absolute;  left: 700px;"><span class="cn-icon cn-icon-historial">
</span>Guardar</button></a>

<br><br>
@endsection