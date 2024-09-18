<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Elevate Systems</title>

        <!-- Bootstrap core CSS -->
        <link href="{!! url('assets/css/bootstrap.css') !!}" rel="stylesheet">
        <link href="{!! url('assets/css/font-awesome.min.css') !!}" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="{!! url('assets/css/style.css') !!}" rel="stylesheet">
        <link href="{!! url('assets/css/responsive.css') !!}" rel="stylesheet">
    </head>
<body>
    @yield('content')
    
    <script src="{!! url('assets/js/jquery-3.4.1.min.js') !!}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="{!! url('assets/js/bootstrap.js') !!}"></script>
    <script src="{!! url('assets/js/custom.js') !!}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    @yield('scripts')
  </body>
</html>