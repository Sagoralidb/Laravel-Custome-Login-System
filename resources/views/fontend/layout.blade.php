<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Blog website')</title>
    
    <!-- favicon -->
    <link rel=icon href="{{asset('assetsFontend/img/favicon.png')}}" sizes="20x20" type="image/png">

    <!-- Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assetsFontend/css/vendor.css') }}">

    <link rel="stylesheet" href="{{asset('assetsFontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assetsFontend/css/responsive.css')}}">

</head>
<body>

    @yield('content')
   
    <!-- all plugins here -->
    <script src="{{asset('assetsFontend/js/vendor.js')}}"></script>
    <!-- main js  -->
    <script src="{{asset('assetsFontend/js/main.js')}}"></script>
</body>
</html>