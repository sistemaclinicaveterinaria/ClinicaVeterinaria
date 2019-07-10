<div class="bs-example">

    <h1 class="border-bottom pb-3 mb-4">Formulario</h1>

    <input type="hidden" name="consulta_id" value="{{$Modo=='crear' ? $id:$consulta->mascota_id}}" type="text">
        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Nombre">{{'Nombre'}}</label>
        <div class="col-sm-9">
        <input  class="form-control {{$errors->has('Nombre')?'is-invalid':''}}"  name="Nombre" id="Nombre" 
        value="{{ isset($documento->Nombre)?$documento->Nombre:old('Nombre') }}">
        {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
       
        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Archivo">{{'Archivo'}}</label>
        <div class="col-sm-9">

        @if(isset($documento->Archivo))
        <br/>
         <a href="{{ asset('storage').'/'.$documento->Archivo}}"></a>
        <br>
        @endif
        <input   type="file" name="Archivo" id="Archivo" value="{{ isset($documento-> Archivo)?$documento->Archivo:'' }}" > 
       {{-- <!--codigo paginacion {!! $errors->first('Archivo','<div class="invalid-feedback">:message</div>')!!}--> --}}
       </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                
            <input class="btn btn-primary"  type="submit" target="_blank" value="{{ $Modo=='crear' ? 'Adjuntar Documento':'Editar Documento' }}">
            <a class="btn btn-secondary" href="{{URL::previous()}}"><i class="fa fa-reply fa-lg">&nbsp;Cancelar</a></i>
         </div>
    </div>
</div>
