@extends('dashboard._template.layout')

@section('title', 'Revita - Principal')

@push('style')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/spruha/ltr/assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">
@endpush

@section('titlePage', 'Controle de conteúdo')

@section('breadCrumbs')
    <li class="breadcrumb-item" aria-current="page"><a href="/content">Conteúdo</a></li>
    <li class="breadcrumb-item active" aria-current="page">Principal</li>
    <li class="breadcrumb-item active" aria-current="page">Listagem</li>
@endsection

@section('buttons-action')
    {{--    <a type="button" href="/user/create" class="btn btn-primary my-2 btn-icon-text" data-url="add">--}}
    {{--        <i class="fe fe-plus mr-2"></i> Adicionar--}}
    {{--    </a>--}}
@endsection

@section('content')

    <div class="card-body">
        <h4>Banner Principal</h4>

    </div>

@endsection

@push('scripts')
    <script src="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ URL::asset('assets/spruha/ltr/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/js/tootip.js') }}"></script>
    <script src="{{ URL::asset('assets/js/content/banner/custom.js') }}"></script>
@endpush
