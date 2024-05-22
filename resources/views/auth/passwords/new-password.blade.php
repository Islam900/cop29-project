@extends('auth.layouts.main')
@section('auth-content')
    <!-- Login Form Start -->

    <div class="col-lg-12 col-md-12 col-12 align-self-center my-10 px-3">
        <div class="login-form" id="enter-otp-section">

        <div class="login-form" id="enter-new-password-section">

            <div class="head">
                <h3 class="title"><span class="fw-700">{{ env('APP_NAME') }}</span> <br> Set new password</h3>
            </div>
            <form action="{{ route('update-password') }}" method="post" id="updatePassword">
                @csrf
                <div class="row mb-n6">
                    <div class="col-12 mb-6">
                        <label class="form-label fw-600" for="password">Password</label>
                        <input type="password" id="password" maxlength="50" name="password" class="form-control"
                               placeholder="**********">
                    </div>
                    <div class="col-12 mb-6">
                        <label class="form-label fw-600" for="password">Confirm password</label>
                        <input type="password" id="confirm_password" maxlength="50" name="confirm_password" class="form-control"
                               placeholder="**********">
                    </div>
                    <div class="col-12 mb-6 mt-6">
                        <button type="submit" class="btn btn-primary w-100">Update password</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- Login Form End -->

    <!-- Login Form BG Image End -->
@endsection
