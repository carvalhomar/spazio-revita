@section('title', 'Revita - Dashboard')

@section('titlePage', 'Dashboard')

@section('breadCrumbs')
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Teste</li>
@endsection

@section('content')
    <div class="card-body">


        Texto de teste !
    </div>
@endsection

@push('scripts')
    <script src="{{ URL::asset('assets/js/dashboard/page/dashboard/custom.js') }}"></script>
@endpush
