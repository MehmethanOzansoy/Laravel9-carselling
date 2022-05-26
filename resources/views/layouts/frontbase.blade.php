<!DOCTYPE html>
<html lang="en">
<head>

     <title>@yield("title")</title>
     <meta name="description" content="@yield("description")">
     <meta name="keywords" content="@yield("description")">
     <meta name="author" content="Mehmet Han Ozansoy">
     <link rel="icon" type="image/x-icon" href="@yield("icon")">


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
     
    @yield("head")

</head>

<body>
  
@include('home.menu')

@section('slider')
   
@show

@yield('content')

<@include('home.footer')
@yield('foot')
</body>
</html>