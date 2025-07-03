<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Legser -Legal Service Provider</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>

</head>

<body>
    {{-- Navigation Bar for legser like logo and tabs of login etc make it like sementic --}}
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container-fluid">
            {{-- Logo & Brand --}}
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('images/legser_logo.png') }}" alt="Legser_Banner" height="40" class="me-2">
                <span class="brand-name">Legser</span>
            </a>

            {{-- Toggler --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#legserNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Links and buttons --}}
            <div class="collapse navbar-collapse " id="legserNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/legalCase') }}">Legal Case</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/lawyer') }}">Lawyer</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/aboutUs') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>


                {{-- Login & Register --}}
                <div class="d-flex auth-buttons">
                    <a href="{{ url('/login') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ url('/register') }}" class="btn btn-warning text-dark">Register</a>
                </div>
            </div>
        </div>
    </nav>


    {{-- Main content area --}}
    <main>
        {{-- There is we can set a images in background and on the top we can set the here text --}}
        <section class="hero">
            <h1>Welcome to Legser</h1>
            <p>Your trusted legal service provider.</p>
            <a href="{{ url('/services') }}" class="btn btn-primary">Explore Services</a>
        </section>


        <section class="features">
            <div class="feature">
                <h2>Expert Legal Advice</h2>
                <p>Get professional legal advice from experienced lawyers.</p>
            </div>
            <div class="feature"></div>
            <h2>Affordable Services</h2>
            <p>We offer competitive pricing for all our legal services.</p>
            </div>
            <div class="feature">
                <h2>24/7 Support</h2>
                <p>Our support team is available 24/7 to assist you.</p>
            </div>
        </section>
        {{-- And here is the legal case post and then top laywer profile --}}
        <section class="legal-cases">
            <h2>Recent Legal Cases</h2>
            <div class="case">
                <h3>Case Title 1</h3>
                <p>Brief description of the case...</p>
                <a href="{{ url('/case/1') }}" class="btn">Read More</a>
            </div>
            <div class="case">
                <h3>Case Title 2</h3>
                <p>Brief description of the case...</p>
                <a href="{{ url('/case/2') }}" class="btn">Read More</a>
            </div>
            <div class="case">
                <h3>Case Title 3</h3>
                <p>Brief description of the case...</p>
                <a href="{{ url('/case/3') }}" class="btn">Read More</a>
            </div>
        </section>
        {{-- Here is the top lawyer profile --}}
        <section class="top-lawyers">
            <h2>Top Lawyers</h2>
            <div class="lawyer-profile">
                <h3>Lawyer Name 1</h3>
                <p>Specialization: Criminal Law</p>
                <a href="{{ url('/lawyer/1') }}" class="btn">View Profile</a>
            </div>
            <div class="lawyer-profile">
                <h3>Lawyer Name 2</h3>
                <p>Specialization: Family Law</p>
                <a href="{{ url('/lawyer/2') }}" class="btn">View Profile</a>
            </div>
            <div class="lawyer-profile">
                <h3>Lawyer Name 3</h3>
                <p>Specialization: Corporate Law</p>
                <a href="{{ url('/lawyer/3') }}" class="btn">View Profile</a>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Legser: Legal Service Provider. All rights reserved.</p>
    </footer>
</body>

</html>
