@extends('layouts.app')

@section('content')

<div class="container">

<div class="cont">
<form action="{{url('/especialistas')}}" class="form-horizontal" method="post" >

{{csrf_field()}}

@include('especialistas.form',['Modo'=>'crear'])


</form>
</div>
</td>
    </tr>
  </tbody>
</table>

</div>
@endsection
