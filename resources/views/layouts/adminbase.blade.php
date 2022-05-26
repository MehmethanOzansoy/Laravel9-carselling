<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title")</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('assets')}}/admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
   

    
    @yield("head")

</head>

<body class="hold-transition sidebar-mini">

 @include('admin.header')

 @section('admin.sidebar')
     @include("admin.sidebar")
 @show

 @yield('content')
 

 @include("admin.footer")

 @yield('foot')
 
    
    
</body>
</html>