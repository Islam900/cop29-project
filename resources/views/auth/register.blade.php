@extends('auth.layouts.main')
@section('css-code')

@endsection
@section('auth-content')
    <style>
        .prefix-div .select2-selection--single {
            padding: 12px;
        }

        .represent-content .select2-selection--single {
            padding: 12px;
        }
    </style>
    <!-- Register Form Start -->
    <div class="col-lg-8 col-md-12 col-8 align-self-center my-10 px-3">
        <div class="login-rtegister-form">

            <div class="head">
                <h3 class="title"><span class="fw-700">{{ env('APP_NAME') }}</span>
                    <hr>
                    <br> Register
                </h3>
            </div>

            <form id="registerForm" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-n6">
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="full_name">Full name</label>
                        <input type="text" id="full_name" maxlength="50" name="full_name"
                               class="form-control error-class"
                               placeholder="Enter name and surname">
                    </div>
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="passport_number">Passport number</label>
                        <input type="text" id="passport_number" maxlength="50" name="passport_number"
                               class="form-control"
                               placeholder="Enter passport number">
                    </div>
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="company_name">Company name</label>
                        <input type="text" id="company_name" maxlength="50" name="company_name" class="form-control"
                               placeholder="Enter company name">
                    </div>
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="job_title">Job title</label>
                        <input type="text" id="job_title" maxlength="50" name="job_title" class="form-control"
                               placeholder="Enter job title">
                    </div>

                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="email_address">Email address</label>
                        <input type="email" id="email_address" maxlength="50" name="email_address" class="form-control"
                               placeholder="name@example.com">
                    </div>

                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="mobile_number">Mobile number</label>
                        <div class="input-group prefix-div">
                            <div class="select2-active">
                                <select name="prefix" id="prefix-select" class="form-select">
                                    @foreach($prefixes as $prefix)
                                        <option value="{{ $prefix['prefix'] }}" data-format="{{ $prefix['format'] }}">{{ $prefix['prefix'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" class="form-control" name="mobile_number" id="mobile_number">
                        </div>
                    </div>

                    <div class="col-12 mb-6">
                        <label class="form-label fw-600" for="represent-select">I represent</label>
                        <div class="select2-active represent-content">
                            <select name="represent" class="form-select" id="represent-select">
                                <option value="">Select</option>
                                @foreach($represents as $represent)
                                    <option value="{{ $represent }}">{{ $represent }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mt-2" id="represent-specify-div">
                            <input type="text" id="represent-specify" maxlength="250" name="represent_specify" class="form-control"
                                   placeholder="Please specify">
                        </div>
                    </div>



                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="password">Password</label>
                        <input type="password" id="password" maxlength="50" name="password" class="form-control"
                               placeholder="**********">
                    </div>

                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="confirm_password">Confirm password</label>
                        <input type="password" id="confirm_password" maxlength="50" name="confirm_password"
                               class="form-control"
                               placeholder="**********">
                        <label class="form-label fw-600 mb-0 mt-2 text-end"><a href="{{ route('login') }}">I have an
                                account</a></label>
                    </div>
                    <div class="col-12 mb-6">
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </div>
                </div>
            </form>

        </div>
    </div><!-- Register Form End -->

    <!-- Register Form BG Image Start -->
    <div class="col-lg-4 col-md-12 col-12 d-none d-lg-block">
        <div class="authentication-bg-image"
             style="background-image: url({{ asset('assets/images/authentication/login-bg.jpg') }});"></div>
    </div>
    <!-- Register Form BG Image End -->
@endsection

@section('js-code')
    <script>
        $(document).ready(function () {
            $('#represent-specify').hide();
            $('#represent-select').on("change", function () {
                if($(this).val() == "Other")
                {
                    $('#represent-specify').fadeIn(500);
                }
                else
                {
                    $('#represent-specify').val('');
                    $('#represent-specify').fadeOut(500);
                }
            });

        })


    </script>
@endsection

