@extends("front_master")
@section("content")
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
     @include('partials.navbar')
     @include('partials.banner_page')
    <!-- Navbar & Hero End -->


    <!-- Package Start -->
     @include('partials.package')
    <!-- Package End -->


    <!-- Booking Start -->
     @include('partials.booking');
    <!-- Booking Start -->

    <!-- Process Start -->
    @include('partials.process')
    <!-- Process Start -->

    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->
   
    


    <!-- Back to Top -->
   @endsection