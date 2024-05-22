@extends('auth.layouts.main')
@section('auth-content')

        <!-- Login Form Start -->
        <div class="col-lg-12 col-md-12 col-12 align-self-center my-10 px-3">
            <div class="login-form">

                <div class="head">
                    <h3 class="title"><span class="fw-700">{{ env('APP_NAME') }}</span>
                        <hr>
                        <br> Sign in to your account</h3>
                </div>

                <form id="loginForm" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row mb-n6">
                        <div class="col-12 mb-6">
                            <label class="form-label fw-600" for="email_address">Email</label>
                            <input type="email" id="email_address" maxlength="50" name="email_address" class="form-control"
                                   placeholder="Enter email">
                        </div>
                        <div class="col-12 mb-6">
                            <label class="form-label fw-600" for="password">Password</label>
                            <input type="password" id="password" maxlength="50" name="password" class="form-control"
                                   placeholder="Enter password">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label fw-600 mb-0 mt-2 text-end"><a href="{{ route('register') }}">Register</a></label>
                                <label class="form-label fw-600 mb-0 mt-2 text-end"><a href="{{ route('password.request') }}">Forget password?</a></label>
                            </div>
                        </div>
                        <div class="col-12 mb-6">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- Login Form End -->

        <!-- Login Form BG Image End -->
@endsection
