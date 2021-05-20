@extends('dashboard._template.layout')
{{ session_start() }}
@if(!$_SESSION['name'] && !$_SESSION['user'])
    {{ route('login') }}
@endif
@section('title', 'Revita - Página')

@section('titlePage', 'Página')

@section('breadCrumbs')
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Página</li>
@endsection

@section('content')
    <p>teste de listagem de Página</p>

@endsection
