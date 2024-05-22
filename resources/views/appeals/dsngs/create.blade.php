@extends('layouts.app')
@section('title', 'COP29 - DSNGS')
@section('content')

    <div class="card">
        <div class="card-body">
            <form id="registerForm" action="{{ route('user.dsngs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-n6">
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="organization">Organization name</label>
                        <input required type="text" id="organization" maxlength="50" name="organization" readonly
                               class="form-control error-class"
                               value="{{ \Illuminate\Support\Facades\Auth::user()->company_name }}">
                    </div>
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="email_address">Email address</label>
                        <input required type="text" id="email_address" maxlength="50" name="email_address" readonly
                               class="form-control error-class"
                               value="{{ \Illuminate\Support\Facades\Auth::user()->email_address }}">
                    </div>
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="mobile_number">Phone number</label>
                        <input required type="text" id="mobile_number" maxlength="50" name="mobile_number" readonly
                               class="form-control error-class"
                               value="{{ \Illuminate\Support\Facades\Auth::user()->mobile_number }}">
                    </div>
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="full_name">Full name</label>
                        <input required type="text" id="full_name" maxlength="50" name="full_name" readonly
                               class="form-control error-class"
                               value="{{ \Illuminate\Support\Facades\Auth::user()->full_name }}">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="period">Period</label>
                        <input required type="number" id="period" maxlength="50" name="period" class="form-control error-class">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="start_date">Start date</label>
                        <input required type="date" id="start_date" maxlength="50" name="start_date" class="form-control rdp-single-date">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="end_date">End date</label>
                        <input required type="date" id="end_date" maxlength="50" name="end_date" class="form-control rdp-single-date">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="zone" required>Zone</label>
                        <select name="zone" class="form-control" id="zone">
                            <option value="">Select zone</option>
                            <option value="Blue zone">Blue zone</option>
                            <option value="Green zone">Green zone</option>
                            <option value="All locations">All locations</option>
                        </select>
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="vehicle_mounted">Vehicle Mounted / Flyaway</label>
                        <input required type="text" id="vehicle_mounted" maxlength="50" name="vehicle_mounted" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="vehicle_make">Vehicle Make</label>
                        <input required type="text" id="vehicle_make" maxlength="50" name="vehicle_make" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="vehicle_model">Vehicle Model</label>
                        <input required type="text" id="vehicle_model" maxlength="50" name="vehicle_model" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="vehicle_registration_number">Vehicle Registration Number</label>
                        <input required type="text" id="vehicle_registration_number" maxlength="50" name="vehicle_registration_number" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="studio_name">Corresponding Studio Name</label>
                        <input required type="text" id="studio_name" maxlength="50" name="studio_name" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="studio_city">Corresponding Studio City</label>
                        <input required type="text" id="studio_city" maxlength="50" name="studio_city" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="satellite_network">Satellite Network / Satellite Name</label>
                        <input required type="text" id="satellite_network" maxlength="50" name="satellite_network" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="satellite_orbital_position">Satellite Orbital Position</label>
                        <input required type="text" id="satellite_orbital_position" maxlength="50" name="satellite_orbital_position" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="coder_equipment_manufacturer">Coder Equipment Manufacturer</label>
                        <input required type="text" id="coder_equipment_manufacturer" maxlength="50" name="coder_equipment_manufacturer" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="coder_equipment_model">Coder Equipment Model</label>
                        <input required type="text" id="coder_equipment_model" maxlength="50" name="coder_equipment_model" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="antenna_manufacturer">Antenna Manufacturer</label>
                        <input required type="text" id="antenna_manufacturer" maxlength="50" name="antenna_manufacturer" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="antenna_model">Antenna Model</label>
                        <input required type="text" id="antenna_model" maxlength="50" name="antenna_model" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="antenna_gain">Antenna Gain[dBi]</label>
                        <input required type="number" id="antenna_gain" maxlength="50" name="antenna_gain" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="antenna_freq_range_start">Antenna Frequency Range Start [MHz]</label>
                        <input required type="number" id="antenna_freq_range_start" maxlength="50" name="antenna_freq_range_start" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="antenna_freq_range_end">Antenna Frequency Range End [MHz]</label>
                        <input required type="number" id="antenna_freq_range_end" maxlength="50" name="antenna_freq_range_end" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="coder_freq_min">Coder Equipment Frequency Min [MHz]</label>
                        <input required type="number" id="coder_freq_min" maxlength="50" name="coder_freq_min" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="coder_freq_max">Coder Equipment Frequency Max [MHz]</label>
                        <input required type="number" id="coder_freq_max" maxlength="50" name="coder_freq_max" class="form-control">
                    </div>
                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="bandwidth">Customs Clearance </label>
                        <div class="form-check form-switch form-check-inline">
                            <input class="form-check-input" name="customs_clearance" type="checkbox" id="exampleSwitch6">
                            <label class="form-check-label" for="exampleSwitch6">Indicate if the equipment will be temporarily imported into the AZE.
                                If yes, then complete the CUSTOMS tab</label>
                        </div>
                    </div>

                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="data_sheet">Data Sheet</label>
                        <input required type="file" name="data_sheet" class="dropify" id="data_sheet" data-height="108">
                    </div>

                    <div class="col-3 mb-6">
                        <label class="form-label fw-600" for="comments">Additional comments</label>
                        <textarea name="comments" class="form-control" id="comments" cols="30" rows="10"></textarea>
                    </div>

                    <div class="col-12 mb-6">
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
