@extends('layout.main')

@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5" style="background-image: url({{ asset('assets/images/homepage-programs.png') }});">
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
        <!-- Programs -->
        <div class="menu-section row">
            <div class="featured-card mt-5">
                <div class="row align-items-end">
                    @foreach ($programs as $program)
                        <div class="col-lg-4 col-12 mb-5">
                            <a href="/programs/{{ $program->slug }}" style="text-decoration: none; color: black;">
                                <div class="category-card text-center">
                                    <h6 class="p-2 w-50 mx-auto border border-5">
                                        {{ $program->name }}
                                    </h6>
                                    <div></div>
                                    <img class="mt-auto"
                                        src="{{ asset('assets/images/program/cover/' . $program->photo) }}" alt=""
                                        width="50%" height="220px" style="object-fit: cover" />
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {!! $programs->links() !!}
        </div>
    </div>
@endsection
