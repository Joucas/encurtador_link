@extends('site.layouts.basico')

@section('titulo', 'Página de Registro')

@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Recover</h1>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">

                @component('site.layouts._components.form_recover')
                @endcomponent()

            </div>
        </div>
    </div>
    

@endsection