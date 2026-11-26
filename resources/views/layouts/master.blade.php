<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Toast.district')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --cream: #F8F3EA;
            --brown: #8B5E3C;
            --dark-brown: #38271F;
            --orange: #E99B50;
            --light-brown: #EADBC8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--cream);
            color: var(--dark-brown);
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }

        a {
            text-decoration: none;
        }

        /* NAVBAR */
        .navbar {
            background-color: var(--cream);
            padding: 18px 0;
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            font-weight: 700;
            color: var(--dark-brown);
        }

        .navbar-brand span {
            color: var(--brown);
        }

        .navbar .nav-link {
            color: var(--dark-brown);
            font-size: 14px;
            font-weight: 500;
            margin: 0 12px;
            transition: 0.3s;
        }

        .navbar .nav-link:hover {
            color: var(--orange);
        }

        .btn-toast {
            background-color: var(--brown);
            color: white;
            border-radius: 30px;
            padding: 11px 25px;
            font-size: 13px;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-toast:hover {
            background-color: var(--dark-brown);
            color: white;
        }

        /* FOOTER */
        .footer {
            background-color: var(--dark-brown);
            color: var(--cream);
            padding: 45px 0 20px;
        }

        .footer-brand {
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            font-weight: 700;
        }

        .footer p {
            font-size: 13px;
            color: #D8C8B8;
            line-height: 1.8;
        }

        .footer a {
            color: #D8C8B8;
            font-size: 13px;
        }

        .footer a:hover {
            color: var(--orange);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .navbar .nav-link {
                margin: 5px 0;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                toast<span>.district</span>
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarToast">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToast">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/menu') }}">Our Menu</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/sponsorship') }}">Sponsorship</a>
                    </li>
                </ul>

                <a href="{{ url('/menu') }}" class="btn btn-toast">
                    Explore Menu <i class="bi bi-arrow-right"></i>
                </a>

            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">

            <div class="row gy-4">

                <div class="col-md-5">
                    <div class="footer-brand">
                        toast.district
                    </div>

                    <p class="mt-3">
                        A little toast, a lot of happiness.
                        Bringing delicious moments to your everyday life.
                    </p>
                </div>

                <div class="col-md-3">
                    <h6 class="mb-3">Explore</h6>
                    <p><a href="{{ url('/') }}">Home</a></p>
                    <p><a href="{{ url('/menu') }}">Our Menu</a></p>
                    <p><a href="{{ url('/sponsorship') }}">Sponsorship</a></p>
                </div>

                <div class="col-md-4">
                    <h6 class="mb-3">Find Us</h6>
                    <p>Toast.district</p>
                    <p>Delicious toast, made with love.</p>
                </div>

            </div>

            <hr style="border-color: #806A58;">

            <div class="text-center">
                <p class="mb-0">
                    &copy; {{ date('Y') }} Toast.district.
                    All Rights Reserved.
                </p>
            </div>

        </div>
    </footer>

    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>
</html>
