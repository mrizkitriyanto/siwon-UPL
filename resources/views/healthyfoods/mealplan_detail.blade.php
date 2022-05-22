@extends('layout.main')

@section('content')
    <!-- Content -->
    <div id="main-content" class="container">

        <!--gambar program-->
        <div class="menu-section row">
            <div class="featured-card">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12 px-5">
                        <div class="category-card mt-5">
                            <img src="{{ asset('assets/images/mealplan/poster/' . $mealplan->poster) }}" alt=""
                                width="100%" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- keterangan program -->
        <div class="menu-section row mt-5">
            <div class="description col-lg-8 col-sm-12 mt-5 mx-auto ps-5">
                <p class="content-description">
                    {{ $mealplan->description }}
                </p>
            </div>
            <div class="col-lg-4 col-12 my-auto">
                <a href="/meal-plan/download/{{ $mealplan->slug }}">
                    <img src="{{ asset('assets/images/download.png') }}" alt="" width="40%" />
                </a>
            </div>
        </div>
    </div>
@endsection
