
@extends('layouts.app')

@section('content')

  
        <br/>
        <br/>
        <div class="container">
        <div class="cont">
        <header>
        <div class="titulo">   
        <h3>Detalle Perfil</h3>
        </header>

                    <ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabJust" role="tablist">
            <li class="nav-item" style="background-color:#E6EBED">
                <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                aria-selected="true"> <i class="fa fa-paw fa-lg" aria-hidden="true">&nbsp;Mascota</a></i>
            </li>
            <li class="nav-item"  style="background-color:#E6EBED">
                <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                aria-selected="false"><i class="fa fa-user-circle-o fa-lg " aria-hidden="true">&nbsp;Dueño</a></i>
            </li>
            </ul>
            <div class="tab-content card pt-5" id="myTabContentJust">
            <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                 <!---------------------------------------Seccion Mascota---------------------------------------------------------->

                    <h1  style="margin-top:-30px;">Mascotas de {{$clientes->nom_cliente}} {{$clientes->apePat_cliente}} </h1>                

                    <table  id="example" style="top:90px;left:45px;" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre Mascota</th>
                                <th>Genero</th>
                                <th>Fecha Nacimiento</th>
                                <th>Especie</th>
                                <th>Raza</th>
                                <th>Color</th>
                                <th>Microchip</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                            @foreach($data as $row)
                            <td>{{$row->id}}</td>
                            <td>{{ $row->Nombre}}</td>
                            <td>{{ $row->Genero}}</td>
                            <td>{{ $row->Fecha_Nacimiento}}</td>
                            <td>{{ $row->Especie}}</td>
                            <td>{{ $row->Raza}}</td>
                            <td>{{ $row->Color}}</td>
                            <td>{{ $row->Microchip}}</td>
                            <td>
                                
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{url('/Historial_consultas/'.$row->id) }}">
                            <button style="border-radius:50px;" class="btn btn-primary" display: inline-block; type="submit" ><i class="fa fa-medkit" aria-hidden="true">&nbsp;Historial</button></i>
                            </a>
                            <a href="{{url ('/Mascotas/'.$row->id.'/edit') }}">
                            <button style="border-radius:50px;" class="btn btn-success" display: inline-block; type="submit" ><i class="fa fa-pencil" aria-hidden="true">Editar</button></i>
                            </a> 
                            <form id="formt3" method="post" action="{{ url ('/Mascotas/'.$row->id) }}" style="display:inline">
                            {{csrf_field()}}
                            {{ method_field ('DELETE')}}
                            <button style="border-radius:50px;" class="btn btn-danger" type="submit" onclick="return confirm('¿ Desea borrar registro ?');"><i class="fa fa-trash-o" aria-hidden="true">&nbsp;Borrar</button></i>
                            </form>
                            </div>
                        
                                                       
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <th>#</th>
                                <th>Nombre Mascota</th>
                                <th>Genero</th>
                                <th>Fecha Nacimiento</th>
                                <th>Especie</th>
                                <th>Raza</th>
                                <th>Color</th>
                                <th>Microchip</th>
                                <th>Opciones</th>
                        </tfoot>
                    </table>
                    <br>
                    <br>
                    <div style="position:relative; left:425px; top:-540px;" >
                    <a href="{{ url('/Mascotas/create/'.$row->cliente_id) }}" class="btn btn-primary btn-lg" style="float: center"><i class="fa fa-paw " aria-hidden="true" >&nbsp;Nueva Mascota</a></i>
                    </div>

                <!-------------------------------------------Fin Mascota------------------------------------------------------------------------>
                
                <!-------------------------------------------Seccion Cliente------------------------------------------------------------------->
            </div>
            <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                            @foreach($datacli as $cliente)
                            
                            <form id="formt">
                                    <table class="tablas" style="width:950px;position:relative;right:80px;margin-top:-40px;"  >
                                            <thead>
                                          
                                                <th scope="col">Datos {{$cliente->nom_cliente}} {{$cliente->apePat_cliente}}</th>
                      
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td height="300"  style="background-color:white">
                                                <div class="main-container" style="margin-top:10px">  
                                               <img src="https://image.flaticon.com/icons/png/512/44/44948.png" alt="" margin width="250" height="250">
                                              </div>
                                                </td>
                                              </td>
                                              <td  style="background-color:white">
                                                <div style="position:relative;left:20px;">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label"  for="rut_cliente" >{{'Rut'}}</label>
                            <div class="col-sm-8">
                            <input  type="text" class="form-control {{$errors->has('rut_cliente')?'is-invalid':''}} " name="rut_cliente" id="rut_cliente" disabled
                            value="{{ isset($cliente->rut_cliente)?$cliente->rut_cliente:old('rut_cliente')}}">
                                {!! $errors->first('rut_cliente','<div class="invalid-feedback">:message</div>')!!}
                            </div>
                            </div>


                            <div class="form-group row" style="margin-top:-10px;">
                            <label class="col-sm-3 col-form-label"  for="nom_cliente"  >{{'Nombre'}}</label>
                            <div class="col-sm-8">
                            <input  type="text" class="form-control {{$errors->has('nom_cliente')?'is-invalid':''}}" name="nom_cliente" id="nom_cliente" disabled
                            value="{{ $cliente->nom_cliente}} {{ $cliente->apePat_cliente}} {{ $cliente->apeMat_cliente}}">
                            </div>
                            </div>
                        
                            <div class="form-group row" style="margin-top:-10px;">
                            <label class="col-sm-3 col-form-label" for="dire_cliente" >{{'Direccion'}}</label>
                            <div class="col-sm-8">
                            <input  type="text" class="form-control {{$errors->has('dire_cliente')?'is-invalid':''}}"name="dire_cliente" id="dire_cliente" disabled
                            value="{{ isset($cliente->dire_cliente)?$cliente->dire_cliente:old('dire_cliente')}}">
                            {!! $errors->first('dire_cliente','<div class="invalid-feedback">:message</div>')!!}
                            </div>
                            </div>

                            <div class="form-group row" style="margin-top:-10px;">
                            <label class="col-sm-3 col-form-label" for="ciudad_cliente"  >{{'Ciudad'}}</label>
                            <div class="col-sm-8">
                            <input  type="text" class="form-control {{$errors->has('ciudad_cliente')?'is-invalid':''}}"name="ciudad_cliente" id="ciudad_cliente" disabled
                            value="{{ isset($cliente->ciudad_cliente)?$cliente->ciudad_cliente:old('ciudad_cliente')}}">
                            {!! $errors->first('ciudad_cliente','<div class="invalid-feedback">:message</div>')!!}
                            </div>
                            </div>

                            <div class="form-group row" style="margin-top:-10px;">
                            <label class="col-sm-3 col-form-label"  for="telefono_cliente" >{{'Telefono'}}</label>
                            <div class="col-sm-8">
                            <input  type="text" class="form-control {{$errors->has('telefono_cliente')?'is-invalid':''}}" name="telefono_cliente" id="telefono_cliente" disabled
                            value="{{ isset($cliente->telefono_cliente)?$cliente->telefono_cliente:old('telefono_cliente')}}">
                            {!! $errors->first('telefono_cliente','<div class="invalid-feedback">:message</div>')!!}
                            </div>
                            </div>

                            <div class="form-group row" style="margin-top:-10px;">
                            <label class="col-sm-3 col-form-label" for="email_cliente" >{{'Email'}}</label>
                            <div class="col-sm-8">
                            <input  type="text" class="form-control {{$errors->has('email_cliente')?'is-invalid':''}}" name="email_cliente" id="email_cliente" disabled
                            value="{{ isset($cliente->email_cliente)?$cliente->email_cliente:old('email_cliente') }}">
                            {!! $errors->first('email_cliente','<div class="invalid-feedback">:message</div>')!!}
                            </div>
                            </div>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                                        </form>
                                        <br>
                                        <div>
                                                   
                                                                                                
                                    <a href="{{url ('/Clientes/'.$cliente->id_cliente.'/edit') }}">
                                        <button size="20" class="btn btn-success" onSubmit="window.location.reload()"  type="submit" ><i class="fa fa-pencil fa-lg" aria-hidden="true">&nbsp;Editar</button></i>
                                    </a>  
                                    <form id="formt" method="post" action="{{ url ('/Clientes/'.$cliente->id_cliente) }}" style="display:inline">
                                        {{csrf_field()}}
                                        {{ method_field ('DELETE')}}
                                        
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿ Desea borrar registro? Se borraran todas las mascotas asociadas');"><i class="fa fa-trash-o fa-lg" aria-hidden="true">&nbsp;Borrar</button></i>
                                        
                                    </form>
                                    
                                </div>
                            
                            
                            @endforeach
                
                        <br>
                        <br>           

        


         </div>
        </div>
        </div>
        </div>
                           <!--
                            <script>
                            function archiveFunction() {
                            event.preventDefault(); // prevent form submit
                            var form = event.target.form; // storing the form
                                    swal({
                            title: "¿Esta seguro?",
                            text: "Si realiza esta acción, no sera posible volver a recuperar el registro ni los datos asociados",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "¡Si, Borrar!",
                            cancelButtonText: "¡No, Cancelar!",
                            closeOnConfirm: false,
                            closeOnCancel: false
                            },
                            function(isConfirm){
                            if (isConfirm) {
                                form.submit();          // submitting the form when user press yes
                            } else {
                                swal("Cancelado", "Registro a salvo :)", "error");
                            }
                            });
                            }
                        
                        
                        </script>-->

                    <!--js del datatable-->

                        <script>
                        $(document).ready(function() {
                        var table = $('#example').DataTable({
                            "language": {searchPlaceholder: "Nombre de mascota, Especie, Raza...",
                                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"},
                            "pagingType": "full_numbers",
                            "sDom": '<"top"f>rt<"bottom"p><"bottom"i>',
                            
                        });  
                        });

                        </script>
@endsection
