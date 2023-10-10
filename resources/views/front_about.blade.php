@extends("front_master")
@section("content")
   
   
   <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
     @include('partials.navbar')
     @include('partials.banner_page')
    <!-- Navbar & Hero End -->

    <!-- About Start -->
     @include('partials.about')
    <!-- end About-->

    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->
 @endsection