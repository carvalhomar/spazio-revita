<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Spazio - Revita</title>

    <meta name="description" content="Clínica para tratamento estético"/>
    <meta name="keywords" content="cirurgia plática, dermatologia, intima, cirurgia intima, beleza, intimiade">
    <meta name="author" content="DevWev - Solucões em TI">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/images/revita.ico') }}">
    <!-- Global site tag (gtag.js) - Google Ads: 981358199 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-981358199"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-981358199');
    </script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ URL::asset('assets/css/icofont.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&amp;display=swap">
    <style>
        nav{
            background-color: #009cac!important;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">

    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand brand-logo mr-4" href="#">
            <h1 class="color-text" id="title" style="margin-top:10px; margin-left: 10px;">Spazio Revita</h1>
            <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class="img-fluid logo-light" alt="">
            <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class="img-fluid logo-dark" alt="">
        </a>
        <div class="navbar-collapse collapse justify-content-center" id="navbarCollapse">
            <ul class="navbar-nav navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="https://www.spaziorevita.com.br/#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.spaziorevita.com.br/#features" class="nav-link">Tratamentos</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.spaziorevita.com.br/#our-team" class="nav-link">Nossa Equipe</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.spaziorevita.com.br/#blog" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.spaziorevita.com.br/#video" class="nav-link">Vídeos</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.spaziorevita.com.br/#health" class="nav-link">Saúde</a>
                </li>
            </ul>
        </div>
        <div class="contact_btn">

            <a href="https://api.whatsapp.com/send?phone=5551996533530" class="btn btn-sm">AGENDE AQUI</a>

            <button class="navbar-toggler ml-2 p-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

                <i class="icofont-navigation-menu"></i>

            </button>

        </div>
    </div>
</nav>
<div class="form-container outer">

    <section id="features" class="section features active">
        <div class="container">
            <br/>
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-4">
                        <h2>{{ $data->title }}</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: justify;line-height: 2;">{!! html_entity_decode($data->content) !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    &nbsp;
                </div>
                <div class="col-md-2">
                    <a href="{{ route('home') }}">
                        Voltar
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-control" action="{{ url('/send-email')}}" method="post">
                        {{ csrf_field() }}

                        @if(count($errors) > 0)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Preencha os dados corretamente!</strong>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Obrigado!</strong> {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Opsssss!</strong> {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">Nome</label>
                                <input type="text" name="name" id="name" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                <label for="email">e-mail</label>
                                <input type="e-mail" name="email" id="email" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                <label for="email">Assunto</label>
                                <input type="text" name="subject" id="subject" value="{{ $data->title }}" class="form-control"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="mesage">Mensagem</label>
                                <textarea class="form-control" name="mesage" id="mesage"></textarea>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-12" align="right">
                                <button type="submit" class="btn btn-primary form-control">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <a href="#" class="back_top" style="display: inline;"> <i class="icofont-rounded-up"></i></a>


    <script type="text/javascript" async="" src="http://www.googleadservices.com/pagead/conversion_async.js"></script>
    <script type="text/javascript" async="" src="http://www.googletagmanager.com/gtag/js?id=AW-981358199&amp;l=dataLayer&amp;cx=c"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TDBRVKY41Z"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TDBRVKY41Z');
    </script>
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/parallax.js') }}"></script>
    <script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/wavify.js') }}"></script>

</body>
</html>
