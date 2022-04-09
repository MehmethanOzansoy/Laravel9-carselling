 
@extends('layouts.frontbase')
 
 @section('title', 'Car Selling')
  
 @section('sidebar')
     @parent
  
     <p>This is appended from sub file.</p>
 @endsection
  
 @section('content')
     <p>This is my body content.</p>
 @endsection