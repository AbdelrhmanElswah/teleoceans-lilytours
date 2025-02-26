<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lilly Tours - Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/3-1.png')}}">
    @include('admin.partials._style')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('admin.partials._navbar')

    @include('admin.partials._sidebar')

    <div class="content-wrapper">
   @yield('content')
    </div>

@include('admin.partials._footer')
<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.partials._script')
</body>
</html>
