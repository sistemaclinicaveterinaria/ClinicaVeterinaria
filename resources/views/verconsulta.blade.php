@extends('plantilla')

@section('seccion')

<header>
  <div class="titulo">
<h1>VER CONSULTA</h1>
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
    <textarea style="background-color:#d8ecf7;
  border:1px solid #afcde3;" type ="text" disabled="disabled" class="form-control" id="exampleFormControlTextarea1" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
  </div>
  <br>
   <div class="form-group">
      <font size=5 face="Comic Sans MS">Anamnesis:</font>
    <textarea style="background-color:#d8ecf7;
  border:1px solid #afcde3;"  type ="text" disabled="disabled" class="form-control" id="exampleFormControlTextarea1" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
  </div>
  <br>
 
      <div ><font  size=5 face="Comic Sans MS">Examen Clinico:</font>
    <textarea type ="text" disabled="disabled" class="textarea1"  rows="7" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo    consequat.
 </textarea>
    
    <table class="tabla1">
    <tr>
      <th>FC</th>
       <td><input class="box-tabla" type="" placeholder="9" disabled="disabled"> L/m</td>
      <th></th>
    </tr>
    <tr>
       <th>FR</th>
       <td><input class="box-tabla" type="" placeholder="4" disabled="disabled"> C/m </td>
    </tr>
   <tr>
       <th>PESO</th>
       <td><input class="box-tabla" type="" placeholder="14" disabled="disabled"> L/m</td>
    </tr>
    <tr>
       <th>T°</th>
       <td><input class="box-tabla" type="" placeholder="18" disabled="disabled"> °C</td>
    </tr>
    <tr>
       <th>PC</th>
       <td><input class="box-tabla" type="" placeholder="6" disabled="disabled"> Seg</td>
    </tr>
    <tr>
       <th>TRC</th>
       <td><input class="box-tabla" type="" placeholder="10" disabled="disabled"> Seg</td>
    </tr>
    <tr>
       <th>CC</th>
       <td><input class="box-tabla" type="" placeholder="20" disabled="disabled"> /5</td>
    </tr>
</table>

<br><br><br>

      <font  size=5 face="Comic Sans MS">Examenes:</font> <br>
   <br />
<div>

<div>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1" checked="checked" disabled="disabled"> RX
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 140px" disabled="disabled"> ECOCARDIO
  </label>
  <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1" checked="checked" disabled="disabled"> ECOGRAFIA
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 76px" checked="checked" disabled="disabled"> HEMOGRAMA
  </label>
 <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1" disabled="disabled"> PERFIL BIOQUIMICO
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" checked="checked" style="margin-left: 16px" disabled="disabled"> TEST PARVO
  </label>
   <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1" checked="checked" disabled="disabled"> TEST DISTEMPER
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 40px" disabled="disabled">  TEST BRUCELOSIS
  </label>
  <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1" disabled="disabled"> TEST VIF/VILEF
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 56px" disabled="disabled">  BIOPSIA
  </label>
   <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1" disabled="disabled"> DIRECTO PELO
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 56px" disabled="disabled">  RASPADO PROFUNDO
  </label>
    <br> 
  <label class="checkbox-inline">
    <input type="checkbox" id="cb1" value="option1" disabled="disabled"> REACTIVO KOH
  </label>

  <label class="checkbox-inline">
    <input type="checkbox" id="cb2" value="option2" style="margin-left: 52px" disabled="disabled">  T3-T4
  </label> 
</div> 

  
</div>
<br><br>
<a href="" class="cbtn cbtn-ver" style="position:absolute;  left: 700px;"><span class="cn-icon cn-icon-historial">
</span>Guardar</button></a>

<a href="" class="cbtn abtn-agendar" style="position:absolute;  left: 500px;"><span class="cn-icon cn-icon-editar"></span>Editar</button></a>

<a href="" class="cbtn abtn-imprimir" style="position:absolute;  left: 900px;"><span class="cn-icon cn-icon-imprimir"></span>Imprimir</button></a>
<br><br>
@endsection