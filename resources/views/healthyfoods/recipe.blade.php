@extends('layout.main')

@section('content')
    <!-- Programs -->
    <div class="row mt-5">
        <div class="jumbotron py-5" style="background-image: url('{{ asset('assets/images/foodrecipe/jumbotron.png') }}')">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Resep Makanan</h1>
                        <p>
                            Dapatkan berbagai resep makanan sehat yang mudah diikuti untuk mendukung gaya hidup sehatmu yang
                            baru
                        </p>
                        <a class="btn btn-danger" href="#main-content">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div id="main-content" class="container">
        <div class="featured-card mt-5">
            <div class="row align-items-end">
                <h3 class="content-header mt-5 text-center">Kumpulan Resep</h3>
                <p class="content-description mb-5 text-center">
                    Terdapat 20+ resep makanan sehat yang mudah diikuti
                </p>
                @foreach ($recipes as $recipe)
                    <div class="col-lg-4 col-12 mb-5 text-center">
                        <a href="/food-recipe/{{ $recipe->slug }}" style="text-decoration: none; color: black">
                            <div class="category-card text-center">
                                <h6 class="p-2 w-50 mx-auto border border-5">
                                    {{ $recipe->name }}
                                </h6>
                                <div></div>
                                <img class="mt-auto"
                                    src="{{ asset('assets/images/foodrecipe/cover/' . $recipe->photo) }}" alt=""
                                    width="50%" height="220px" style="object-fit: cover" />
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {!! $recipes->links() !!}
        </div>
    </div>
@endsection
