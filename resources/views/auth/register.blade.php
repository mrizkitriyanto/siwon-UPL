@extends('layout.main')

@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5" style="background-image: url({{ asset('assets/images/homepage-jumbotron-1x.png') }});">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Buat Akun Baru</h1>
                        <p>
                            Buat akun untuk menyimpan progress program yang kamu ikuti.
                        </p>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input name="email" type="email" class="form-control" id="field-email" placeholder="Email"
                                    value="{{ old('email') }}" required />
                                @error('email')
                                    <div class="small text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input name="name" type="text" class="form-control" id="field-name" placeholder="Nama"
                                    value="{{ old('name') }}" required />
                                @error('name')
                                    <div class="small text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input name="password" type="password" class="form-control" id="field-password"
                                    placeholder="Password" required />
                                @error('password')
                                    <div class="small text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input name="confirm-password" type="password" class="form-control"
                                    id="field-password-confirm" placeholder="Konfirmasi Password" required />
                                @error('confirm-password')
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
                            <div class="mb-3">
                                <a href="./login"><small>Sudah memiliki akun? Login</small></a><br>
                                <a href="./forgot-password"><small>Lupa password?</small></a>
                            </div>
                            <button class="btn btn-danger mt-3" type="submit">Buat Akun</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
