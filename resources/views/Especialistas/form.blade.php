
    <h1 class="border-bottom pb-3 mb-4">Formulario</h1>

    <form class="needs-validation" method="post" novalidate>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label"  for="rut_espe" >{{'Rut'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('rut_espe')?'is-invalid':''}} " name="rut_espe" id="rut_espe" 
            value="{{ isset($especialista->rut_espe)?$especialista->rut_espe:old('rut_espe')}}">
            {!! $errors->first('rut_espe','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label"  for="nom_espe" >{{'Nombre'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('nom_espe')?'is-invalid':''}}" name="nom_espe" id="nom_espe"
        value="{{ isset($especialista->nom_espe)?$especialista->nom_espe:old('nom_espe') }}">
             {!! $errors->first('nom_espe','<div class="invalid-feedback">:message</div>')!!} 
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="apePat_espe"  >{{'Apellido Paterno'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('apePat_espe')?'is-invalid':''}}"name="apePat_espe" id="apePat_espe" 
        value="{{ isset($especialista->apePat_espe)?$especialista->apePat_espe:old('apePat_espe') }}">
            {!! $errors->first('apePat_espe','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="apeMat_espe"  >{{'Apellido Materno'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('apeMat_espe')?'is-invalid':''}}" name="apeMat_espe" id="apeMat_espe" 
        value="{{ isset($especialista->apeMat_espe)?$especialista->apeMat_espe:old('apeMat_espe') }}">

            {!! $errors->first('apeMat_espe','<div class="invalid-feedback">:message</div>')!!} 
        </div>
        </div>
       
        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="email_espe" >{{'Email'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('email_espe')?'is-invalid':''}}" name="email_espe" id="email_espe" 
        value="{{ isset($especialista->email_espe)?$especialista->email_espe:old('email_espe') }}">

            
        {!! $errors->first('email_espe','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="especialidad"  >{{'Especialidad'}}</label>
        <div class="col-sm-9">

        <select name="especialidad" id="especialidad" class="form-control {{$errors->has('especialidad')?'is-invalid':''}}">
            <option value="">-->Seleccione una especialidad</option>
            <option value="Cardiologia">Cardiologia</option>
            <option value="Oftalmologia">Oftalmologia</option>
            <option value="Medicina Alternativa">Medicina Alternativa</option>
            <option value="Medicina Preventiva">Medicina Preventiva</option>
            <option value="Cirugia Ortopedica">Cirugia Ortopedica</option>
            <option value="Radiografia">Radiografia</option>
            <option value="Ecografia">Ecografia</option>
            <option value="Traumatologia">Traumatologia</option>
            <option value="Exoticos">Exoticos</option>
            <option value="Cirugia">Cirugia</option>
            <option value="Cirugia Especializada">Cirugia Especializada</option>
              </select>
              {!! $errors->first('especialidad','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">

            <input type="submit" class="btn btn-primary" value="{{ $Modo=='crear' ? 'Agregar Especialista':'Modificar Especialista'}}">
            <a class="btn btn-secondary" href="{{url('especialistas')}}"><i class="fa fa-reply fa-lg">&nbsp;Volver</a></i>

            </div>
        </div>
    </form>
</div>

