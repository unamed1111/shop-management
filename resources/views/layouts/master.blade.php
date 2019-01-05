<!DOCTYPE html>
<html lang="en">

@include('layouts.includes.head')

<body class="sidebar-light sidebar-expand">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
            @include('layouts.includes.nav')
        <!-- /.navbar -->
        <div class="content-wrapper">
            <!-- SIDEBAR -->
            @include('layouts.includes.sidebar')
            <!-- /.site-sidebar -->
            @yield('content')
            <!-- /.main-wrappper -->
        </div>
        <!-- /.content-wrapper -->
        <!-- FOOTER -->
        @include('layouts.includes.footer')
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    @include('layouts.includes.script')
    <!-- End Scripts -->
</body>

</html>