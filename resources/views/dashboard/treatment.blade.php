@extends('dashboard._template.layout')

@section('title', 'Revita - Tratamento')

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
    <li class="breadcrumb-item active" aria-current="page">Tratamento</li>
    <li class="breadcrumb-item active" aria-current="page">Listagem</li>
@endsection

@section('buttons-action')
        <a type="button" href="/content/treatment/create" class="btn btn-primary my-2 btn-icon-text" data-url="add">
            <i class="fe fe-plus mr-2"></i> Adicionar
        </a>
@endsection

@section('content')

    <div class="card-body">
        <h4>Tratamento</h4>
        <div class="row">
            <div class="col-md-12">
                <table id="pagetable" class="table table-striped table-bordered text-nowrap dtr-inline">
                    <thead>
                    <tr>
                        <th>Título</th>
                        <th>Link</th>
                        <th>Visível</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($page as $data): ?>
                   
                    <tr>
                        <td>{{ $data->title }}</td>
                        <td><a href="{{ URL::to('') }}/treatment/article/{{ $data->id }}/{{ $data->url }}">{{ URL::to('') }}/treatment/article/{{ $data->id }}/{{ $data->url }}</a></td>
                        <td width="10%" align="center">
                            @if ($data->visible === 1)
                                <i class="fe fe-eye mr-2"></i>
                            @else
                                <i class="fe fe-eye-off mr-2"></i>
                            @endif    
                        </td>
                        <td width="10%" align="center">
                            <a data-placement="top" data-toggle="tooltip-primary" title="Alterar" href="/content/treatment/edit/{{ $data->id }}" alt="Alterar">
                                <i class="fe fe-edit mr-2"></i>
                            </a>
                            @csrf
                            <a data-placement="top" data-toggle="tooltip-primary" title="Remover" href="#" onclick="remove(this)" data-id="{{ $data->id }}" alt="Remover">
                                <i class="fe fe-trash mr-2"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection

@push('scripts')
    <script src="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ URL::asset('assets/spruha/ltr/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/js/tootip.js') }}"></script>
    <script src="{{ URL::asset('assets/js/content/treatment/custom.js') }}"></script>
@endpush
