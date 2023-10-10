@extends("front_master")
@section("content")
   
   
   <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
     @include('partials.navbar')
     @include('partials.banner_page')
    <!-- Navbar & Hero End -->

    <!-- About Start -->
     @include('partials.process')
    <!-- end About-->

    <!-- Team Start -->
    @include('partials.booking')
    <!-- Team End -->
 @endsection