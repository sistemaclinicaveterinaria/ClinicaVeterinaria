<body>

        <div class="bs-example">
        
            <h1 class="border-bottom pb-3 mb-4">Formulario Mascota</h1>
        
            <form class="needs-validation" action="/examples/actions/confirmation.php" method="post" novalidate>
            <!--La ID capturada de cliente-->
            <input type="hidden" name="cliente_id" value="{{$Modo=='crear' ? $cliente_id: $mascotas->cliente_id}}">
            <table class="tablas" style="width:750px" >
                    <thead class="thead-dark">
                    </thead>
                    <tbody>
                      <tr>
                        <td height="300"  style="background-color:white">
                        <div class="main-container" style="margin-top:-50px">  
                       <img src="http://freeiconbox.com/icon/256/42001.png" alt="" margin width="250" height="250" >
                      </div>
                        </td>
                      </td>
                      <td  style="background-color:white">
        

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
                                    
                                    <option value="">Seleccione Genero</option>
                                    <option {{ $mascotas->Genero == 'Hembra' ? 'selected':'' }}>Hembra</option>
                                     <option {{ $mascotas->Genero == 'Macho' ? 'selected':'' }}>Macho</option>

                                    </select>
                                          {!! $errors->first('Genero','<div class="invalid-feedback">:message</div>')!!}
                                    </div>
                                    </div>
                            
                                    <div class="form-row" style="margin-top:-25px">
                                    <div class="form-group col-md-6">
                                    <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;" for="Fecha_Nacimiento">{{'Fecha_Nacimiento'}}</label>
                                    <input  class="form-control {{$errors->has('Fecha_Nacimiento')?'is-invalid':''}}" type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" 
                                    value="{{ isset($mascotas-> Fecha_Nacimiento)?$mascotas->Fecha_Nacimiento:old('Fecha_Nacimiento')}}">
                                    {!! $errors->first('Fecha_Nacimiento','<div class="invalid-feedback">:message</div>')!!}
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label class="col-form-label" style="position:relative;right:80px;margin-top:-80px;" for="Especie">{{'Especie'}}</label>
                                    <select name="Especie" id="Especie" class="form-control {{$errors->has('Especie')?'is-invalid':''}}">

                                    <option value="">Seleccione Especie</option>
 
                                    <option {{ $mascotas->Especie == 'Canino' ? 'selected':'' }}>Canino</option>
                                    <option {{ $mascotas->Especie == 'Felino' ? 'selected':'' }}>Felino</option>
                                    <option {{ $mascotas->Especie == 'Exotico' ? 'selected':'' }}>Exotico</option>

                                    </select>
                                          {!! $errors->first('Especie','<div class="invalid-feedback">:message</div>')!!}
                                    </div>
                                    </div>
                            
                                    <div class="form-row" style="margin-top:-25px">
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
                            
                                    <div class="form-row" style="margin-top:-25px">
                                    <div class="form-group col-md-12">
                                    <label class="col-form-label" style="position:relative;right:200px;margin-top:7px;"  for="Microchip">{{'Microchip'}}</label>
                                    <input  class="form-control {{$errors->has('Microchip')?'is-invalid':''}}" type="text" name="Microchip" id="Microchip" 
                                    value="{{ isset($mascotas-> Microchip)?$mascotas->Microchip:old('Microchip')}}">
                                    {!! $errors->first('Microchip','<div class="invalid-feedback">:message</div>')!!}
                                    </div>
                                    </div>
        
                <div class="form-group row">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Registrar Mascota':'Guardar Cambios'}}">&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{url()->previous() }}"><i class="fa fa-reply fa-lg">Volver</a></i>
        
                    </div>
                </div>
               </div>
                </div>
        
            </td>
        </tr>
        </tbody>
        </table>
            </form>
        </div>
        </body>