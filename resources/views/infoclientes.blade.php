@extends('plantilla')

@section('seccion')

<header>
<div class="titulo">
    
    <h1>Listado de clientes</h1>

</header>
        
        <div class="cont">
   
    <body onload="javascript:cambiarPestanna(pestanas,pestana1);" />
        <div class="contenedor">
            <div id="pestanas">
                <ul id=lista>
                    <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>CLIENTE</a></li>
                    <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>MASCOTA</a></li>
                </ul>
            </div>
            
            <div id="contenidopestanas">
                <div id="cpestana1">
                <image style="float: right; margin: px 20px 5px 10px;"src="https://image.flaticon.com/icons/png/512/44/44948.png" width="300"/></image>
                <br>
                <br>
                    <form  action="/action_page.php">
                           <br>

                           <label>Nombre:</label>
                <input class="box-info box-info-xs"  style="margin-right: 15px" type="text" name="firstname" value="Bayron Mauricio Narvaez Uribe">
                            <label  style="margin-right: 15px">RUT: </label>
                    <input class="box-info box-info-xs" type="text" name="firstname" value="20.064.928-1">
                            <br><br>
                            <label>Direccion:</label>
                    <input class="box-info box-info-li" type="text" name="firstname" value="San Diego 1193">
                             <br><br>
                            <label>Telefono:</label>
                            <input class="box-info box-info-xs" style="margin-right: 15px" type="text" name="lastname" value="+56972452997">
                            <label >Ciudad:</label>
                    <input class="box-info box-info-xs"  style="margin-right: 15px" type="text" name="firstname" value="Puerto Montt">
                         
                             <div class="center-table">
  </div>
                    
                    <br>
                     <br>
                      <br>

                    <a  href="" class="nbtn nbtn-ver" style="float: right;"><span class="nn-icon nn-icon-actualizar">
    </span>Actualizar Datos</button></a>

                    </form> 
                  <br/>
                  <br/>
                </div>

<!--------------------------------SECCION-MASCOTA--------------------------------------------------->
          <div id="cpestana2">
        <table class="ctablas2">
  <tbody>
    <tr>
      <div class="main-container">
       </div> 
       <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Especie</th>
      <th scope="col">Ultima Visita</th>
      <th scope="col">Motivo de consulta</th>
      <th scope="col">Estado</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  
  <!--tfoot>
<tr>
<td colspan="7">
<div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
</td>
</tr>
</tfoot-->

  <tbody>
    <tr>
      <td>
      <img src="/icons/dog.png" alt="user-png-icon-male-user-icon-512" margin width="80" height="80" align="left">
      </td>
      <td>
      Panchito
     </td>
      <td>Perro</td>
      <td>09/06/2018</td>
      <td>Torcedura</td>
      <td>Dado de alta</td>
      <div class="main-container">
      <td>  <a  href="{{route('paginahistorial')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-historial"></span>Ver Historial  </a>
      </span></a>
         <a href="{{route('paginainfoclientes')}}" class="cbtn abtn-agendar">
      <span class="cn-icon cn-icon-agendar"></span>Agendar Hora</a>
      </td>
   </div>
  </tr>
    </tr>
    <tr>
      <div class="main-container">
        <td>
         <img src="/icons/cat.png" alt="user-png-icon-male-user-icon-512" margin width="80" height="80" align="left">
        </td>
       </div>
      <td>Sharon</td>
      <td>Gato</td>
      <td>09/06/2018</td>
      <td>Fractura</td>
      <td>En tratamiento</td>
      <div class="main-container">
        <td>  <a  href="{{route('paginahistorial')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-historial"></span>Ver Historial  </a>
      </span></a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn abtn-agendar">
      <span class="cn-icon cn-icon-agendar"></span>Agendar Hora</a>
      </td>
      
    </tr>
    <tr>
       <div class="main-container">
        <td>
         <img src="/icons/rabbit.png" alt="user-png-icon-male-user-icon-512" margin width="80" height="80" align="left">
        </td>
       </div>
      <td>Canelita</td>
      <td>Conejo</td>
      <td>09/06/2018</td>
      <td>Pelaje dañado</td>
      <td>En tratamiento</td>
      <div class="main-container">
        <td>  <a  href="{{route('paginahistorial')}}" class="cbtn cbtn-ver">
      <span class="cn-icon cn-icon-historial"></span>Ver Historial  </a>
      </span></a>
      <a href="{{route('paginainfoclientes')}}" class="cbtn abtn-agendar">
      <span class="cn-icon cn-icon-agendar"></span>Agendar Hora</a>
      </td>
      
      </td>
      </div>
    </tr>
  </tbody>
</div>
</table>
<br>

<a  href="" class="nbtn nbtn-ver" style="float: right; position:absolute;  left: 700px; "><span class="nn-icon nn-icon-mas">
    </span>Agregar mascota</button></a>
</div>
</div>
</div>
@endsection