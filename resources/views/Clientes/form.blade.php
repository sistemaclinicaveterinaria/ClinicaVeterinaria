<h1 class="border-bottom pb-3 mb-4">Información Dueño</h1>

    <form id="formt" class="needs-validation" action="/examples/actions/confirmation.php" method="post" novalidate>
        <table class="tablas" style="width:750px" >
                <tbody>
                  <tr>
                    <td height="300"  style="background-color:white">
                    <div class="main-container" style="margin-top:-50px">  
                   <img src="https://image.flaticon.com/icons/png/512/44/44948.png" alt="" margin width="250" height="250" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </div>
                    </td>
                  </td>
                  <td  style="background-color:white">

        
         <div class="form-row">
         <div class="form-group col-md-6">
        <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;" for="rut_cliente" >{{'Rut'}}</label>
        <input  type="text" class="form-control {{$errors->has('rut_cliente')?'is-invalid':''}} " name="rut_cliente" id="rut_cliente" 
        value="{{ isset($cliente->rut_cliente)?$cliente->rut_cliente:old('rut_cliente')}}">
            {!! $errors->first('rut_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        <div class="form-group col-md-6" style="margin-top:1px;">
        <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;"  for="nom_cliente"  >{{'Nombre'}}</label>
        <input  type="text" class="form-control {{$errors->has('nom_cliente')?'is-invalid':''}}" name="nom_cliente" id="nom_cliente"
        value="{{ isset($cliente->nom_cliente)?$cliente->nom_cliente:old('nom_cliente') }}">
            {!! $errors->first('nom_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>


        <div class="form-row" style="margin-top:-20px">
        <div class="form-group col-md-6">
        <label class="col-form-label"  style="position:relative;right:80px;margin-top:7px;" for="apePat_cliente" >{{'Apellido_Paterno'}}</label>
        <input  type="text" class="form-control {{$errors->has('apePat_cliente')?'is-invalid':''}}" name="apePat_cliente" id="apePat_cliente" 
        value="{{ isset($cliente->apePat_cliente)?$cliente->apePat_cliente:old('apePat_cliente') }}">
        {!! $errors->first('apePat_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        <div class="form-group col-md-6" style="margin-top:1px;">
        <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;" for="apeMat_cliente"  >{{'Apellido_Materno'}}</label>
        <input  type="text" class="form-control {{$errors->has('apeMat_cliente')?'is-invalid':''}}" name="apeMat_cliente" id="apeMat_cliente" 
        value="{{ isset($cliente->apeMat_cliente)?$cliente->apeMat_cliente:old('apeMat_cliente') }}">
          {!! $errors->first('apeMat_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
       
        <div class="form-row" style="margin-top:-20px">
        <div class="form-group col-md-6">
        <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;"for="dire_cliente" >{{'Direccion'}}</label>
        <input  type="text" class="form-control {{$errors->has('dire_cliente')?'is-invalid':''}}"name="dire_cliente" id="dire_cliente" 
        value="{{ isset($cliente->dire_cliente)?$cliente->dire_cliente:old('dire_cliente')}}">
        {!! $errors->first('dire_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        <div class="form-group col-md-6" style="margin-top:1px;">
        <label class="col-form-label"style="position:relative;right:80px;margin-top:7px;" for="ciudad_cliente"  >{{'Ciudad'}}</label>
        <input list="ciudad_cliente" class="form-control" name="ciudad_cliente" >
        {!! $errors->first('ciudad_cliente','<div class="invalid-feedback">:message</div>')!!}
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
        </div>
        </div>

        <div class="form-row" style="margin-top:-20px">
        <div class="form-group col-md-6">
        <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;" for="telefono_cliente" >{{'Telefono'}}</label>
        <input  type="text" class="form-control {{$errors->has('telefono_cliente')?'is-invalid':''}}" name="telefono_cliente" id="telefono_cliente" 
         value="{{ isset($cliente->telefono_cliente)?$cliente->telefono_cliente:old('telefono_cliente')}}">
         {!! $errors->first('telefono_cliente','<div class="invalid-feedback">:message</div>')!!}
         </div>
        <div class="form-group col-md-6" style="margin-top:1px;">
        <label class="col-form-label" style="position:relative;right:80px;margin-top:7px;" for="email_cliente" >{{'Email'}}</label>
        <input  type="text" class="form-control {{$errors->has('email_cliente')?'is-invalid':''}}" name="email_cliente" id="email_cliente" 
         value="{{ isset($cliente->email_cliente)?$cliente->email_cliente:old('email_cliente') }}">
         {!! $errors->first('email_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
       <br>
        <div class="form-group row">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="{{ $Modo=='crear' ? 'Registrar Cliente':'Guardar Cambios'}}">
            &nbsp;&nbsp;<a class="btn btn-secondary"  href="{{url()->previous()}}"><i class="fa fa-reply fa-lg">&nbsp;Volver</a></i>
        </div>
    </td>
</tr>
</tbody>
</table>
<br>

    </form>
</div>
