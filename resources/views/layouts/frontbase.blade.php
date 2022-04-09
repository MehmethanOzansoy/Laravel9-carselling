<!DOCTYPE html>
<html lang="en">
<head>

     <title>@yield("title")</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
     <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
     <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
     


</head>

<body>

@section('preloader')
     @include('home.preloader')   
@show      
     @include('home.menu')
     @include('home.header')
     @include('home.FeaturedCars')
     @include('home.contact')
     @include('home.footer')
    </body>
</html>