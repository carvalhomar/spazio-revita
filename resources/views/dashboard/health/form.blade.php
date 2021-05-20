@extends('dashboard._template.layout')
{{ session_start() }}
@if(!$_SESSION['name'] && !$_SESSION['user'])
    {{ route('login') }}
@endif

@section('title', 'Revita - Saúde')

@push('style')
    <link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('titlePage', 'Formulário de Conteúdo de Saúde')

@section('breadCrumbs')
    <li class="breadcrumb-item" aria-current="page"><a href="/content">Conteúdo</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="/content/health">Saúde</a></li>
    <li class="breadcrumb-item active" aria-current="page"></li>
@endsection

@section('content')
    <div class="card custom-card">
        <div class="card-body">
            <div class="row col-md-12">
                <h6 class="main-content-label mb-1"> </h6>
            </div><br/>
            <form id="formHealth" method="post" action="" data-parsley-validate novalidate>
                <div class="msg">
                </div>
                @csrf
                <input type="hidden" name="pageType" id="pageType" value="2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Título: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control state-valid" name="title" id="title" placeholder="Título do tratamente" required>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Conteúdo: <span class="tx-danger">*</span></label>
                            <textarea class="form-control" name="content" id="content" placeholder="Conteúdo de tratamento" rows="20" required></textarea>

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
    <script src="{{ URL::asset('assets/js/content/health/form.js?v=123') }}"></script>
@endpush
