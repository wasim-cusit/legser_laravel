<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 - Page Not Found | Legser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     {{-- web icon --}}
    <link rel="icon" href="{{ asset('images/legser_logo.png') }}" type="image/png">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/erorrs.css') }}">
</head>
<body>

<div class="error-container">
    <div class="error-box">
        {{-- <div class="error-emoji">⚖️</div> --}}
        <img src="{{ asset('images/legser_logo.png') }}" alt="Legser" class="mb-3" width="60">

        <h1 class="error-code">404</h1>
        <h4 class="text-dark fw-bold">Oops! Page Not Found</h4>
        <p class="error-text">
            The page you're looking for doesn't exist or has been moved.<br>
            Don't worry, we’ll help you find the right direction.
        </p>
        <a href="{{ url('/') }}" class="btn btn-custom mt-3">← Back to Home</a>
    </div>
</div>

</body>
</html>
