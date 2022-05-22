<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('meta')

    <!-- reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:wght@400;500;700&family=Satisfy&display=swap"
        rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" />

    <title>SiWON - Workout Online</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand brand ms-3" href="/">Workout Online</a>
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link @if ($active == 'home') active @endif" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($active == 'programs') active @endif" href="/programs">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($active == 'workout') active @endif" href="/workout">Workout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($active == 'healthy_foods') active @endif" href="/healthy-foods">Healthy Foods</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Selamat Datang, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (auth()->user()->is_admin)
                                    <a href="/dashboard" class="dropdown-item">
                                        <li><i class="bi bi-speedometer2 me-2"></i> Dashboard</li>
                                    </a>
                                @endif
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <li><i class="bi bi-box-arrow-right me-2"></i> Logout</li>
                                    </button>
                                </form>

                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-outline-danger" href="/auth/login">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <div class="container-fluid footer">
        <div class="container">
            <div class="row mt-5 py-5">
                <div class="col-lg-3 col-sm-12 mb-4 text-start text-md-center">
                    <a class="brand fs-4" href="#">Workout Online</a>
                </div>
                <div class="col-lg-3 col-sm-12 mb-4">
                    <h6>Get Started</h6>
                    <ul>
                        <li><a href="/article/perkenalan">Perkenalan</a></li>
                        <li><a href="/article/select-program">Memilih Program</a></li>
                        <li><a href="/article/select-workout">Memilih Workout</a></li>
                        <li><a href="/article/food-recipes">Memilih Resep Makanan</a></li>
                        <li><a href="/article/meal-plan">Memilih Meal Plan</a></li>
                        <li><a href="/article/suggestion">Saran dan Masukan</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-12 mb-4">
                    <h6>Fitur & Kategori</h6>
                    <ul>
                        <li><a href="/programs" target="_blank">Program</a></li>
                        <li><a href="/workout" target="_blank">Workout</a></li>
                        <li><a href="/healthy-foods" target="_blank">Healthy Foods</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <h6>Sosial Media</h6>
                    <ul>
                        <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.youtube.com/" target="_blank">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <div class="row pb-4 text-muted">
                <small class="text-center small">Copyright | SiWON 2021</small>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="/js/workout_timer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    @yield('script')
</body>

</html>
