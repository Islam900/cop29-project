@extends('auth.layouts.main')
@section('auth-content')
    <!-- Login Form Start -->
    <div class="col-lg-6 col-12 align-self-center my-10 px-3">
        <div class="login-rtegister-form">

            <div class="head">
                <h3 class="title"><span class="fw-700">{{ env('APP_NAME') }}</span> <br> Enter your registration email for reset password</h3>
            </div>

            <form id="sendPasswordToEmail" action="{{ route('resetPassword') }}" method="POST">
                @csrf
                <div class="row mb-n6">
                    <div class="col-12 mb-6">
                        <label class="form-label fw-600" for="email">Email</label>
                        <input type="email" id="email" maxlength="50" name="email" class="form-control"
                               placeholder="Enter email">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="form-label fw-600 mb-0 mt-2"><a href="{{ route('register') }}">Register</a></label>
                            <label class="form-label fw-600 mb-0 mt-2 text-end"><a href="{{ route('login') }}">Login</a></label>
                        </div>
                    </div>
                    <div class="col-12 mb-6">
                        <button type="submit" class="btn btn-primary w-100">Send password</button>
                    </div>
                </div>
            </form>

        </div>
    </div><!-- Login Form End -->

    <!-- Login Form BG Image Start -->
    <div class="col-lg-6 col-12 d-none d-lg-block">
        <div class="authentication-bg-image"
             style="background-image: url({{ asset('assets/images/authentication/login-bg.jpg') }});"></div>
    </div>
    <!-- Login Form BG Image End -->
@endsection
