@extends('plantilla')

@section('seccion')

<header>
<div class="titulo">
    
    <h1>Formulario de registro</h1>
</header>

<body>
<div class="cont">
  <table class="ctablas">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Dueño</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td height="300">
      <div class="main-container">  
     <img src="https://image.flaticon.com/icons/png/512/44/44948.png" alt="" margin width="250" height="250" align="left">
    </div>
      </td>
    </td>
    <td>
    </br>
      <div class="form-group">
     <label for="pwd" style="margin-right: 15px">Nombre: </label>
     <input class="box-info"  style="margin-right: 7px" placeholder="Bayron Narvaez" type="text" class="form-control" id="usr"  disabled>
     <label for="pwd" style="margin-left: 10px">RUT: </label>
      <input class="box-info"  style="margin-left: 5px"  placeholder="12345678-9" class="form-control" id="pwd"  disabled>
    </div>
      <div class="form-group">
     <label for="pwd" style="margin-right: 8px">Dirección: </label>
     <input class="box-info box-info-xl"  style="margin-right: 5px" placeholder="Las ollas N°520" class="form-control" id="usr"  disabled>
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
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mascota</th>
    </tr>
  </thead>
  <tfoot>
<tr>
<td colspan="7">
<div class="">    <a href="" class="ncbtn ncbtn-ver" ><span class="cn-icon nnc-icon-ver" ></span>Registrar</a>
      <a href="" class="ncbtn ncbtn-eliminar"><span class="cn-icon cn-icon-cancelar">Cancelar</span></a></div>
</td>
</tr>
</tfoot>
  <tbody>
    <tr>
      <td height="300">
      <div class="main-container">
        <img src="http://freeiconbox.com/icon/256/42001.png" alt="user-png-icon-male-user-icon-512" margin width="250" height="250" align="left">
    </div>
      </td>
    </td>
    <td>
      </br>
      <div class="form-group" >
     <label for="pwd" style="margin-right: 15px" >Nombre: </label>
     <input class="box-info"   placeholder="Panchito" type="text" class="form-control" id="usr"  disabled>
     <label for="pwd" style="margin-left: 15px" >Raza: </label>
      <input class="box-info"   placeholder="Poodle Toy" class="form-control" id="pwd"  disabled>
    </div>
      <div class="form-group">
     <label for="pwd" style="margin-right: 20px">Genero:  </label>
     <input class="box-info" placeholder="Macho" class="form-control" id="usr"  disabled>
     <label for="pwd">Especie: </label>
     <input class="box-info" placeholder="Macho" class="form-control" id="usr"  disabled>
    </div>
      <div class="form-group">
     <label for="pwd" style="margin-right: 30px">Color   : </label>
     <input class="box-info box-info-xl" placeholder="Negro" class="form-control" id="usr"  disabled>
    </div>
    <div class="form-group">
     <label for="pwd"  style="margin-right: 10px" >Microchip: </label>
     <input class="box-info"  placeholder="Si" class="form-control" id="usr"  disabled>
     <label for="pwd"  style="margin-right: 20px">Fecha de nacimiento: </label>
     <input class="box-info box-info-xs" placeholder="06/06/06" class="form-control" id="usr"  disabled>
    </div>
    </td>
    </tr>
  </tbody>
</table>
</div>

</body>
@endsection