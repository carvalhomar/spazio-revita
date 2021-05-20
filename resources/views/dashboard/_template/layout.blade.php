
<html lang="pt-br">
    {{ view('dashboard._template.head') }}
    <body class="main-body leftmenu main-sidebar-hide">
        <!-- Loader -->
        <div id="global-loader" style="display: none;">
            <img src="{{ URL::asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
        </div>
        <!-- End Loader -->

        <!-- Page -->
        {{ view('dashboard._template.content') }}
        <!-- End Page -->

        <!-- Back to top -->
        <a href="#top" id="back-to-top" style="display: none;">
            <i class="fe fe-arrow-up"></i>
        </a>
        <!-- End Back to top -->

        <!-- Scripts -->

        <!-- Jquery -->
        <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Select2 -->
        <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

        <!-- Side Menu -->
        <script src="{{ URL::asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
        <script src="{{ URL::asset('assets/js/dashboard/custom.js') }}"></script>

        @stack('scripts')
    </body>
</html>
