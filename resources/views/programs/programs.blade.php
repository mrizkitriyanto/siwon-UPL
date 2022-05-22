@extends('layout.main')

@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5" style="background-image: url({{ asset('assets/images/homepage-programs.png') }});">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Fitness Program</h1>
                        <p>
                            Siwon akan memberikan struktur pada pelatihan kamu dan juga akan
                            memberi kamu gambaran tentang beban dan seberapa baik kamu dapat
                            menanganinya.
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
                <h3 class="content-header">Pilih tingkat kemahiran</h3>
                <p class="content-description">
                    Program olahraga ini membantumu berolahraga secara efektif berdasar
                    panduan dari kami
                </p>
            </div>
            <div class="category-card mt-4">
                <div class="row mt-3 mb-5">
                    <div class="col-lg-4 col-12">
                        <a href="/programs/categories/1">
                            <div class="category-card text-center">
                                <img src="{{ asset('assets/images/program/homepage_beginner.png') }}" alt=""
                                    width="100%" />
                                <h4 class="mt-4">Beginner</h4>
                                <p class="mt-4">
                                    Program satu minggu yang akan membantumu berolahraga ringan
                                    secara teratur
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="/programs/categories/2">
                            <div class="category-card text-center">
                                <img src="{{ asset('assets/images/program/homepage_intermediate.png') }}" alt=""
                                    width="100%" />
                                <h4 class="mt-4">Intermediate</h4>
                                <p class="mt-4">
                                    Program satu bulan yang akan membantumu berolahraga ringan
                                    secara teratur
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="/programs/categories/3">
                            <div class="category-card text-center">
                                <img src="{{ asset('assets/images/program/homepage_advanced.png') }}" alt=""
                                    width="100%" />
                                <h4 class="mt-4">Advanced</h4>
                                <p class="mt-4">
                                    Program tiga bulan yang akan membantumu berolahraga ringan
                                    secara teratur
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
