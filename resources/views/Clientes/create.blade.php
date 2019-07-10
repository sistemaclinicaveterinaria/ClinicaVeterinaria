@extends('layouts.app')

@section('content')
<div class="container">
<div class="cont">
<form action="{{url('/Clientes')}}" class="form-horizontal" method="post" >
{{csrf_field()}}

@include('clientes.form',['Modo'=>'crear'])

</form>
</div>
</td>
    </tr>
  </tbody>
</table>

</div>
</div>
@endsection