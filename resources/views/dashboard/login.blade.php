<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
{{--    <meta name="description" content="Spruha -  Admin Panel laravel Dashboard Template">--}}
{{--    <meta name="author" content="Spruko Technologies Private Limited">--}}
{{--    <meta name="keywords" content="admin laravel template, template laravel admin, laravel css template, best admin template for laravel, laravel blade admin template, template admin laravel, laravel admin template bootstrap 4, laravel bootstrap 4 admin template, laravel admin bootstrap 4, admin template bootstrap 4 laravel, bootstrap 4 laravel admin template, bootstrap 4 admin template laravel, laravel bootstrap 4 template, bootstrap blade template, laravel bootstrap admin template">--}}

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/images/revita.ico') }}">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Title -->
    <title>Spazio Revita</title>

    <!-- Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Login Style -->
    <link href="{{ URL::asset('assets/css/signin.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="text-center">

    <main class="form-signin">
        <div class="msg"></div>
        <form method="post" action="{{ route('login.access') }}">
            @csrf
            <img class="mb-4" src="{{ URL::asset('assets/images/logo-revita.png') }}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Área Restrita</h1>
            <div class="form-floating">
                <input type="text" name="user" id="user" placeholder="usuário"  class="form-control">
                <label for="user">Usuário</label>
            </div>
            <div class="form-floating">
                <input name="password" id="password" placeholder="senha" type="password" class="form-control">
                <label for="password">Senha</label>
            </div>
            <div class="checkbox mb-3">
                &nbsp;
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Acessar</button>
        </form>
    </main>
{{--    <div class="page main-signin-wrapper">--}}

{{--    <!-- Row -->--}}
{{--    <div class="row text-center">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card">--}}
{{--                <div class="row row-sm">--}}
{{--                    <div class="col-lg-6 col-xl-5 text-center bg-primary">--}}
{{--                        <div class="mt-5 pt-4 p-2 pos-absolute">--}}
{{--                            <img src="https://laravel.spruko.com/spruha/ltr/assets/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo">--}}
{{--                            <h1 style="color: #FFF;">Spazio Revitá</h1>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                            <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class="ht-100 mb-0" alt="user">--}}
{{--                            <h5 class="mt-4 text-white">Cadastre para acessar</h5>--}}
{{--                            <span class="tx-13 mb-5 mt-xl-0">Entre em contato com o administrador do sistema</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="card-body mt-2 mb-2">--}}
{{--                                    <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                    <div class="msg"></div>--}}
{{--                                    <form method="post" class=" " action="{{ route('login.access') }}">--}}
{{--                                        @csrf--}}
{{--                                        <h5 class="mb-2">Acesso ao painel de controle</h5>--}}
{{--                                        <p class="mb-4 text-muted tx-13 ml-0 text-left">Acesso somente para usuários cadastrados</p>--}}
{{--                                        <div class="form-floating mb-3">--}}
{{--                                            <input class="form-control" name="user" id="user" placeholder="usuário" type="text">--}}
{{--                                            <label for="user" class="form-label">Usuário</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-floating mb-3">--}}
{{--                                            <input class="form-control" name="password" id="password" placeholder="senha" type="password">--}}
{{--                                            <label for="password" class="form-label">Senha</label>--}}
{{--                                        </div>--}}
{{--                                        <button type="submit" class="btn btn-main-primary btn-block">Entrar</button>--}}
{{--                                    </form>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Row -->--}}

{{--</div>--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/login/custom.js') }}"></script>
</body>

</html>
