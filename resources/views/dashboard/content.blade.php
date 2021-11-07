@extends('dashboard._template.layout')

@section('title', 'Revita - Usuário')

@push('style')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/spruha/ltr/assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">
@endpush

@section('titlePage', 'Controle de conteúdo')

@section('breadCrumbs')
    <li class="breadcrumb-item active" aria-current="page">Conteúdo</li>
@endsection

@section('buttons-action')
{{--    <a type="button" href="/user/create" class="btn btn-primary my-2 btn-icon-text" data-url="add">--}}
{{--        <i class="fe fe-plus mr-2"></i> Adicionar--}}
{{--    </a>--}}
@endsection

@section('content')

    <div class="card-body">
        <h4>Controle de conteúdo</h4>
        <div class="row">
            <div class="col-md-3">
{{--                <a href="/content/principal">--}}
&nbsp;
{{--                    <h3>Banner Principal</h3>--}}
{{--                </a>--}}
            </div>
            <div class="col-md-3 text-center">
                <a href="/content/treatment">
                    <h3>Tratamento</h3>
                    <img src="{{ URL::asset('assets/images/tratamento.png') }}" width="40%" />
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="/content/health">
                    <h3>Saúde</h3>
                    <img src="{{ URL::asset('assets/images/saude.png') }}" width="40%"/>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="/content/blog">
                    <h3>Blog</h3>
                    <img src="{{ URL::asset('assets/images/blog.png') }}" width="40%"/>
                </a>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/js/modal.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/js/tootip.js') }}"></script>
    <script src="{{ URL::asset('assets/js/content/custom.js') }}"></script>
@endpush
