@extends('plantilla')

@section('seccion')

<header>
<div class="titulo">
    
    <h1>Informacion Especialista</h1>

</header>
        
        <div class="cont">
   
    <body  />
        <div class="contenedor">
            <div id="pestanas">
                <ul id=lista>
                    <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>ESPECIALISTA</a></li>
                </ul>
            </div>
            
            <div id="contenidopestanas">
                <div id="cpestana1">
                <image style="float: right; margin: px 20px 5px 10px;"src="https://image.flaticon.com/icons/png/512/56/56996.png" width="300"/></image>
                <br>
                <br>
                    <form  action="/action_page.php">
                           <br>

                           <label>Nombre:</label>
                <input class="box-info box-info-xs"  style="margin-right: 15px" type="text" name="firstname" value="Bayron Mauricio Narvaez Uribe">
                            <label  style="margin-right: 15px">Especialidad: </label>
                    <input class="box-info box-info-xs" type="text" name="firstname" value="Oftalmologo">
                            <br><br>
                            <label>Telefono:</label>
                            <input class="box-info box-info-xs" style="margin-right: 15px" type="text" name="lastname" value="+56972452997">
                            <label style="margin-right: 50px">Ciudad:</label>
                    <input class="box-info box-info-xs"  style="margin-right: 15px" type="text" name="firstname" value="Puerto Montt">
                         <br><br>
                          <label style="margin-right: 15px">Correo:</label>
                    <input class="box-info box-info-xs"  style="margin-right: 15px; width:520px;" type="text" name="firstname" value="Oftalmologo@gmail.com">
                             <div class="center-table">
  </div>

                    <a  href="" class="nbtn nbtn-ver" style="float: right;  position:absolute;  left: 700px;"><span class="nn-icon nn-icon-actualizar">
    </span>Actualizar Datos</button></a>
                
                  <br/>
                </div>


@endsection