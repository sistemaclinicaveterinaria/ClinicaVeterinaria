@extends('layouts.app')

@section('content')
<div class="container">
<div class="cont">
<form action="{{url('/Cli_Mas')}}" class="form-horizontal" method="post" >
{{csrf_field()}}

@include('Cli_Mas.form',['Modo'=>'crear'])

</form>
</div>
</td>
    </tr>
  </tbody>
</table>

</div>
</div>
@endsection