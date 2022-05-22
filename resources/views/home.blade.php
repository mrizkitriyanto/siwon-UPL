@extends('layout.main')

@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5" style="background-image: url({{ asset('assets/images/homepage-jumbotron-1x.png') }});">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Selamat Datang</h1>
                        <p>
                            Mulai gaya hidup sehat kamu dengan berbagai informasi program
                            olahraga, workout, mealplan, hingga resep makanan sehat dari
                            website SiWON.
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
                <h3 class="content-header">Programs</h3>
                <p class="content-description">
                    Program olahraga ini membantumu berolahraga secara efektif
                    berdasarkan panduan dari kami
                </p>
            </div>
            <div class="featured-card mt-4">
                <div class="row">
                    @foreach ($programs as $program)
                        <div class="col-lg-6 col-sm-12 mb-3">
                            <a href="/programs/{{ $program->slug }}">
                                <div class="programs-card p-5 mb-3 rounded"
                                    style="background-image: url('{{ asset('assets/images/program/cover/' . $program->photo) }}');">
                                    <div class="layer p-5 rounded">
                                        <p class="mb-1">Programs</p>
                                        <h4 class="fw-bold">{{ $program->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Workout -->
        <div class="menu-section row">
            <div class="description text-center col-lg-6 col-sm-12 mx-auto">
                <h3 class="content-header">Workout</h3>
                <p class="content-description">
                    Aktivitas olahraga yang dilakukan untuk meningkatkan dan memelihara
                    kebugaran tubuh
                </p>
            </div>
            <div class="featured-card mt-4">
                <div class="row">
                    @foreach ($workouts as $workout)
                        <div class="col-lg-6 col-sm-12 mb-3">
                            <a href="/workout/{{ $workout->slug }}">
                                <div class="programs-card p-5 mb-3 rounded"
                                    style="background-image: url('{{ asset('assets/images/workout/cover/' . $workout->photo) }}');">
                                    <div class="layer p-5 rounded">
                                        <p class="mb-1">Workout</p>
                                        <h4 class="fw-bold">{{ $workout->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Healthy Foods -->
        <div class="menu-section row">
            <div class="description text-center col-lg-6 col-sm-12 mx-auto">
                <h3 class="content-header">Healthy Foods</h3>
                <p class="content-description">
                    Kumpulan berbagai resep makanan sehat dan meal plan
                </p>
            </div>
            <div class="featured-card mt-4">
                <div class="row">
                    @foreach ($mealplans as $mealplan)
                        <div class="col-lg-6 col-sm-12 mb-3">
                            <a href="/food-recipe/{{ $mealplan->slug }}">
                                <div class="programs-card p-5 mb-3 rounded"
                                    style="background-image: url({{ asset('assets/images/foodrecipe/cover/' . $mealplan->photo) }});">
                                    <div class="layer p-5 rounded">
                                        <p class="mb-1">Healthy Foods</p>
                                        <h4 class="fw-bold">{{ $mealplan->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Saran -->
        <div class="menu-section row">
            <div class="col-lg-4 col-sm-12 mb-3">
                <h3 class="content-header text-center text-md-start">Saran</h3>
                <p class="text-center text-md-start">
                    Masukan dan saran anda akan sangat membantu kami untuk mengembangkan
                    SiWON menjadi lebih baik
                </p>
                @if (session()->has('home'))
                    <div class="alert alert-success" role="alert">
                        {{ session('home') }}
                    </div>
                @endif
            </div>
            <div class="col-lg-6 col-sm-12 mb-3 ms-auto">
                <form action="/" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input name="name" type="name" class="form-control" id="name" aria-describedby="name"
                            placeholder="Nama" />
                        @error('name')
                            <div class="small text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email"
                            placeholder="Email" />
                        @error('email')
                            <div class="small text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" id="pesan" rows="3"
                            placeholder="Kritik dan Saran"></textarea>
                        @error('message')
                            <div class="small text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        {!! htmlFormSnippet() !!}
                        @error('g-recaptcha-response')
                            <div class="small text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <button class="btn btn-danger" type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
