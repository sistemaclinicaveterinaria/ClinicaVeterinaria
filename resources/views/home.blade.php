@extends('layouts.app')

@section('scripts')
    
	
@endsection

@section('content')  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <div class="card" style="width: 50rem;">
                <div class="card-header">PAGINA INICIAL</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>¡Bienvenido al Sistema de la clinica!
                    Estamos trabajando para usted para ofrecerle
                    la mejor experiencia.</h1>
                    <img src="logos/work.png">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
