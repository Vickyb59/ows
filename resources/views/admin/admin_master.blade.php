@include('admin.inc.head')

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

        @php
            $id = Auth::user()->id;
            $adminData = App\Models\User::find($id);
        @endphp

            
            @include('admin.inc.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.inc.sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            
            <div class="main-content">
                @yield('admin')
                
                <!-- End Page-content -->
                @include('admin.inc.footer')                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        @include('admin.inc.scripts') 
    </body>

</html>