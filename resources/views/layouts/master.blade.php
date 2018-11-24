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
                        Dashboard <small>Version 2.0</small>
                    </h1>
                    <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-dashboard"></i>Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <!-- Info boxes -->
                </section>
             <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('layouts.master_components.footer')

        </div>
        <!-- ./wrapper -->

        @include('layouts.master_components.script')

    </body>
</html>
