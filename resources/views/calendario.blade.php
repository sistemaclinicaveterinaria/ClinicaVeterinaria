
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>
    <!--Full Calendar-->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  	<div class="container">
  		<div class="row">
  		<div class="col"></div>
  		<div class="col-7"><div id="CalendarioWeb"></div></div>
  		<div class="col"></div>
  	</div>
</div>
  	<script>
  		$(document).ready(function(){
  			$('#CalendarioWeb').fullCalendar({
  				header:{
  					left:'today,prev,next',
  					center:'title',
  					right:'month,basicWeek,basicDay,agendaWeek,agendaDay'
  				},

  				dayClick:function(date,jsEvent,view){
              alert("No Hay reservas");
              $("#exampleModal").modal();

  				},

          events:[

          {
            
            title:'Disponible',
            descripcion:'esta hora esta disponible',
            start:'2019-05-06T12:30:00',
            allDay:false,
            color:"#1BD529",
            textColor:"#000000"
          },

          {
            title:'Reservada',
            descripcion:"se van a desparacitar gatitos",
            start:'2019-05-10T12:30:00',
            end:'2019-05-12',
            color:"yellow",
            textColor:"black"
          },

          {
            title:'Cancelada',
            descripcion:"Se cancelo esta hora",
            start:'2019-05-21T12:30:00',
            allDay:false,
            color:"#FE4500",
            textColor:"#000000"
          }


          ],
          eventClick:function(calEvent,jsEvent,view){
            $('#tituloEvento').html(calEvent.title);
             $('#descripcionEvento').html(calEvent.descripcion);
             $("#exampleModal").modal();


          }


  			});
  		});
  		
  	</script>

  	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloEvento">Ingrese nueva reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<div id="descripcionEvento"></div>
        

         <form  action="/action_page.php">

                            Titulo:<br>
                <input class="box-blue" type="text" name="firstname" value="">
                            <br>
                            Hora:<br>
                    <input class="box-blue" type="text" name="firstname" value="">
                            <br>
                            Descripcion:<br>
                    <input class="box-blue" type="text" name="firstname" value="">
                            <br>
                            Color:<br>
                    <input class="box-blue" type="text" name="firstname" value="">
                            <br>
                                <br><br>
                  
                    </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-success">Modificar</button>
        <button type="button" class="btn btn-danger">Borrar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    
      </div>
    </div>
  </div>
</div>



  </body>
</html>
