<!DOCTYPE html>
<html>
<!-- lang="{{ str_replace('_', '-', app()->getLocale()) }}" -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Outsource Accelerator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('img/oa-logo.png') }}" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('img/oa-logo.png') }}" alt="OA-logo">
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a href="" class="nav-link">About OA</a>
                </li>
                <li>
                    <a href="" class="nav-link">About SP</a>
                </li>
                <li>
                    <a href="" class="blue nav-link">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                Data to enrich your <span class="blue">offshore business</span>
            </h1>

            <h2 class="hero-subtitle">
                Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                irure qui lorem cupidatat commodo. Elit sunt amet fugiat
                veniam fugiat aliqua.
            </h2>
            <div class="hero-buttons">
                <button class="start-btn">Get started</button>
                <button class="view-btn">View recent leads</button>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="{{ asset('javascript/app.js') }}"></script>
</body>

</html>