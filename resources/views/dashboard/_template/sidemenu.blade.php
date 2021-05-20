<!--- Sidemenu -->
<div class="main-sidebar main-sidebar-sticky side-menu ps ps--active-y">
    <div class="sidemenu-logo">
        <a class="main-logo" href="https://laravel.spruko.com/spruha/ltr/index">
            <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class="header-brand-img desktop-logo" alt="logo" style="width: 25%">
            <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class="header-brand-img icon-logo" alt="logo" style="width: 75%">
            <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class="header-brand-img desktop-logo theme-logo" alt="logo" style="width: 25%">
            <img src="{{ URL::asset('assets/images/logo-revita.png') }}" class="header-brand-img icon-logo theme-logo" alt="logo" style="width: 25%">
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            <li class="nav-header"><span class="nav-label">Dashboard</span></li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="/dashboard">--}}
{{--                    <span class="shape1"></span>--}}
{{--                    <span class="shape2"></span>--}}
{{--                    <i class="ti-home sidemenu-icon"></i>--}}
{{--                    <span class="sidemenu-label">Dashboard</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a class="nav-link" href="/user">
                    <span class="shape1"></span>
                    <span class="shape2"></span>
                    <i class="ti-user sidemenu-icon"></i>
                    <span class="sidemenu-label">Usuário</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="/content">
                    <span class="shape1"></span>
                    <span class="shape2"></span>
                    <i class="ti-write sidemenu-icon"></i>
                    <span class="sidemenu-label">Conteúdo</span>

                </a>

            </li>


        </ul>
    </div>
    <div class="ps__rail-x" style="left: 0px; top: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 492px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 231px;"></div>
    </div>
</div>
<!-- End Sidebar -->
