<div class="bs-example" >
    <form  class="needs-validation" action="recetar" method="post" novalidate>
    <img src="https://scontent.fzal1-1.fna.fbcdn.net/v/t1.0-9/44286416_1919846044763632_1258321264771072000_n.jpg?_nc_cat=102&_nc_eui2=AeGU7eD0sKE9JgDDt5fonUYRvJe81C0-ajhr2tfNKZMCpn4ziGoP80P9KtM2e0xFlWIpQTyaLWjvdem6lofeYHSoqb8Ql784DXR-SmOcegm9JQ&_nc_ht=scontent.fzal1-1.fna&oh=2e48fd37dd7471317f7832564800a681&oe=5DBE5C11"  width="18%" height="18%" style=" margin-right:1100px;">
    <input type="hidden" name="consulta_id" value="{{$id}}" type="text">

        <div class="form-group row" style="position:relative;left:450px;margin-top:-110px">
        <label  class="col-sm-2 col-form-label" for="Fecha">{{'Fecha'}}</label>
        <div class="col-sm-3">
        <input  class="form-control {{$errors->has('Fecha')?'is-invalid':''}}" type="date" name="Fecha" id="Fecha" 
        value="{{ isset($recetario->Fecha)?$recetario->Fecha:old('Fecha')}}">
        {!! $errors->first('Fecha','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row" style="position:relative;left:450px;">
        <label class="col-sm-2 col-form-label"  for="Control_Fecha">{{'Control_Fecha'}}</label>
        <div class="col-sm-3">
        <input  class="form-control {{$errors->has('Control_Fecha')?'is-invalid':''}}"  type="date" name="Control_Fecha" id="Control_Fecha" 
        value="{{ isset($recetario->Control_Fecha)?$recetario->Control_Fecha:old('Control_Fecha') }}">
        {!! $errors->first('Control_Fecha','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
<br><br>

@foreach($data as $row)
        <div class="form-group row">
        <label class="col-sm-2 col-form-label" style="font-weight:bold;" for="Paciente">Paciente</label>
        <div class="col-sm-3">
            <input style="font-weight:bold;height:30px;" class="form-control" type="text" name="Paciente" id="Paciente"   
            value="{{ isset($row->Nombre)?$row->Nombre:old('Paciente')}}" readonly>
            {!! $errors->first('Paciente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row" style="position:relative;margin-top:-15px;">
        <label class="col-sm-2 col-form-label" for="Especie">Especie</label>
        <div class="col-sm-3">
            <input style="font-weight:bold;height:30px;" class="form-control" type="text" name="Especie" id="Especie" 
            value="{{ isset($row->Especie)?$row->Especie:old('Especie')}}" readonly>
            {!! $errors->first('Especie','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row" style="position:relative;margin-top:-15px;">
        <label class="col-sm-2 col-form-label" for="Raza">Raza</label>
        <div class="col-sm-3">
            <input style="font-weight:bold;height:30px;" class="form-control" type="text" name="Raza" id="Raza" 
            value="{{ isset($row->Raza)?$row->Raza:old('Raza')}}" readonly>
            {!! $errors->first('Raza','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row" style="position:relative;margin-top:-15px;">
        <label class="col-sm-2 col-form-label" for="Edad">Edad</label>
        <div class="col-sm-3">
        <input style="font-weight:bold;height:30px;" class="form-control" type="text" name="Edad" id="Edad" 
        value="">
        </div>
        </div>

        <div class="form-group row" style="position:relative;margin-top:-15px;">
        <label class="col-sm-2 col-form-label" for="Propietario">Propietario</label>
        <div class="col-sm-3">
            <input style="font-weight:bold;height:50px;" class="form-control" type="text" name="Propietario" id="Propietario" 
            value="{{ isset($row->nom_cliente)?$row->nom_cliente .$row->apePat_cliente .$row->apeMat_cliente:old('Propietario')}}" readonly>
            {!! $errors->first('Propietario','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
        <br>
@endforeach
        <div class="form-group row" style="position:relative;margin-top:-15px;">
        <label class="col-sm-2 col-form-label" for="Descripcion">{{'Descripcion'}}</label>
        <div class="col-sm-3">
        <textarea style="height:200px;width:600px;" class="form-control {{$errors->has('Descripcion')?'is-invalid':''}}"  name="Descripcion" id="Descripcion" 
        value="{{ isset($recetario->Descripcion)?$recetario->Descripcion:old('Descripcion')}}"></textarea>
        {!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
        
        <br/><br/><br/><br/><br/>
        <div>
 ------------------------------
  <br/>
          Firma
          <br/>
          <br/>
                             No se aceptan cambios en la receta
                             <br/>
                             
__________________________________________________________________________________________________________
<br/>
  PADRE HARTER 341 - FONO 65 2 276969 - CEL: +569 56147724 - PUERTO MONTT    
<br><br>
</div>
        <div class="form-group row" style="position;align:center">
            <div class="col-sm-9 offset-sm-3">
            <input class="btn btn-primary" style="position:relative;right:100px;"  target="_blank" type="submit" value="{{ $Modo=='crear' ? 'Confirmar':'Editar' }}">
            <a class="btn btn-secondary" style="position:relative;right:100px;" href="{{ url()->previous()}}"><i class="fa fa-reply fa-lg">&nbsp;Volver</a></i>
            </div>
        </div>
        <br>
    </form>

</div>
