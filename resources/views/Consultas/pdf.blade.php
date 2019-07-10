<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    body{
        background-image:url("https://3.bp.blogspot.com/-L1Pr_7c0apc/XR1xikm11YI/AAAAAAAABmA/BP3OyHNDLPU3BgAFyzNosuLobd4lRbGQgCK4BGAYYCw/s1600/output-onlinepngtools%2B%25283%2529.png"); 
        background-repeat: no-repeat;
        background-position: center;
        
    }
    ul.checkbox li { 
  border: 1px transparent solid; 
  display:inline-block;
  width:12em;
}
    </style>
</head>
<body >  
    <!-- Inicio Datos heredados de mascota y cliente -->
@foreach($data as $row)



<img src="https://scontent.fzal1-1.fna.fbcdn.net/v/t1.0-9/44286416_1919846044763632_1258321264771072000_n.jpg?_nc_cat=102&_nc_eui2=AeGU7eD0sKE9JgDDt5fonUYRvJe81C0-ajhr2tfNKZMCpn4ziGoP80P9KtM2e0xFlWIpQTyaLWjvdem6lofeYHSoqb8Ql784DXR-SmOcegm9JQ&_nc_ht=scontent.fzal1-1.fna&oh=2e48fd37dd7471317f7832564800a681&oe=5DBE5C11"  width="13%" height="13%" style=" margin-right:1600px;margin-top:-20px;">
<h2 style="text-align:center;margin-top:-90px;">Ficha Clinica</h2><br>
<div style="width:34%; float:left;">
    <label for="" style="font-weight:bold;text-decoration: underline;">Paciente:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->Nombre}}</label>
    </div>
    <div style="width:34%; float:left;">
        <label for="" style="font-weight:bold;text-decoration: underline;">Raza:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->Raza}}</label>
    </div>
    <div style="width:34%; float:left;">
        <label for="" style="font-weight:bold;text-decoration: underline;">Color:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->Color}}</label>
        </div>
       
<br><br>
<div style="width:34%; float:left;">
    <label for="" style="font-weight:bold;text-decoration: underline;">Especie:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->Especie}}</label>
</div>
<div style="width:34%; float:left;">
    <label for="" style="font-weight:bold;text-decoration: underline;">Genero:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->Genero}}</label>
    </div>
    <div style="width:34%; float:left;">
        <label for="" style="font-weight:bold;text-decoration: underline;">Nacimiento:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->Fecha_Nacimiento}}</label>
    </div>
   
        <br><br>
        <div style="width:34%; float:left;">
            <label for="" style="font-weight:bold;text-decoration: underline;">Microchip:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->Microchip}}</label>
            </div>
        <div style="width:34%; float:left;">
            <label for="" style="font-weight:bold;text-decoration: underline;">Propietario:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->nom_cliente}}</label>
        </div>
        <div style="width:34%; float:left;">
            <label for="" style="font-weight:bold;text-decoration: underline;">Rut:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->rut_cliente}}</label>
        </div>

        <br><br>
        <div style="width:34%; float:left;">
            <label for="" style="font-weight:bold;text-decoration: underline;">Direccion:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->dire_cliente}}</label>
            </div>
        <div style="width:34%; float:left;">
            <label for="" style="font-weight:bold;text-decoration: underline;">Ciudad:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->ciudad_cliente}}</label>
        </div>
        <div style="width:34%; float:left;">
            <label for="" style="font-weight:bold;text-decoration: underline;">Telefono:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->telefono_cliente}}</label>
        </div>
        
        <br><br>
        <div style="width:34%; float:left;">
            <label for="" style="font-weight:bold;text-decoration: underline;">Correo:</label>&nbsp;<label style="width:150px;height:20px;" for="Anamnesis">{{$row->email_cliente}}</label>
            </div>

   @endforeach
<br><br><br>


   <label  style="font-weight:bold" for="">Motivo Consulta:</label><br>
   <textarea name="" id="" cols="30" style="height:100px;width:700px;font-family:Arial">{{$consulta['motivo_consulta']}}</textarea>
   <br>
   
   <label  style="font-weight:bold" for="">Anamnesis:</label><br>
   <textarea name="" id="" cols="30" style="height:100px;width:700px;font-family:Arial">{{$consulta['Anamnesis']}}</textarea>
   <br>
   <div style="width:60%; float:left;">
   <label  style="font-weight:bold" for="">Examen Clinico:</label><br>
   <textarea name="" id="" cols="30" style="height:100px;width:400px;font-family:Arial">{{$consulta['Examen_Clinico']}}</textarea>
  </div>
  <div style="width:20%; float:left;">
    <label for="">FC</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  value="{{$consulta['FC_consulta']}}" style="width:60px;height:20px;font-family:Arial">L/m<br>
    <label for="">FR</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  value="{{$consulta['FR_consulta']}}" style="width:60px;height:20px;font-family:Arial">C/m<br>
    <label for="">PESO</label><input type="text"  value="{{$consulta['Peso']}}" style="width:60px;height:20px;"><br>
    <label for="">T°</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  value="{{$consulta['Temp']}}" style="width:60px;height:20px;font-family:Arial">°C<br>
   </div>
   <div style="width:20%; float:left;">
    <label for="">PC</label>&nbsp;&nbsp;&nbsp;<input type="text"  value="{{$consulta['PC_Consulta']}}" style="width:60px;height:20px;font-family:Arial">Seg<br>
    <label for="">TRC</label><input type="text"  value="{{$consulta['TRC_Consulta']}}" style="width:60px;height:20px;font-family:Arial">Seg<br>
    <label for="">CSC</label><input type="text"  value="{{$consulta['CC_Consulta']}}" style="width:60px;height:20px;font-family:Arial">/5<br>
   </div>
   <br><br><br><br><br><br><br><br>
   
   <div style="width:40%; float:left;">
   <label  style="font-weight:bold" for="">Examenes Complementarios:</label>
  </div>
  <div style="width:60%; float:left;">
    <label  style="font-weight:bold" for="">Resultado:</label>
   </div><br><br>


   <div style="width:20%; float:left;">
   
  
   @if($consulta['RX']  == '1')
   <li><input type="checkbox" id="cb1" value="{{$consulta['RX']}}" checked/><label for="cb1">Rx</label></li> 
   @endif
   @if($consulta['RX']  == '0')
   <li><input type="checkbox" id="cb1" value="{{$consulta['RX']}}" /><label for="cb1">Rx</label></li>
   @endif

   @if($consulta['Ecocardio']  == '1')
    <li><input type="checkbox" id="cb2" value="{{$consulta['Ecocardio']}}" checked /><label for="cb2">Ecocardio</label></li> 
   @endif
   @if($consulta['Ecocardio']  == '0')
   <li><input type="checkbox" id="cb2" value="{{$consulta['Ecocardio']}}" /><label for="cb2">Ecocardio</label></li> 
   @endif

   @if($consulta['Ecografia']  == '1')
   <li><input type="checkbox" id="cb3" value="{{$consulta['Ecografia']}}" checked/><label for="cb3">Ecografia</label></li> 
   @endif
   @if($consulta['Ecografia']  == '0')
   <li><input type="checkbox" id="cb2" value="{{$consulta['Ecografia']}}" /><label for="cb2">Ecografia</label></li> 
   @endif

   @if($consulta['Hemograma']  == '1')
   <li><input type="checkbox" id="cb4" value="{{$consulta['Hemograma']}}" checked /><label for="cb4">Hemograma</label></li> 
   @endif
   @if($consulta['Hemograma']  == '0')
   <li><input type="checkbox" id="cb4" value="{{$consulta['Hemograma']}}" /><label for="cb4">Hemograma</label></li> 
   @endif

   @if($consulta['Perfil_bio']  == '1')
   <li><input type="checkbox" id="cb5" value="{{$consulta['Perfil_bio']}}" checked/><label for="cb5">Perfil Bioqco</label></li> 
   @endif
   @if($consulta['Perfil_bio']  == '0')
   <li><input type="checkbox" id="cb5" value="{{$consulta['Perfil_bio']}}" /><label for="cb5">Perfil Bioqco</label></li> 
   @endif


   @if($consulta['Test_parvo']  == '1')
   <li><input type="checkbox" id="cb6" value="{{$consulta['Test_parvo']}}"checked/><label for="cb6>">Test Parvo</label></li> 
   @endif
   @if($consulta['Test_parvo']  == '0')
   <li><input type="checkbox" id="cb6" value="{{$consulta['Test_parvo']}}" /><label for="cb6>">Test Parvo</label></li> 
   @endif


   @if($consulta['Test_dis']  == '1')
   <li><input type="checkbox" id="cb1" value="{{$consulta['Test_dis']}}" checked/><label for="cb1">Test Distemper</label></li> 
   @endif
   @if($consulta['Test_dis']  == '0')
   <li><input type="checkbox" id="cb1" value="{{$consulta['Test_dis']}}" /><label for="cb1">Test Distemper</label></li> 
   @endif


   </div>
   <div style="width:20%; float:left;">
   
   @if($consulta['Test_brucelo']  == '1')
   <li><input type="checkbox" id="cb2" value="{{$consulta['Test_brucelo']}}" checked /><label for="cb2">Test Brucelosis</label></li> 
   @endif
   @if($consulta['Test_brucelo']  == '0')
   <li><input type="checkbox" id="cb2" value="{{$consulta['Test_brucelo']}}" /><label for="cb2">Test Brucelosis</label></li> 
   @endif

   @if($consulta['Test_vif']  == '1')
   <li><input type="checkbox" id="cb3" value="{{$consulta['Test_vif']}}" checked/><label for="cb3">Test VIF/VILEF</label></li>  
   @endif
   @if($consulta['Test_vif']  == '0')
   <li><input type="checkbox" id="cb3" value="{{$consulta['Test_vif']}}" /><label for="cb3">Test VIF/VILEF</label></li> 
   @endif

   @if($consulta['Bipsia']  == '1') 
   <li><input type="checkbox" id="cb4" value="{{$consulta['Bipsia']}}" checked/><label for="cb4">Biopsia</label></li> 
   @endif
   @if($consulta['Bipsia']  == '0')  
   <li><input type="checkbox" id="cb4" value="{{$consulta['Bipsia']}}" /><label for="cb4">Biopsia</label></li>  
   @endif

   @if($consulta['Directo_pelo']  == '1') 
   <li><input type="checkbox" id="cb5" value="{{$consulta['Directo_pelo']}}" checked /><label for="cb5">Directo Pelo</label></li>
   @endif
   @if($consulta['Directo_pelo']  == '0')  
   <li><input type="checkbox" id="cb5" value="{{$consulta['Directo_pelo']}}" /><label for="cb5">Directo Pelo</label></li>
   @endif

   @if($consulta['Raspado']  == '1') 
   <li><input type="checkbox" id="cb6" value="{{$consulta['Raspado']}}" checked/><label for="cb6>">Raspado Profundo</label></li> 
   @endif
   @if($consulta['Raspado']  == '0')  
   <li><input type="checkbox" id="cb6" value="{{$consulta['Raspado']}}" /><label for="cb6>">Raspado Profundo</label></li> 
   @endif


   @if($consulta['Reactivo_koh']  == '1') 
   <li><input type="checkbox" id="cb1" value="{{$consulta['Reactivo_koh']}}" checked/><label for="cb1">Reactivo KOH</label></li> 
   @endif
   @if($consulta['Reactivo_koh']  == '0')  
   <li><input type="checkbox" id="cb1" value="{{$consulta['Reactivo_koh']}}" /><label for="cb1">Reactivo KOH</label></li> 
   @endif

   
   @if($consulta['T3T4']  == '1')   
   <li><input type="checkbox" id="cb2" value="{{$consulta['T3T4']}}" checked/><label for="cb2">T3-T4</label></li> 
   @endif
   @if($consulta['T3T4']  == '0')  
   <li><input type="checkbox" id="cb2" value="{{$consulta['T3T4']}}" /><label for="cb2">T3-T4</label></li> 
   @endif
  
  
</div>
<div style="width:60%; float:left;">
  <textarea name="" id="" cols="30" style="height:138px;width:430px;font-family:Arial">{{$consulta['Resultado']}}</textarea>
</div>
<!-- Termino Datos heredados de mascota y cliente -->

{{-- {{$consulta['Anamnesis']}} --}}

</body>
</html>