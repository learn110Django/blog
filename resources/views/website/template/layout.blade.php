<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{url('fronted/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('fronted/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('fronted/css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{url('fronted/images/favicon.ico')}}">
    </head>
    <body>

         
    @yield('content')
  

  <!--=============== scripts  ===============-->
  <script   src="{{url('fronted/js/jquery.min.js')}}"></script>
  <script   src="{{url('fronted/js/plugins.js')}}"></script>
  <script   src="{{url('fronted/js/scripts.js')}}"></script>
</body>
</html>