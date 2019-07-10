<style>

    #checkboxes{
      background-color:#fff;
      min-height:200px;
      padding:10px;
      margin-top:20px;
    }
    
    .checkbox{
      margin:20px;
    }
    
    .checkbox label {
      min-height: 21px;
      padding-left: 20px;
      margin-bottom: 0;
      inline-size: auto;
      font-weight: normal;
      cursor: pointer;
      line-height:22px;
    }
    
    .c-checkbox span {
      position: relative;
      display: inline-block;
      vertical-align: top;
      margin-left: -20px;
      width: 20px;
      height: 20px;
      border-radius: 2px;
      border: 1px solid #ccc;
      text-align: center;
    }
    
    .c-checkbox span:before{
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      opacity: 0;
      text-align: center !important;
      font-size: 12px;
      line-height: 18px;
      vertical-align: middle;
    }
    
    .c-checkbox input[type=checkbox]{
      position:absolute;
      margin: 4px 0 0;
      opacity:0;
    }
    
    .c-checkbox input[type=checkbox]:checked {
    color: #fff;
    transition: color 0.3s ease-out;
    }
    
    .c-checkbox input[type=checkbox]:checked + span{
    border-color: #5d9cec;
    background-color: #5d9cec;
    }
    
    .c-checkbox input[type=checkbox]:checked + span:before{
      color: #fff;
    opacity: 1;
    transition: color 0.3s ease-out;
    }
    
    </style>
<form id="formt" method="post" enctype="multipart/form-data">
<header>
  <div class="titulo">
<h1>Nueva consulta</h1>
</header>


<!-- Inicio Datos heredados de mascota y cliente -->



@foreach($data as $row)

<a href="{{ url('recetarios/create/'.$consulta->id_consulta)}}" id="btnReceta" class="btn btn-primary btn-lg" style="float: left"><i class="fa fa-user-plus" aria-hidden="true">&nbsp;Recetario</a></i>
 <input type="hidden" name="mascota_id" value="{{$Modo=='crear' ? $row->id:$consulta->mascota_id}}" type="text">

 <input type="hidden" name="cliente_consulta_id" value="{{$Modo=='crear' ? $row->id_cliente:$consulta->cliente_consulta_id}}" type="text">

<input value="{{$consulta->id_consulta}}"  type="hidden" name="" id="">

<div class="jumbotron" style="background-color:white;">
<h1 style="margin-top:-23px;text-decoration: underline;">Ficha Clinica {{$row->Nombre}}</h1>

<select style="width:150px;margin-top:-60px;position:relative;right:-700px;height:50px;" class="form-control"name="Estado" id="Estado" >
                                   
                                    <option {{ $consulta->Estado == 'Activo' ? 'selected':'' }}>Activo</option>
                                     <option {{ $consulta->Estado == 'Inactivo' ? 'selected':'' }}>Inactivo</option>
</select>
<br>
<div class="form-row" >
  <div class="form-inline" >
    <label for="inputPassword6" style="margin-top:15px;font-weight:bold;">Paciente:</label>   
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;margin-top:15px;height:20px;">{{$row->Nombre}}</div>
    </div>
 &nbsp;&nbsp;
    <div class="form-inline" >
    <label for="inputPassword6" style="font-weight:bold;">Raza:</label>  
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;height:20px;">{{$row->Raza}}</div>
    </div>
    &nbsp;&nbsp;
    <div class="form-inline" >
    <label for="inputPassword6" style="font-weight:bold;">Color:</label>  
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;height:20px;">{{$row->Color}}</div>
    </div>
    &nbsp;&nbsp;
    <div class="form-inline">
    <label for="inputPassword6" style="font-weight:bold;">Especie:</label>  
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;height:20px;">{{$row->Especie}}</div>
    </div>
  </div> 
  
<div class="form-row" >
  <div class="form-inline" >
    <label for="inputPassword6" style="margin-top:15px;font-weight:bold;">Genero:</label>  
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;margin-top:15px;height:20px;">{{$row->Genero}}</div>
    </div>
 &nbsp;&nbsp;

    <div class="form-inline" >
    <label for="inputPassword6" style="font-weight:bold;">Nacimiento:</label>
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;height:20px;">{{$row->Fecha_Nacimiento}}</div>  
    </div>
    &nbsp;&nbsp;
    <div class="form-inline" >
    <label for="inputPassword6" style="font-weight:bold;">Microchip:</label>  
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;height:20px;">{{$row->Microchip}}</div>  
    </div>
    &nbsp;&nbsp;
    <div class="form-inline">
    <label for="inputPassword6" style="font-weight:bold;">Dueño:</label>  
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;height:20px;">{{$row->nom_cliente}} {{$row->apePat_cliente}}</div> 
    </div>
  </div> 

<div class="form-row" >
  <div class="form-inline" >
    <label for="inputPassword6" style="margin-top:15px;font-weight:bold;">Rut:</label>
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;margin-top:15px;height:20px;">{{$row->rut_cliente}}</div>   
    </div>
 &nbsp;&nbsp;
    <div class="form-inline" >
    <label for="inputPassword6" style="font-weight:bold;">Direccion:</label>  
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;height:20px;">{{$row->dire_cliente}}</div> 
    </div>
    &nbsp;&nbsp;
    <div class="form-inline" >
    <label for="inputPassword6" style="font-weight:bold;">Ciudad:</label>  
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;height:20px;">{{$row->ciudad_cliente}}</div> 
    </div>
    &nbsp;&nbsp;
    <div class="form-inline">
    <label for="inputPassword6" style="font-weight:bold;">Telefono:</label>
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:150px;height:20px;">{{$row->telefono_cliente}}</div>   
    </div>
  </div> 

  <div class="form-row" >
  <div class="form-inline" >
    <label for="inputPassword6" style="margin-top:15px;font-weight:bold;">Correo:</label>  
    <div class="form-control mx-sm-3" style="line-height: 5px;font-weight:bold;width:300px;margin-top:15px;height:20px;">{{$row->email_cliente}}</div>
    </div></div>

    @php
      $id = $consulta->id_consulta;
    @endphp

    @endforeach
<!-- Termino Datos heredados de mascota y cliente -->
<br><br>

    <div class="form-row" >
    <label style="font-weight:bold;" for="">Motivo_Consulta:</label> 
    </div>
    <!-- Inicio Textarea Motivo Consulta -->
    <div class="form-row" style="margin-top:-3px;">
    <div class="form-inline" >
    <textarea class="form-control" name="motivo_consulta" id="motivo_consulta"  class="mx-sm-3"  rows="7" style="height:100px;width:975px;">{{$consulta->motivo_consulta}}</textarea>
    </div></div>
    <!-- Termino Textarea Motivo Consulta -->

    <br>
    <!-- Inicio Textarea Anamnesis -->
    <div class="form-row" >
    <label style="font-weight:bold;" for="">Anamnesis:</label> 
    </div>
    <div class="form-row" style="margin-top:-3px;">
    <div class="form-inline" >
    <textarea name="Anamnesis" id="Anamnesis" class="form-control"  class="mx-sm-3"  rows="7" style="height:100px;width:975px;">{{$consulta->Anamnesis}}</textarea>
    </div></div>
    <!-- Termino Textarea Anamnesis -->
    <br>

    <div class="form-row" >
      <!-- Inicio Textarea Examen Clinino -->
    <label style="font-weight:bold;" for="">Examen_Clinico:</label> 
    </div>
    <div class="form-row" style="margin-top:-3px;">
    <div class="form-inline" >
    <textarea name="Examen_Clinico" class="form-control" type="text" class="mx-sm-3"  rows="7" style="height:100px;width:700px;">{{$consulta->Examen_Clinico}}</textarea>
    </div></div>
    <!-- Termino Textarea Examen Clinino -->

    <!-- Inicio Tabla Examen Clinino input -->

    <div style="position:relative;">

    <table style="width:180px;border-collapse:collapse;position:absolute;right:30px;margin-top:-130px;">
    <tbody>
      <tr >
    <td style="background-color:white;">FC</td>
    <td style="background-color:white;"class="form-row"><input name="FC_consulta" value="{{$consulta->FC_consulta}}" type="text" style="width:60px;height:20px;" class="form-control">&nbsp; L/m</td>
      </tr>
      <tr>
      <td style="background-color:white;">FR</td>
      <td style="background-color:white;" class="form-row"><input name="FR_consulta" value="{{$consulta->FR_consulta}}" type="text" style="width:60px;height:20px;" class="form-control"> &nbsp; C/m</td> 
      </tr>
      <tr>
      <td style="background-color:white;">PESO</td>
      <td style="background-color:white;" class="form-row"><input name="Peso" value="{{$consulta->Peso}}" type="text" style="width:60px;height:20px;" class="form-control"> &nbsp; </td> 
      </tr>
      <tr>
      <td style="background-color:white;">T°</td>
      <td style="background-color:white;"class="form-row"><input name="Temp" value="{{$consulta->Temp}}" type="text" style="width:60px;height:20px;" class="form-control"> &nbsp;°C </td> 
      </tr>
      <tr>
      <td style="background-color:white;">PC</td>
      <td style="background-color:white;" class="form-row"><input name="PC_Consulta" value="{{$consulta->PC_Consulta}}" type="text" style="width:60px;height:20px;" class="form-control"> &nbsp; Seg </td> 
      </tr>
      <tr>
      <td style="background-color:white;">TRC</td>
      <td style="background-color:white;" class="form-row"><input name="TRC_Consulta" value="{{$consulta->TRC_Consulta}}" type="text" style="width:60px;height:20px;" class="form-control"> &nbsp; Seg</td> 
      </tr>
      <tr>
      <td style="background-color:white;">CC</td>
      <td style="background-color:white;" class="form-row"><input name="CC_Consulta" value="{{$consulta->CC_Consulta}}" type="text" style="width:60px;height:20px;" class="form-control"> &nbsp; /5</td> 
      </tr>
       </tbody>
    </table>
    <!-- Termino Tabla Examen Clinico input -->
  
  </div>
    
 <br><br><br><br><br>

<div class="form-row" style="margin-top:-50px;top:-20px;font-weight:bold;position:relative;left:10px">
 <label for="" >Examenes_Complementarios</label>
 </div>



<!-- Inicio Checkbox -->
 <div class="form-row" style="margin-top:-10px">
 <div class="container" style="position:relative;left:-460px;">

<!-- Checkbox  RX-->
    <div class="checkbox c-checkbox" style="margin-top:-1px">
        <label>
        <input type="hidden" name="RX" value="0">
         <input type="checkbox" value="1" name="RX"
          @if (old(('RX')) ?? $consulta['RX'] ?? $consulta['default'] ?? false) checked="checked"
          @endif>
          <span class="fa fa-paw"></span>
          RX
        </label>
        </div>
  <!-- Checkbox  ECOGRAFIA-->      
        <div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:29px;">
        <label>
        <input type="hidden" name="Ecografia" value="0">
        <input type="checkbox" value="1"  name="Ecografia"
          @if (old(('Ecografia')) ?? $consulta['Ecografia'] ?? $consulta['default'] ?? false) checked="checked"
          @endif>
          <span class="fa fa-paw"></span>
          ECOGRAFIA
        </label>
        </div>
              
                
       <!-- Checkbox  ECOCARDIO-->
        <div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:31px;">
        <label>
        <input type="hidden" name="Ecocardio" value="0">
        <input type="checkbox" value="1" name="Ecocardio"
         @if (old(('Ecocardio')) ?? $consulta['Ecocardio'] ?? $consulta['default'] ?? false) checked="checked"
         @endif>
        <span class="fa fa-paw"></span>
          ECOCARDIO
        </label>
        </div>
<!-- Checkbox HEMOGRAMA-->
<div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:37px;">
    <label>
    <input type="hidden" name="Hemograma" value="0">
    <input type="checkbox" value="1" name="Hemograma"
     @if (old(('Hemograma')) ?? $consulta['Hemograma'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    HEMOGRAMA
    </label>
    </div>

  <!-- Checkbox Perfil_bio-->
  <div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:38px;">
      <label>
      <input type="hidden" name="Perfil_bio" value="0">
      <input type="checkbox" value="1" name="Perfil_bio"
       @if (old(('Perfil_bio')) ?? $consulta['Perfil_bio'] ?? $consulta['default'] ?? false) checked="checked"
       @endif>
      <span class="fa fa-paw"></span>
      PERFIL_BIOQO
      </label>
      </div>

<!-- Checkbox Test_parvo -->
<div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:32px;">
    <label>
    <input type="hidden" name="Test_parvo" value="0">
    <input type="checkbox" value="1" name="Test_parvo"
     @if (old(('Test_parvo')) ?? $consulta['Test_parvo'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    TEST_PARVO
    </label>
    </div>

 <!-- Checkbox Test_dis -->
 <div class="checkbox c-checkbox"  style="margin-top:-15px;position:relative;left:46px;">
    <label>
    <input type="hidden" name="Test_dis" value="0">
    <input type="checkbox" value="1" name="Test_dis"
     @if (old(('Test_dis')) ?? $consulta['Test_dis'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    TEST_DISTEMPER
    </label>
    </div>

<!-- Checkbox Test_brucelo-->
<div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:49px;">
    <label>
    <input type="hidden" name="Test_brucelo" value="0">
    <input type="checkbox" value="1" name="Test_brucelo"
     @if (old(('Test_brucelo')) ?? $consulta['Test_brucelo'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    TEST_BRUCELOSIS
    </label>
    </div>

 <!-- Checkbox TEST_VIF/VILEF -->
 <div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:39px;">
    <label>
    <input type="hidden" name="Test_vif" value="0">
    <input type="checkbox" value="1" name="Test_vif"
     @if (old(('Test_vif')) ?? $consulta['Test_vif'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    TEST_VIF/VILEF
    </label>
    </div>

<!-- Checkbox BIOPSIA-->
<div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:18px;">
    <label>
    <input type="hidden" name="Bipsia" value="0">
    <input type="checkbox" value="1" name="Bipsia"
     @if (old(('Bipsia')) ?? $consulta['Bipsia'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    BIOPSIA
    </label>
    </div>

 <!-- Checkbox DIRECTO_PELO-->
 <div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:40px;">
    <label>
    <input type="hidden" name="Directo_pelo" value="0">
    <input type="checkbox" value="1" name="Directo_pelo"
     @if (old(('Directo_pelo')) ?? $consulta['Directo_pelo'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    DIRECTO_PELO
    </label>
    </div>
    
<!-- Checkbox RASPADO_PROFUNDO -->
<div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:65px;">
    <label>
    <input type="hidden" name="Raspado" value="0">
    <input type="checkbox" value="1" name="Raspado"
     @if (old(('Raspado')) ?? $consulta['Raspado'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    RASPADO_PROFUNDO
    </label>
    </div>

 <!-- Checkbox REACTIVO_KOH -->
 <div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:42px;">
    <label>
    <input type="hidden" name="Reactivo_koh" value="0">
    <input type="checkbox" value="1" name="Reactivo_koh"
     @if (old(('Reactivo_koh')) ?? $consulta['Reactivo_koh'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    REACTIVO_KOH
    </label>
    </div>

 <!-- Checkbox T3-T4 -->
 <div class="checkbox c-checkbox" style="margin-top:-15px;position:relative;left:11px;">
    <label>
    <input type="hidden" name="T3T4" value="0">
    <input type="checkbox" value="1" name="T3T4"
     @if (old(('T3T4')) ?? $consulta['T3T4'] ?? $consulta['default'] ?? false) checked="checked"
     @endif>
    <span class="fa fa-paw"></span>
    T3-T4
    </label>
    </div>
<!-- Termino Checkbox -->

<div class="form-row" >
<label style="font-weight:bold;position:relative;left:728px;margin-top:-438px" for="">Resultado:</label> 
</div>
<!-- TEXTAREA RESULTADO -->
</div>
    <div class="form-row" >
    <div class="form-inline" style="position:relative;left:280px;margin-top:-540px" >
    <textarea class="form-control" name="RESULTADO" id="RESULTADO"  class="mx-sm-3"  rows="7" style="height:370px;width:690px;">{{$consulta->Resultado}}</textarea>
    </div>
</div>
<div class="form-group row" style="position:relative;right:270px;">
  <input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Registrar Ficha':'Guardar Cambios'}}">
  &nbsp;&nbsp;<a class="btn btn-secondary" href="{{URL::previous()}}"><i class="fa fa-reply fa-lg">Cancelar</a></i>
  </div>
</div>     

</form>