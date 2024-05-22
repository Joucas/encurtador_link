@extends('site.layouts.basico')

@section('titulo', 'Página de Login')

@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Login</h1>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">

                @component('site.layouts._components.form_login')
                @endcomponent()

            </div>
        </div>
    </div>


@endsection