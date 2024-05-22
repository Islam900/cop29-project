@extends('auth.layouts.main')
@section('auth-content')
    <!-- Login Form Start -->

    <div class="col-lg-12 col-md-12 col-12 align-self-center my-10 px-3">
        <div class="login-form" id="enter-otp-section">

            <div class="head">
                <h3 class="title"><span class="fw-700">{{ env('APP_NAME') }}</span> <br> Enter OTP Code</h3>
            </div>
            <form action="{{ route('new-password') }}" method="post" id="checkOtp">
                @csrf
                <div class="row mb-n6">
                    <div class="col-3">
                        <input type="number" name="otp1" maxlength="1" class="form-control">
                    </div>
                    <div class="col-3">
                        <input type="number" name="otp2" maxlength="1" class="form-control">
                    </div>
                    <div class="col-3">
                        <input type="number" name="otp3" maxlength="1" class="form-control">
                    </div>
                    <div class="col-3">
                        <input type="number" name="otp4" maxlength="1" class="form-control">
                    </div>
                    <div class="col-12 mb-6 mt-6">
                        <button type="submit" class="btn btn-primary w-100">Confirm</button>
                    </div>
                </div>
            </form>
        </div>

    </div><!-- Login Form End -->

    <!-- Login Form BG Image End -->
@endsection

@section('js-code')

    <script>

        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('input', function (e) {
                const value = e.target.value;

                if (value.length > 1) {
                    e.target.value = value.charAt(0);
                }

                if(value){
                    const formElements = Array.from(document.querySelectorAll('input, button, select, textarea, a[href]'));
                    const currentIndex = formElements.indexOf(e.target);
                    if (currentIndex > -1 && currentIndex < formElements.length - 1) {
                        formElements[currentIndex + 1].focus();
                    }
                }
            });
        })
    </script>

@endsection
