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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     {{-- web icon --}}
    <link rel="icon" href="{{ asset('images/legser_logo.png') }}" type="image/png">


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
                    <li class="nav-item "><a class="nav-link " href="{{ url('/' ) }}">Home</a></li>
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
        {{-- resources/views/home.blade.php --}}

        <section class="hero">
            <h1>Welcome!</h1>
            <p>
                We prioritize transparency, delivering excellence and high-quality solutions.<br>
                Our focus on trust and security ensures the confidentiality and protection of your sensitive data.
            </p>

            <div class="hero-buttons">
                <a href="{{ url('/postCase') }}" class="btn btn-primary">Post Case</a>
                <a href="{{ url('/explore-cases') }}" class="btn btn-secondary">Explore Cases</a>
            </div>
        </section>
        {{-- Post case in slider and lawyer profile --}}
<section class="container my-5">
    <h2 class="text-center mb-4">Recent Legal Cases</h2>

    <div id="casesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">

            {{-- Slide 1: Cases 1-3 --}}
            <div class="carousel-item active">
                <div class="row g-4">
                    @php
                    $cases = [
                        [
                            'title' => 'Contract Dispute Case',
                            'description' => 'A disagreement over contract terms causing delays in project delivery.',
                            'status' => 'Open',
                            'statusClass' => 'bg-success',
                            'experts' => 'Contract, Civil',
                            'posted' => '2 hrs ago',
                            'bids' => 5,
                        ],
                        [
                            'title' => 'Property Rights Conflict',
                            'description' => 'Dispute over property boundaries requiring expert legal resolution.',
                            'status' => 'Pending',
                            'statusClass' => 'bg-warning text-dark',
                            'experts' => 'Property, Civil',
                            'posted' => '1 day ago',
                            'bids' => 3,
                        ],
                        [
                            'title' => 'Intellectual Property Case',
                            'description' => 'Unauthorized use of copyrighted materials by a competitor.',
                            'status' => 'Closed',
                            'statusClass' => 'bg-secondary',
                            'experts' => 'IP Law, Corporate',
                            'posted' => '3 days ago',
                            'bids' => 10,
                        ],
                    ];
                    @endphp

                    @foreach($cases as $i => $case)
                    <div class="col-md-4 pt-1">
                        <div class="card h-100 border border-primary border-2 shadow-sm rounded-3">
                            <div class="card-body d-flex flex-column">
                                <h6 class="card-title text-primary fw-bold">{{ $case['title'] }}</h6>
                                <p class="card-text small text-muted">{{ $case['description'] }}</p>

                                <ul class="list-unstyled small mb-3">
                                    <li class="d-flex justify-content-between">
                                        <span><strong>Status:</strong></span>
                                        <span class="badge {{ $case['statusClass'] }}">{{ $case['status'] }}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span><strong>Experts:</strong></span>
                                        <span>{{ $case['experts'] }}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span><strong>Posted:</strong></span>
                                        <span>{{ $case['posted'] }}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span><strong>Bids:</strong></span>
                                        <span>{{ $case['bids'] }}</span>
                                    </li>
                                </ul>

                                <a href="{{ url('/case/' . ($i+1)) }}" class="btn btn-sm btn-outline-primary w-100 mt-auto">Submit Bid</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Slide 2: Cases 4-6 --}}
            <div class="carousel-item">
                <div class="row g-4">
                    @php
                    $cases2 = [
                        [
                            'title' => 'Employment Contract Issue',
                            'description' => 'Reviewing employment agreements and employee rights disputes.',
                            'status' => 'Open',
                            'statusClass' => 'bg-success',
                            'experts' => 'Labor Law',
                            'posted' => '5 hrs ago',
                            'bids' => 4,
                        ],
                        [
                            'title' => 'Environmental Regulation Case',
                            'description' => 'Legal assistance required for compliance with environmental standards.',
                            'status' => 'Pending',
                            'statusClass' => 'bg-warning text-dark',
                            'experts' => 'Environmental Law',
                            'posted' => '2 days ago',
                            'bids' => 7,
                        ],
                        [
                            'title' => 'Family Estate Dispute',
                            'description' => 'Conflicts over inheritance and estate distribution among family members.',
                            'status' => 'Open',
                            'statusClass' => 'bg-success',
                            'experts' => 'Family Law, Estate Planning',
                            'posted' => '1 hr ago',
                            'bids' => 2,
                        ],
                    ];
                    @endphp

                    @foreach($cases2 as $i => $case)
                    <div class="col-md-4">
                        <div class="card h-100 border border-primary border-2 shadow-sm rounded-3">
                            <div class="card-body d-flex flex-column">
                                <h6 class="card-title text-primary fw-bold">{{ $case['title'] }}</h6>
                                <p class="card-text small text-muted">{{ $case['description'] }}</p>

                                <ul class="list-unstyled small mb-3">
                                    <li class="d-flex justify-content-between">
                                        <span><strong>Status:</strong></span>
                                        <span class="badge {{ $case['statusClass'] }}">{{ $case['status'] }}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span><strong>Experts:</strong></span>
                                        <span>{{ $case['experts'] }}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span><strong>Posted:</strong></span>
                                        <span>{{ $case['posted'] }}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span><strong>Bids:</strong></span>
                                        <span>{{ $case['bids'] }}</span>
                                    </li>
                                </ul>

                                <a href="{{ url('/case/' . ($i+4)) }}" class="btn btn-sm btn-outline-primary w-100 mt-auto">Submit Bid</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#casesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#casesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

{{-- Top Lawyers Slider --}}

<section class="container my-5">
    <h2 class="text-center mb-4">Top Lawyers</h2>

    <div id="lawyersCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">

            {{-- Slide 1 --}}
            <div class="carousel-item active">
                <div class="row g-4">
                    @php
                    $lawyers = [
                        ['name' => 'Alice Johnson', 'specialization' => 'Criminal Law', 'rating' => 4.8, 'profileUrl' => '/lawyer/1', 'img' => 'https://randomuser.me/api/portraits/women/65.jpg'],
                        ['name' => 'Mark Stevens', 'specialization' => 'Family Law', 'rating' => 4.5, 'profileUrl' => '/lawyer/2', 'img' => 'https://randomuser.me/api/portraits/men/32.jpg'],
                        ['name' => 'Sophia Lee', 'specialization' => 'Corporate Law', 'rating' => 4.7, 'profileUrl' => '/lawyer/3', 'img' => 'https://randomuser.me/api/portraits/women/44.jpg'],
                    ];
                    @endphp

                    @foreach($lawyers as $index => $lawyer)
                    <div class="col-md-4 pt-1">
                        <div class="card h-100 text-center shadow-sm rounded-3 border border-info border-2 p-3">
                            <div class="card-body d-flex flex-column">
                                <img src="{{ $lawyer['img'] }}" alt="{{ $lawyer['name'] }}" class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                                <h5 class="card-title">{{ $lawyer['name'] }}</h5>
                                <p class="card-text text-muted mb-2">{{ $lawyer['specialization'] }}</p>
                                <div class="mb-3">
                                    <span class="badge bg-warning text-dark">
                                        ⭐ {{ $lawyer['rating'] }}
                                    </span>
                                </div>
                                <a href="{{ url($lawyer['profileUrl']) }}" class="btn btn-sm btn-outline-info mt-auto">View Profile</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="carousel-item">
                <div class="row g-4">
                    @php
                    $lawyers2 = [
                        ['name' => 'David Kim', 'specialization' => 'Immigration Law', 'rating' => 4.6, 'profileUrl' => '/lawyer/4', 'img' => 'https://randomuser.me/api/portraits/men/75.jpg'],
                        ['name' => 'Emma Watson', 'specialization' => 'Environmental Law', 'rating' => 4.9, 'profileUrl' => '/lawyer/5', 'img' => 'https://randomuser.me/api/portraits/women/18.jpg'],
                        ['name' => 'James Brown', 'specialization' => 'Tax Law', 'rating' => 4.4, 'profileUrl' => '/lawyer/6', 'img' => 'https://randomuser.me/api/portraits/men/21.jpg'],
                    ];
                    @endphp

                    @foreach($lawyers2 as $index => $lawyer)
                    <div class="col-md-4">
                        <div class="card h-100 text-center shadow-sm rounded-3 border border-info border-2 p-3">
                            <div class="card-body d-flex flex-column">
                                <img src="{{ $lawyer['img'] }}" alt="{{ $lawyer['name'] }}" class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                                <h5 class="card-title">{{ $lawyer['name'] }}</h5>
                                <p class="card-text text-muted mb-2">{{ $lawyer['specialization'] }}</p>
                                <div class="mb-3">
                                    <span class="badge bg-warning text-dark">
                                        ⭐ {{ $lawyer['rating'] }}
                                    </span>
                                </div>
                                <a href="{{ url($lawyer['profileUrl']) }}" class="btn btn-sm btn-outline-info mt-auto">View Profile</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#lawyersCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#lawyersCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Legser: Legal Service Provider. All rights reserved.</p>
    </footer>
</body>

</html>
