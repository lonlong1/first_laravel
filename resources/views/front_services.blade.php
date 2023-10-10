@extends("front_master")
@section("content")
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
     @include('partials.navbar')
     @include('partials.banner_page')
    <!-- Navbar & Hero End -->

    <!-- About Start -->
     @include('partials.services')
    <!-- end About-->

    <!-- Team Start -->
    @include('partials.testimonial')
    <!-- Team End -->

    <!-- Footer Start -->
     @include('partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
     @endsection
