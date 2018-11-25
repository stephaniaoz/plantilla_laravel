<!DOCTYPE html>
<html>
    @include('layouts.master_components.head')

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('layouts.master_components.header')
            @include('layouts.master_components.sidebar-left')
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @yield('title_head')<small>@yield('preview')</small>
                    </h1>
                    <ol class="breadcrumb">
                        @section('rutamaster')
                            <li>
                                <a href="#"><i class="fa fa-dashboard"></i>Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        @show                    
                    </ol>
                </section>
               
                <!-- Main content -->
                <section class="content">
                    @yield('container')
                <!-- Info boxes -->
                </section>
             <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('layouts.master_components.footer')
            @include('layouts.master_components.sidebar-config')

        </div>
        <!-- ./wrapper -->

        @include('layouts.master_components.script')

    </body>
</html>
