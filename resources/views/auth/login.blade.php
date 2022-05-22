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
                            Silakan login untuk menyimpan progress program yang diikuti.
                        </p>
                        @if (session()->has('login-message'))
                            {!! session('login-message') !!}
                        @endif
                        <form action="/auth/login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input name="email" type="email" class="form-control" id="field-name" placeholder="Email"
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <div class="small text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input name="password" type="password" class="form-control" id="field-password"
                                    placeholder="Password" />
                                @error('password')
                                    <div class="small text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <a href="/auth/forgot-password"><small>Lupa password?</small></a><br />
                                <a href="/auth/register"><small>Buat akun baru</small></a>
                            </div>
                            <button class="btn btn-danger mt-3" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
