@extends('layout.main')
{{--
    Halaman utama workout yang menamplkan kategori workout seperti Easy, Medium dan Hard
--}}
@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5"
            style="background-image: url({{ asset('assets/images/workout/homepage/homepage_top.png') }});">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Workout</h1>
                        <p>
                            Aktifitas olahraga yang dilakukan untuk meningkatkan dan memelihara kebugaran tubuh
                        </p>
                        <a class="btn btn-danger" href="#main-content">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div id="main-content" class="container">
        <!-- Programs -->
        <div class="menu-section row">
            <div class="description text-center col-lg-6 col-sm-12 mx-auto">
                <h3 class="content-header">Kategori</h3>
                <p class="content-description">
                    Terdapat pilihan workout yang kamu ikuti
                </p>
            </div>
            <div class="category-card mt-4">
                <div class="row mt-3 mb-5">
                    <div class="col-lg-4 col-12">
                        <a href="/workout/categories/1">
                            <div class="category-card text-center">
                                <h4 class="mt-4">Easy</h4>
                                <p class="mt-4">
                                    Workout ringan yang anda
                                    <br>dapat lakukan dimana saja
                                </p>
                                <img src="assets/images/workout/homepage/homepage_easy.png" alt="" width="50%" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="/workout/categories/2">
                            <div class="category-card text-center">
                                <h4 class="mt-4">Medium</h4>
                                <p class="mt-4">
                                    Workout sedang yang anda
                                    <br>dapat lakukan dimana saja
                                </p>
                                <img src={{ asset('assets/images/workout/homepage/homepage_medium.png') }} alt=""
                                    width="50%" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="/workout/categories/3">
                            <div class="category-card text-center">
                                <h4 class="mt-4">Hard</h4>
                                <p class="mt-4">
                                    Workout sedang yang anda
                                    <br>dapat lakukan dimana saja
                                </p>
                                <img src={{ asset('assets/images/workout/homepage/homepage_hard.png') }} alt=""
                                    width="50%" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
