@extends('layouts.app')

@section('scripts')


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>	
	<link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/moment.min.js') }}" defer></script>
	<script src="{{ asset('js/fullcalendar.min.js') }}" defer></script>
	<script src="{{ asset('js/es.js') }}" defer></script>
	<link href="{{ asset('css/bootstrap-clockpicker.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap-clockpicker.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    
    
	
@endsection

@section('content')
<div class="container">
    <br>
        <div class="row">
            <div class="col"></div>
            <div class="col-11"><br><br><br><div id="CalendarioWeb"></div></div>
            <div class="col-6"></div>
        </div>
    </div>

<script>
  $(document).ready(function(){
  
	 var token = $("meta[name='csrf-token']").attr("content");
	
	 $(document).ready(function(){
        $('#CalendarioWeb').fullCalendar({
            aspectRatio: 2,
            header:{
                left:'today,prev,next', 
                center:'title',
                right:'listDay,listWeek,month,agendaWeek'
            },  
             eventLimit: 4,
                views: {
                listDay: { buttonText: 'ListaDia' },
                listWeek: { buttonText: 'ListaSemana' },
            },
            // Modal con dato ya nuevo
                dayClick:function(date,jsEvent,view){
                $('#btnAgregar').prop("hidden",false);
                $('#btnModificar').prop("hidden",true);
                $('#btnEliminar').prop("hidden",true);

                limpiarFormulario();
                $('#txtFecha').val(date.format());
                $("#ModalEventos").modal();
            }, 
             events:"{{ url('/eventos/show') }}",
              // Modal con dato ya existente
             eventClick:function(calEvent,jsEvent,view){

              $('#btnAgregar').prop("hidden",true);
              $('#btnModificar').prop("hidden",false);
              $('#btnEliminar').prop("hidden",false);

              $('#tituloEvento').html(calEvent.title);
 
			   // Mostrar la información del evento en los inputs
                $('#txtDescripcion').val(calEvent.descripcion);
                $('#txtID').val(calEvent.id);

                $('#txtTitulo').val(calEvent.title);
                $('#txtNM').val(calEvent.nombremascota);
                $('#txtEspecie').val(calEvent.especie);
                $('#txtNC').val(calEvent.nombrecliente);
                $('#txtTelefono').val(calEvent.telefono);
                $('#txtEmail').val(calEvent.email);

                $('#txtColor').val(calEvent.color);
                
                FechaHora= calEvent.start._i.split(" ");
                $('#txtFecha').val(FechaHora[0]);
                $('#txtHora').val(FechaHora[1]);
                $("#ModalEventos").modal();

           }, 
           editable:true, 
           eventDrop:function(calEvent){
                $('#txtID').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);

                $('#txtNM').val(calEvent.nombremascota);
                $('#txtEspecie').val(calEvent.especie);
                $('#txtNC').val(calEvent.nombrecliente);
                $('#txtTelefono').val(calEvent.telefono);
                $('#txtEmail').val(calEvent.email);
                
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);

           

                var fechaHora=calEvent.start.format().split("T");
                $('#txtFecha').val(fechaHora[0]);
				$('#txtHora').val(fechaHora[1]);

                RecolectarDatosGUI('PATCH');
                EnviarInformacion("/"+$('#txtID').val(),NuevoEvento,true);

           }
           
        });
});
var NuevoEvento; 
    
 $('#btnAgregar').click(function(){
   RecolectarDatosGUI('POST');
   EnviarInformacion('',NuevoEvento);
  });
 $('#btnEliminar').click(function(){
     RecolectarDatosGUI('DELETE');
     EnviarInformacion("/"+$('#txtID').val(),NuevoEvento);
  });
 $('#btnModificar').click(function(){
     RecolectarDatosGUI('PATCH');
     EnviarInformacion("/"+$('#txtID').val(),NuevoEvento);
 });


function RecolectarDatosGUI(method){
    NuevoEvento= {
         id:$('#txtID').val(),
         title:$('#txtTitulo').val(), 

         nombremascota:$('#txtNM').val(), 
         especie:$('#txtEspecie').val(), 
         nombrecliente:$('#txtNC').val(), 
         telefono:$('#txtTelefono').val(), 
         email:$('#txtEmail').val(), 

         start:$('#txtFecha').val()+" "+$('#txtHora').val(), 
         color:$('#txtColor').val(),
         descripcion:$('#txtDescripcion').val(),
         textColor:"#FFFFFF", 
         end:$('#txtFecha').val()+" "+$('#txtHora').val(), 
		 '_token':token, 
		 '_method':method
        }; 
    
}
function EnviarInformacion(accion,objEvento,modal){
        $.ajax({
            type:"POST", 
           url:"{{ url('/eventos') }}"+accion,
            data:objEvento, 
            success:function(msg){
				 if(msg){
					$('#CalendarioWeb').fullCalendar('refetchEvents');  
					if(!modal){
						$("#ModalEventos").modal('toggle');
					}
				 }
            }, 
            error:function(){
                alert("Hay un error ..");
            }

        });

}

$('.clockpicker').clockpicker();
		function limpiarFormulario(){
						$('#txtID').val('');
                        $('#txtTitulo').val('');

                        $('#txtNM').val('');
                        $('#txtEspecie').val('');
                        $('#txtNC').val('');
                        $('#txtTelefono').val('');
                        $('#txtEmail').val('');

                        $('#txtHora').val('');
						$('#txtColor').val('');
                        $('#txtDescripcion').val('');
                        $('#tituloEvento').html('Agenda');
                  
		}
}); 
</script>

<!-- Modal(Agregar, m¡Modificar, Eliminar) -->
<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloEvento"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

         
         <input type="hidden" id="txtID" name="txtID">
         <input type="hidden" id="txtFecha" name="txtFecha" />

<!------------------------------------------------------------------------------------------------------------------------->
                                <!--Aqui deberia ir buscador Dropdown-->
<!------------------------------------------------------------------------------------------------------------------------->
          
          <div class="bs-example">
          <!-- Cliente existente -->
          <div class="form-group row">
                    <label class="col-sm-3 col-form-label" ></label>
                    <div class="col-sm-12">
                   <input name="cliente" class="form-control" id="txtclienteviejo" list="listaclientes" value="">Selecciona un cliente...
                   @foreach($clientes as $cliente)
                   <datalist id="listaclientes">
                    <option value="{{$cliente->id_cliente}}">
                   {{$cliente->nom_cliente.' '.$cliente->apePat_cliente.' '.$cliente->apeMat_cliente}}
                   </option>
                            
                   @endforeach
                    </div>
                    </div>
                   <br>
                   <br>
                   </datalist>  



                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Motivo</label>
                    <div class="col-sm-9">
                    <input type="text" id="txtTitulo" class="form-control" placeholder="Motivo de Consulta" >                  
                    </div>
                    </div>

                 <!--   <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Nombre CLiente</label>
                    <div class="col-sm-9">
                   <select name="cliente" id="txtcliente" value="">Seleciona un cliente...
                   @foreach($clientes as $cliente)
                    <option value="{{$cliente->id_cliente}}">
                   {{$cliente->nom_cliente.' '.$cliente->apePat_cliente.' '.$cliente->apeMat_cliente}}
                   </option>           
                   @endforeach
                    </div>
                    </div>
                   </select> -->
                  
                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Nombre Cliente</label>
                    <div class="col-sm-9">
                    <input type="text" id="txtcliente" class="form-control" placeholder="Nombre Cliente" >                 
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Nombre Mascota</label>
                    <div class="col-sm-9">
                    <input type="text" id="txtNM" class="form-control" placeholder="Nombre Mascota" >                 
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Especie</label>
                    <div class="col-sm-9">
                    <input type="text" id="txtEspecie" class="form-control" placeholder="Especie" >                 
                    </div>
                    </div>
              

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Responsable</label>
                    <div class="col-sm-9">
                    <input type="text" id="txtNC" class="form-control" placeholder="Nombre cliente" >                 
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Telefono</label>
                    <div class="col-sm-9">
                    <input type="text" id="txtTelefono" class="form-control" placeholder="Telefono" >                 
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >E-mail</label>
                    <div class="col-sm-9">
                    <input type="text" id="txtEmail" class="form-control" placeholder="Email" >                 
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Hora</label>
                    <div class="col-sm-9 input-group clockpicker" data-autoclose="true">
                    <input type="text" id="txtHora"  class="form-control" />
                    </div>
                    

                    
			</div>
          
            <div class="form-group" >
                    <label >Descripción:</label>
                    <textarea  id="txtDescripcion" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group" >   
                        <label >Color:</label>
                        <input type="color" value="#ff0000"id="txtColor" class="form-control" style="height:36px;">
                </div>
		</div>
        <div class="modal-footer">
		 <button type="button" id="btnAgregar" class="btn btn-success" >Agregar</button>
            <button type="button" id="btnModificar" class="btn btn-success" >Modificar</button>
            <button type="button" id="btnEliminar" class="btn btn-danger" >Borrar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/Select.js') }}" defer></script>
  <!----------------------------------------------------------------------------------------------------------------->

  <!----------------------------------------------------------------------------------------------------------------->
@endsection