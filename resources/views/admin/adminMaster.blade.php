<!DOCTYPE html>
<html lang="en">
    @include('admin.includes.adminHead')
    <body>

        <div id="wrapper">
            <!-- Navigation -->
            @include('admin.includes.adminHeader')

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
            @include('admin.includes.adminSidebar')

            <div id="page-wrapper">
                @yield('adminContent')
            </div>
            <!-- /#page-wrapper -->
            @include('admin.includes.footer')
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="{{asset('admin/')}}/vendor/jquery/jquery.min.js"></script>
        <!-- tinymce -->
        <script src="{{asset('admin/')}}/tinymce/jquery.tinymce.min.js"></script> <!-- not working tinymce -->
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('admin/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('admin/')}}/vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script src="{{asset('admin/')}}/vendor/raphael/raphael.min.js"></script>
        <script src="{{asset('admin/')}}/vendor/morrisjs/morris.min.js"></script>
        <script src="{{asset('admin/')}}/data/morris-data.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{asset('admin/')}}/dist/js/sb-admin-2.js"></script>

    </body>
</html>