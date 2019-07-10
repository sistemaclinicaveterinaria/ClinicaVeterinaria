<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    body{
        background-image:url("https://3.bp.blogspot.com/-L1Pr_7c0apc/XR1xikm11YI/AAAAAAAABmA/BP3OyHNDLPU3BgAFyzNosuLobd4lRbGQgCK4BGAYYCw/s1600/output-onlinepngtools%2B%25283%2529.png"); 
        background-repeat: no-repeat;
        background-position: center;
        
    }
    </style>
</head>
<body >  
    <img src="https://scontent.fzal1-1.fna.fbcdn.net/v/t1.0-9/44286416_1919846044763632_1258321264771072000_n.jpg?_nc_cat=102&_nc_eui2=AeGU7eD0sKE9JgDDt5fonUYRvJe81C0-ajhr2tfNKZMCpn4ziGoP80P9KtM2e0xFlWIpQTyaLWjvdem6lofeYHSoqb8Ql784DXR-SmOcegm9JQ&_nc_ht=scontent.fzal1-1.fna&oh=2e48fd37dd7471317f7832564800a681&oe=5DBE5C11"  width="18%" height="18%" style=" margin-right:1100px;">
    <div style="position:relative;left:550px;margin-top:-80px">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="Fecha">{{'Fecha:'}}</label>&nbsp;<label for="Fecha">{{$datos['Fecha']}}</label>
    <br><br>
    <label for="Fecha">{{'Control Fecha:'}}</label>&nbsp;<label for="Control_Fecha">{{$datos['Control_Fecha']}}</label>
</div>
<br><br><br>

<script>


</script>
    <label for="Paciente">{{'Paciente : '.$datos['Paciente']}}</label><br><br>
    <label for="Especie">{{'Especie :   '.$datos['Especie']}}</label><br><br>
    <label for="Raza">{{'Raza :'.$datos['Raza']}}</label><br><br>
    <label for="Edad">{{'Edad : '.$datos['Edad']}}</label><br><br>
    <label for="Propietario">{{'Propietario : '.$datos['Propietario']}}</label><br><br>
    <h2>RP.</h2><p>{{$datos['Descripcion']}}</p>

    <div style="position:relative;text-align:center;margin-top:320px">
        <div style="position:relative;right:250px;">
        <label for="">------------------------------</label> 
         <br/>
                 <label for="">Firma</label> </div>
                 <br/>
                 <br/>
                                    <label for="">No se aceptan cambios en la receta</label>   
                                    <br/>
                                    
      <label for="">__________________________________________________________________________________________________________</label> 
       <br/>
        <label for="">PADRE HARTER 341 - FONO 65 2 276969 - CEL: +569 56147724 - PUERTO MONTT</label>     
       <br><br>
       </div>

    
</body>
</html>
{{-- @php --}}
{{-- var_dump($datos['Fecha']); --}}



{{-- @endphp --}}