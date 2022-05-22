@extends('layout.main')

@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5"
            style="background-image: url('{{ asset('assets/images/healthy_foods/jumbotron.png') }}')">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Healthy Foods</h1>
                        <p>
                            Maksimalkan gaya hidup sehat kamu dengan
                            mengkonsumsi berbagai menu makanan
                            sehat yang disediakan oleh SIWON.
                        </p>
                        <a class="btn btn-danger" href="#main-content">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div id="main-content" class="container">
        <!-- Kategori -->
        <div class="menu-section row">
            <div class="description text-center col-lg-6 col-sm-12 mx-auto">
                <h3 class="content-header">Kategori</h3>
                <p class="content-description">
                    Terdapat pilihan meal plan dan resep makanan
                    yang dapat kamu ikuti
                </p>
            </div>
            <div class="featured-card mt-4">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <a href="/meal-plan">
                            <div class="programs-card p-5 mb-3 rounded"
                                style="background-image: url('assets/images/healthy_foods/meal-plan-home.png');">
                                <div class="layer p-5 rounded">
                                    <h4 class="fw-bold">Meal Plan</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <a href="/food-recipes">
                            <div class="programs-card p-5 mb-3 rounded"
                                style="background-image: url('assets/images/healthy_foods/resep-makanan-home.png');">
                                <div class="layer p-5 rounded">
                                    <h4 class="fw-bold">Resep Makanan</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Healthy Foods -->
        <div class="menu-section row">
            <div class="description text-center col mx-auto">
                <h3 class="content-header">Rekomendasi Kami</h3>
                <p class="content-description">
                    Menu makanan sehat yang mudah untuk dibuat
                </p>
            </div>
            <div class="featured-card mt-4">
                <div class="row">
                    @foreach ($recipes as $recipe)
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <a href="/food-recipe/{{ $recipe->slug }}">
                            <div class="programs-card p-5 mb-3 rounded" 
                                style="background-image: url('{{ asset('assets/images/foodrecipe/cover/' . $recipe->photo) }}');">
                                <div class="layer p-5 rounded">
                                    <p class="mb-1">Healthy Foods</p>
                                    <h4 class="fw-bold">{{ $recipe->name }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
