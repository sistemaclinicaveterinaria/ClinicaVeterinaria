    //$(document).ready(function()
    $(document).ready(function($){
        $('#IdRegion').on('change',function(){
            var region_id = $(this).val();
            if($.trim(region_id)!= ''){
                $('#IdCiudad').empty();
                $('#IdCiudad').append("<option value=''> Selecciona una Ciudad </option>");
                $.get('/clientes/select',{region_id: region_id }, function(ciudades){
                    if($.trim(ciudades)!= '') {
                        $.each(ciudades, function (index, value) {
                            $('#IdCiudad').append("<option value='" + index + "'>" + value + "</option>");
                        });
                    }
                });
            }
        });
    });
    ///////////////////////////////////////////////////////
    $("#txtclienteviejo").change(function(event){
        $.get("cli/"+event.target.value+"", function(res, cli){
           $("#txtEmail").val(res[0].email_cliente);
           $("#txtTelefono").val(res[0].telefono_cliente);
           $("#txtcliente").val(res[0].nom_cliente);
        });
    });
  
    $("txtclienteviejo").val(function(idx, val) {
        $(this).siblings('[value="'+ val +'"]').remove();
      });