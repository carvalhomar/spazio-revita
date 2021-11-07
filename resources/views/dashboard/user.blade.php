@extends('dashboard._template.layout')

@section('title', 'Revita - Usuário')

@push('style')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/spruha/ltr/assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">
@endpush

@section('titlePage', 'Listagem de Usuário')

@section('breadCrumbs')
    <li class="breadcrumb-item active" aria-current="page">Usuário</li>
@endsection

@section('buttons-action')
    <a type="button" href="/user/create" class="btn btn-primary my-2 btn-icon-text" data-url="add">
        <i class="fe fe-plus mr-2"></i> Adicionar
    </a>
@endsection

@section('content')

    <div class="card-body">
        <h4>Listagem de Usuários</h4>

        <div class="row">
            <div class="col-md-12">
                <table id="usertable" class="table table-striped table-bordered text-nowrap dtr-inline">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Usuário</th>
                            <th>E-mail</th>
                            <th>Tipo</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $data): ?>
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->user }}</td>
                                <td>{{ $data->email }}</td>
                                 @if($data->type == "Administrador")
                                    <td><span class="badge badge-primary">{{ $data->type }}</span></td>
                                @else
                                    <td><span class="badge badge-warning">{{ $data->type }}</span></td>
                                @endif

                                <td>
                                    <a data-placement="top" data-toggle="tooltip-primary" title="Alterar" href="/user/edit/{{ $data->id }}" alt="Alterar">
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
    <script src="{{ URL::asset('assets/spruha/ltr/assets/js/modal.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/spruha/ltr/assets/js/tootip.js') }}"></script>
    <script src="{{ URL::asset('assets/js/user/custom.js') }}"></script>
@endpush
