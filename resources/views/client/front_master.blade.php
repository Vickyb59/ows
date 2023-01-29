@include('client.inc.head')

    <body>

        <!-- preloader  -->
        @include('client.inc.preloader')
        <!-- preloader end -->

        <!-- header-start -->
        @include('client.inc.header')
        <!-- header-start-end -->

        <!-- main-area -->
        @yield('main')
        <!-- main-area-end -->

        <!-- footer -->
        @include('client.inc.footer')
        <!-- footer-end -->

		<!-- JS here -->
        @include('client.inc.scripts')
        
    </body>


<!--  telixcargo.com/  -->
</html>