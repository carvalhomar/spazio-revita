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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K94KLK8B37"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-K94KLK8B37');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '442420893483957');
        fbq('track', 'PageView');
    </script>
    <meta name="facebook-domain-verification" content="sy0o3m6pdpysdvd6w8obaccx3etu81" />
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=442420893483957&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    @stack('styles')

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
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Tratamentos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#our-team" class="nav-link">Nossa Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#video" class="nav-link">Vídeos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#health" class="nav-link">Saúde</a>
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
        @section('content')
            content to main page
        @show
    </div>
    <!-- Link top -->
    <a href="#" class="back_top" style="display: inline;"> <i class="icofont-rounded-up"></i></a>
    @stack('scripts')
</body>
</html>

