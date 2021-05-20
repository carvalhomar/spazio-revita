<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
{{--    <meta name="description" content="Spruha -  Admin Panel laravel Dashboard Template">--}}
{{--    <meta name="author" content="Spruko Technologies Private Limited">--}}
{{--    <meta name="keywords" content="admin laravel template, template laravel admin, laravel css template, best admin template for laravel, laravel blade admin template, template admin laravel, laravel admin template bootstrap 4, laravel bootstrap 4 admin template, laravel admin bootstrap 4, admin template bootstrap 4 laravel, bootstrap 4 laravel admin template, bootstrap 4 admin template laravel, laravel bootstrap 4 template, bootstrap blade template, laravel bootstrap admin template">--}}

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/images/revita.ico') }}">

    <!-- Title -->
    <title>Spazio Revita</title>

    <!-- Bootstrap css-->
    <link href="https://laravel.spruko.com/spruha/ltr/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons css-->
    <link href="https://laravel.spruko.com/spruha/ltr/assets/plugins/web-fonts/icons.css" rel="stylesheet">
    <link href="https://laravel.spruko.com/spruha/ltr/assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="https://laravel.spruko.com/spruha/ltr/assets/plugins/web-fonts/plugin.css" rel="stylesheet">

    <!-- Style css-->
    <link href="https://laravel.spruko.com/spruha/ltr/assets/css/style/style.css" rel="stylesheet">
    <link href="https://laravel.spruko.com/spruha/ltr/assets/css/skins.css" rel="stylesheet">
    <link href="https://laravel.spruko.com/spruha/ltr/assets/css/dark-style.css" rel="stylesheet">
    <link href="https://laravel.spruko.com/spruha/ltr/assets/css/colors/default.css" rel="stylesheet">


    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="https://laravel.spruko.com/spruha/ltr/assets/css/colors/color.css">

    <!-- Switcher css-->
    <link href="https://laravel.spruko.com/spruha/ltr/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="https://laravel.spruko.com/spruha/ltr/assets/switcher/demo.css" rel="stylesheet">



    <meta id="dcngeagmmhegagicpcmpinaoklddcgon">
</head>
<body>
    <div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                        <div class="mt-5 pt-4 p-2 pos-absolute">
{{--                            <img src="https://laravel.spruko.com/spruha/ltr/assets/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo">--}}
                            <h1 style="color: #FFF;">Spazio Revitá</h1>
                            <div class="clearfix"></div>
                            <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class="ht-100 mb-0" alt="user">
                            <h5 class="mt-4 text-white">Cadastre para acessar</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Entre em contato com o administrador do sistema</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <div class="msg"></div>
                                    <form method="post" action="{{ route('login.access') }}">
                                        @csrf
                                        <h5 class="text-left mb-2">Acesso ao painel de controle</h5>
                                        <p class="mb-4 text-muted tx-13 ml-0 text-left">Acesso somente para usuários cadastrados</p>
                                        <div class="form-group text-left">
                                            <label>Usuário</label>
                                            <input class="form-control" name="user" id="user" placeholder="usuário" type="text">
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Senha</label>
                                            <input class="form-control" name="password" id="password" placeholder="senha" type="password">
                                        </div>
                                        <button type="submit" class="btn ripple btn-main-primary btn-block">Entrar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

</div>
    <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/login/custom.js') }}"></script>
</body>

</html>
