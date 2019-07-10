<div class="bs-example">

    <h1 class="border-bottom pb-3 mb-4">Formulario</h1>

    <form class="needs-validation" action="/examples/actions/confirmation.php" method="post" novalidate>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Fecha_Defuncion">{{'Fecha_Defuncion'}}</label>
        <div class="col-sm-9">
        <input  class="form-control {{$errors->has('Fecha_Defuncion')?'is-invalid':''}}" type="date" name="Fecha_Defuncion" id="Fecha_Defuncion" 
        value="{{ isset($rip->Fecha_Defuncion)?$rip->Fecha_Defuncion:old('Fecha_Defuncion')}}">
        {!! $errors->first('Fecha_Defuncion','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Motivo">{{'Motivo'}}</label>
        <div class="col-sm-9">
        <input  class="form-control {{$errors->has('Motivo')?'is-invalid':''}}"name="Motivo" id="Motivo" 
        value="{{ isset($rip->Motivo)?$rip->Motivo:old('Motivo')}}">
        {!! $errors->first('Motivo','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
       
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                
            <input class="btn btn-primary"  type="submit" value="{{ $Modo=='Registrar' ? 'Agregar':'Aceptar' }}">
            <a class="btn btn-secondary" href="{{ url('rips') }}"><i class="fa fa-reply fa-lg">&nbsp;Volver</a></i>
            </div>
        </div>
    </form>
</div>
