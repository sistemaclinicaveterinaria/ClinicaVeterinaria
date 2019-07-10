<body>
  <div class="bs-example">
  
      <h4 class="border-bottom pb-3 mb-4">Formulario Registro</h4>

      <br>
  
      <form  action="{{ route('creartablas')}}" method="post" >
        <input type="hidden" name="_token" value ="{{ csrf_token() }}">
        <table class="tablas" style="width:750px" >
      <thead class="thead-dark">
        <tr>
          <th scope="col">Dueño</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td height="300"  style="background-color:white">
          <div class="main-container" style="margin-top:10px"> 
         <img src="https://image.flaticon.com/icons/png/512/44/44948.png" alt="" margin width="210" height="210" >
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </td>
        </td>
        <td  style="background-color:white">
    <br>
            <input type="hidden" name="_token" value ="{{ csrf_token() }}">
            <div class="form-row">
                     

            <div class="form-row" style="margin-top:-15px">
            <div class="form-group col-md-6">  
            <label class="col-form-label" style="position:relative;right:100px;margin-top:7px;" for="apePat_cliente" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{'RUT'}}</label>
            <input  type="text" class="form-control" name="rut_cliente" id="rut_cliente" onkeyup="this.value=filtroRut(this.value)" oninput="checkRut(this)"
            value="{{ isset($cliente->rut_cliente)?$cliente->rut_cliente:old('rut_cliente') }}">
            
            {!! $errors->first('apePat_cliente','<div class="invalid-feedback">:message</div>')!!}
            </div>
                    
              <div class="form-group col-md-6">
            <label class="col-form-label"  for="nom_cliente" style="position:relative;right:80px;margin-top:-50px;" >{{'Nombre'}}</label>
            <input   type="text" class="form-control {{$errors->has('nom_cliente')?'is-invalid':''}}" name="nom_cliente" id="nom_cliente"
            value="{{ isset($cliente->nom_cliente)?$cliente->nom_cliente:old('nom_cliente') }}">
                {!! $errors->first('nom_cliente','<div class="invalid-feedback">:message</div>')!!}
            </div>
            </div>
            
    
            <div class="form-row" style="margin-top:-15px">
            <div class="form-group col-md-6">  
            <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;" for="apePat_cliente" >{{'Apellido_Paterno'}}</label>
            <input  type="text" class="form-control {{$errors->has('apePat_cliente')?'is-invalid':''}}" name="apePat_cliente" id="apePat_cliente" 
            value="{{ isset($cliente->apePat_cliente)?$cliente->apePat_cliente:old('apePat_cliente') }}">
            {!! $errors->first('apePat_cliente','<div class="invalid-feedback">:message</div>')!!}
            </div>
            
            <div class="form-group col-md-6">
            <label class="col-form-label" for="apeMat_cliente" style="position:relative;right:80px;margin-top:-80px;" >{{'Apellido_Materno'}}</label>
            <input  type="text" class="form-control {{$errors->has('apeMat_cliente')?'is-invalid':''}}" name="apeMat_cliente" id="apeMat_cliente" 
            value="{{ isset($cliente->apeMat_cliente)?$cliente->apeMat_cliente:old('apeMat_cliente') }}">
              {!! $errors->first('apeMat_cliente','<div class="invalid-feedback">:message</div>')!!}
            </div>
            </div>
           
            <div class="form-row" style="margin-top:-15px">
            <div class="form-group col-md-6"> 
            <label class="col-form-label"  style="position:relative;right:80px;margin-top:7px;" for="dire_cliente" >{{'Direccion'}}</label>
            <input  type="text" class="form-control {{$errors->has('dire_cliente')?'is-invalid':''}}"name="dire_cliente" id="dire_cliente" 
            value="{{ isset($cliente->dire_cliente)?$cliente->dire_cliente:old('dire_cliente')}}">   
            {!! $errors->first('dire_cliente','<div class="invalid-feedback">:message</div>')!!}
            </div>
            <div class="form-group col-md-6">
            <label  style="position:relative;right:80px;margin-top:-80px;" class="col-form-label" for="ciudad_cliente"  >{{'Ciudad'}}</label>
            <input list="ciudad_cliente" class="form-control" name="ciudad_cliente" >
                                    <datalist id="ciudad_cliente">
                                      <option value="Puerto Montt">
                                      <option value="Puerto Varas">
                                      <option value="Calbuco">
                                      <option value="Fresia">
                                      <option value="Los Muermos">
                                      <option value="Llanquihue">
                                      <option value="Castro">
                                      <option value="Ancud">
                                      <option value="Quellon">
                                      <option value="Osorno">
                                      <option value="Purranque">
                                      <option value="Valdivia">
                                      <option value="osorno">
                                    </datalist>  
            {!! $errors->first('ciudad_cliente','<div class="invalid-feedback">:message</div>')!!}
            </div>
            </div>
     
            <div class="form-row" style="margin-top:-15px">
            <div class="form-group col-md-6">
            <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;" for="telefono_cliente" >{{'Telefono'}}</label>
            <input  type="text" class="form-control {{$errors->has('telefono_cliente')?'is-invalid':''}}" name="telefono_cliente" id="telefono_cliente" 
             value="{{ isset($cliente->telefono_cliente)?$cliente->telefono_cliente:old('telefono_cliente')}}">
             {!! $errors->first('telefono_cliente','<div class="invalid-feedback">:message</div>')!!}
             </div>
             <div class="form-group col-md-6">
            <label style="position:relative;right:80px;margin-top:-80px;" class="col-form-label" for="email_cliente" >{{'Email'}}</label>
            <input  type="text" class="form-control {{$errors->has('email_cliente')?'is-invalid':''}}" name="email_cliente" id="email_cliente" 
             value="{{ isset($cliente->email_cliente)?$cliente->email_cliente:old('email_cliente') }}">
             {!! $errors->first('email_cliente','<div class="invalid-feedback">:message</div>')!!}
            </div>
            </div>
    
            </div>
        </td>
        </tr>
      </tbody>
    </table>

    <br>

    
    <table class="tablas" style="width:750px" >
      <thead class="thead-dark">
        <tr>
          <th scope="col">Mascota</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td height="300"  style="background-color:white">
          <div class="main-container" style="margin-top:10px">  
         <img src="http://freeiconbox.com/icon/256/42001.png" alt="" margin width="250" height="250" >
        </div>
          </td>
        </td>
        <td  style="background-color:white">
    <br>
            <div class="form-row">
            <div class="form-group col-md-6">
            <label class="col-form-label"style="position:relative;right:80px;margin-top:7px;" for="Nombre">{{'Nombre'}}</label> 
            <input  class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" type="text" name="Nombre" id="Nombre" 
            value="{{ isset($mascotas-> Nombre)?$mascotas->Nombre:old('Nombre') }}">
            {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>')!!}
            </div>
            <div class="form-group col-md-6">
            <label style="position:relative;right:80px;margin-top:-80px;" class="col-form-label" for="Genero">{{'Genero'}}</label>
            <select name="Genero" id="Genero" class="form-control {{$errors->has('Genero')?'is-invalid':''}}" >
            <option value="">Seleccione un Genero</option>
                <option value="Hembra">Hembra</option>
                <option value="Macho">Macho</option>
                  </select>
                  {!! $errors->first('Genero','<div class="invalid-feedback">:message</div>')!!}
            </div>
            </div>
    
            <div class="form-row" style="margin-top:-15px">
            <div class="form-group col-md-6">
            <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;" for="Fecha_Nacimiento">{{'Fecha_Nacimiento'}}</label>
            <input  class="form-control {{$errors->has('Fecha_Nacimiento')?'is-invalid':''}}" type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" 
            value="{{ isset($mascotas-> Fecha_Nacimiento)?$mascotas->Fecha_Nacimiento:old('Fecha_Nacimiento')}}">
            {!! $errors->first('Fecha_Nacimiento','<div class="invalid-feedback">:message</div>')!!}
            </div>
            <div class="form-group col-md-6">
            <label class="col-form-label" style="position:relative;right:80px;margin-top:-80px;" for="Especie">{{'Especie'}}</label>
            <select name="Especie" id="Especie" class="form-control {{$errors->has('Especie')?'is-invalid':''}}">
            <option value="">Seleccione una Especie</option>
                <option value="Canino">Canino</option>
                <option value="Felino">Felino</option>
                <option value="Exotico">Exotico</option>
            </select>
                  {!! $errors->first('Especie','<div class="invalid-feedback">:message</div>')!!}
            </div>
            </div>
    
            <div class="form-row" style="margin-top:-15px">
            <div class="form-group col-md-6">
            <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;" for="Raza">{{'Raza'}}</label>
            <input  class="form-control {{$errors->has('Raza')?'is-invalid':''}}"  type="text" name="Raza" id="Raza" 
            value="{{ isset($mascotas-> Raza)?$mascotas->Raza:old('Raza')}}">
            {!! $errors->first('Raza','<div class="invalid-feedback">:message</div>')!!}
            </div>
            <div class="form-group col-md-6">
            <label class="col-form-label" style="position:relative;right:80px;margin-top:-80px;" for="Color">{{'Color'}}</label>
            <input  class="form-control {{$errors->has('Color')?'is-invalid':''}}" type="text" name="Color" id="Color" 
            value="{{ isset($mascotas-> Color)?$mascotas->Color:old('Color')}}">
            {!! $errors->first('Color','<div class="invalid-feedback">:message</div>')!!}
            </div>
            </div>
    
            <div class="form-row" style="margin-top:-15px">
            <div class="form-group col-md-12">
            <label class="col-form-label" style="position:relative;right:200px;margin-top:7px;"  for="Microchip">{{'Microchip'}}</label>
            <input  class="form-control {{$errors->has('Microchip')?'is-invalid':''}}" type="text" name="Microchip" id="Microchip" 
            value="{{ isset($mascotas-> Microchip)?$mascotas->Microchip:old('Microchip')}}">
            {!! $errors->first('Microchip','<div class="invalid-feedback">:message</div>')!!}
            </div>
            </div>
    
            </div>
        </td>
        </tr>
      </tbody>
    </table>
    <br>
    
            <div class="form-group row" style="position:relative;right:50px;">
                <div class="col-sm-9 offset-sm-3">
                <input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Guardar Registro':'Modificar'}}">
                <a class="btn btn-secondary" href="{{url('Cli_Mas')}}"><i class="fa fa-reply fa-lg">Volver</a></i>
                </div>
            </div>
  </form>
  </div>
  </body>
  

