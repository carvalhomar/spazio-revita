
<div class="main-header side-header sticky sticky-pin" style="margin-bottom: -64px;">
    <div class="container-fluid">
        <div class="main-header-left">
            <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
        </div>
        <div class="main-header-center">
          &nbsp;
        </div>
        <div class="main-header-right">

            <div class="dropdown main-profile-menu">
                <a class="d-flex" href="">
                    <span class="main-img-user">
                        <img alt="avatar" src="https://laravel.spruko.com/spruha/ltr/assets/img/users/1.jpg">
                    </span>
                </a>
                <div class="dropdown-menu">
                    <div class="header-navheading">
                        <h6 class="main-notification-title">{{ \Illuminate\Support\Facades\Session::get('name') }}</h6>
                        <p class="main-notification-text">{{ \Illuminate\Support\Facades\Session::get('user') }}</p>
                    </div>

                    <a class="dropdown-item" href="/user/edit/{{ \Illuminate\Support\Facades\Session::get('user_id')}}">
                        <i class="fe fe-edit"></i> Editar Perfil
                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="fe fe-power"></i> Log out
                    </a>
                </div>
            </div>

            <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
            </button><!-- Navresponsive closed -->
        </div>
    </div>
</div>
