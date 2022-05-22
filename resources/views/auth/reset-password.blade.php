@extends('layout.main')

@section('content')
    <!-- Jumbotron -->
    <div class="row mt-5">
        <div class="jumbotron py-5" style="background-image: url({{ asset('assets/images/homepage-jumbotron-1x.png') }});">
            <div class="container py-5">
                <div class="col-lg-6 col-12">
                    <div class="p-4 p-lg-5 bg-white rounded text-md-start text-sm-center">
                        <h1 class="header">Reset Password</h1>
                        <p>
                            Masukkan password baru yang akan anda gunakan.
                        </p>
                        <form action="/reset-password" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="mb-3">
                                <input name="email" type="text" class="form-control" id="email" placeholder="Email"
                                    value="{{ old('email') }}" required />
                                @error('password')
                                    <div class="small text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input name="password" type="password" class="form-control" id="password"
                                    placeholder="New Password" required />
                                @error('password')
                                    <div class="small text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input name="confirm-password" type="password" class="form-control" id="confirm-password"
                                    placeholder="Confirm Password" required />
                                @error('confirm-password')
                                    <div class="small text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-danger mt-3" type="submit">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
