@extends('layout.main-layout')

@section('konten')
    <div class="container" style="margin-top: 3%; min-height: 427px">
        <div class="row justify-content-center">
            <div class="col-lg-4">

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('errorLogin'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('errorLogin') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="text-center">
                            <img class="mb-2" src="{{ URL::asset('/assets/logo-square.png') }}" alt=""
                                width="100">
                        </div>
                        <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>

                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="name@example.com" required value="{{ old('email') }}" autofocus>
                            <label for="email">Alamat Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-custom my-3" type="submit">Login</button>
                    </form>
                    {{-- {{ route('google.login') }} --}}
                    <small class="d-block text-center">Belum Punya Akun? <a href="/register">Daftar Sekarang</a> </small>
                </main>
            </div>
        </div>
    </div>
@endsection