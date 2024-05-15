@extends('site.layouts.basico')

@section('titulo', 'Página Principal')

@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Principal</h1>

    @component('site.layouts._components.form_contato')
    @endcomponent()
@endsection