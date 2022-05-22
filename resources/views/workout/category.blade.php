@extends('layout.main')
{{--
    Halaman yang menampilkan daftar workout yang ada sesuai dengan kategorinya. Penampilan poster dengan memanggil dari database.

    Kemudian untuk pagination menggunakan {{ $workouts->links() }} untuk menampilkan pilihan paginate
--}}
@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5" style="background-image: url({{ asset('assets/images/workout/workout-background.jpg') }});">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">{{ $data['title'] }}</h1>
                        <p>
                            {{ $data['description'] }}
                        </p>
                        <a class="btn btn-danger" href="#main-content">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div id="main-content" class="container">
        <!-- Workouts -->
        <div class="menu-section row">
            <div class="featured-card mt-5">
                <div class="row align-items-end">
                    @foreach ($workouts as $workout)
                        <div class="col-lg-4 col-12 mb-5">
                            <a href="/workout/{{ $workout->slug }}" style="text-decoration: none; color: black;">
                                <div class="category-card text-center">
                                    <h6 class="p-2 w-50 mx-auto border border-5">
                                        {{ $workout->name }}
                                    </h6>
                                    <div></div>
                                    <img class="mt-auto"
                                        src="{{ asset('assets/images/workout/cover/' . $workout->photo) }}" alt=""
                                        width="50%" height="220px" style="object-fit: cover"/>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Pagination --}}
        <div class="mt-5 d-flex justify-content-center">
            {{ $workouts->links() }}
        </div>
    </div>
@endsection
