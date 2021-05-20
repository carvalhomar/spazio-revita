@extends('dashboard._template.layout')
{{ session_start() }}
@if(!$_SESSION['name'] && !$_SESSION['user'])
    {{ route('login') }}
@endif

@section('title', 'Revita - Usuário')

@push('style')
    <link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('titlePage', 'Formulário de Usuário')

@section('breadCrumbs')
    <li class="breadcrumb-item"><a href="/user">Usuário</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
@endsection

@section('content')
<div class="card custom-card">
    <div class="card-body">
        <div class="row col-md-12">
            <h6 class="main-content-label mb-1"> </h6>
        </div><br/>
        <form id="formUser" method="post" action="" data-parsley-validate novalidate>

            <div class="msg">

            </div>
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Nome: <span class="tx-danger">*</span></label>
                        <input type="text" class="form-control state-valid" name="name" id="name" placeholder="Nome do usuário" required>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">E-mail: <span class="tx-danger">*</span></label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="E-mail do usuário" required>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Usuário: <span class="tx-danger">*</span></label>
                        <input type="text" class="form-control" name="user" id="user" placeholder="Usuário para login" required>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Senha: <span class="tx-danger">*</span></label>
                        <input type="password" class="form-control" minlength="5" name="password" id="password" placeholder="senha" required>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Rep. Senha: <span class="tx-danger">*</span></label>
                        <input type="password" class="form-control" name="confirm" id="confirm" placeholder="confirmaçao de senha" required>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Tipo de Usuário: <span class="tx-danger">*</span></label>
                        <select class="form-control " id="usertype" name="usertype" required>
                            <option value="">-Selecione-</option>
                        </select>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <input type="submit" id="btnsave" value="Gravar" class="btn ripple btn-main-primary pd-x-20">
                    &nbsp;
                    <input type="reset" name="btnReset" value="Cancelar" class="btn btn-default">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="{{ URL::asset('assets/js/user/form.js?v=5') }}"></script>
@endpush
