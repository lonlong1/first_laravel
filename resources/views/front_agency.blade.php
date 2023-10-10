@extends('front_master')
@section('content')

    <!-- Navbar & Hero Start -->
     @include('partials.navbar');
    <!-- Navbar & Hero End -->


    <!-- About Start -->
     @include('partials.about');
    <!-- end About-->

    <!-- Service Start -->
     @include('partials.services');
    <!-- Service End -->


    <!-- Destination Start -->
      @include('partials.distination');
    <!-- Destination Start -->


    <!-- Package Start -->
     @include('partials.package')
    <!-- Package End -->


    <!-- Booking Start -->
     @include('partials.booking')
    <!-- Booking Start -->


    <!-- Process Start -->
    @include('partials.process')
    <!-- Process Start -->


    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('partials.testimoninal')
    <!-- Testimonial End -->
        
@endsection