@extends('site.layouts.basico')

@section('titulo', 'Página Principal')

@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Index</h1>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                @component('site.layouts._components.form_contato')
                @endcomponent()
            </div>
        </div>
    </div>
@endsection