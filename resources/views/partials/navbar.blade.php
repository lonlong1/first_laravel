<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link {{request()->is('/') ? 'active' : ''}}">Home</a>
                    <a href="/about" class="nav-item nav-link {{request()->is('about') ? 'active' : ''}}">About</a>
                    <a href="/services" class="nav-item nav-link {{request()->is('services') ? 'active' : ''}}">Services</a>
                    <a href="/package" class="nav-item nav-link {{request()->is('package') ? 'active' : ''}}">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="/destination" class="dropdown-item {{request()->is('destination') ? 'active' : ''}}">Destination</a>
                            <a href="/booking" class="dropdown-item {{request()->is('booking') ? 'active' : ''}}">Booking</a>
                            <a href="/guides" class="dropdown-item {{request()->is('guides') ? 'active' : ''}}">Travel Guides</a>
                            <a href="/testimonial" class="dropdown-item {{request()->is('testimonial') ? 'active' : ''}}">Testimonial</a>
                            <a href="/error" class="dropdown-item {{request()->is('error') ? 'active' : ''}}">404 Page</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link {{request()->is('contact') ? 'active' : ''}}">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
            </div>
        </nav>

       
    </div>