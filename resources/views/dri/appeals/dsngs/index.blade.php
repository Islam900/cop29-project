@extends('dri.layouts.app')
@section('title', 'DRI - DSNG')
@section('content')

    <div class="col-12 mb-6">
        <div class="card">
            <div class="card-head border-bottom d-flex justify-content-between align-items-center">
                <button class="btn btn-warning">EXPORT EXCEL</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Organization</th>
                            <th>Email address</th>
                            <th>Phone number</th>
                            <th>Fullname</th>
                            <th>Period</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Zone</th>
                            <th>Vehicle Mounted / Flyaway</th>
                            <th>Vehicle Make</th>
                            <th>Vehicle Model</th>
                            <th>Vehicle Registration Number</th>
                            <th>Corresponding Studio Name</th>
                            <th>Corresponding Studio City</th>
                            <th>Satellite Network / Satellite Name</th>
                            <th>Satellite Orbital Position</th>
                            <th>Coder Equipment Manufacturer</th>
                            <th>Coder Equipment Model</th>
                            <th>Antenna Manufacturer</th>
                            <th>Antenna Model</th>
                            <th>Antenna Gain[dBi]</th>
                            <th>Antenna Frequency Range Start [MHz]</th>
                            <th>Antenna Frequency Range End [MHz]</th>
                            <th>Coder Equipment Frequency min [MHz]</th>
                            <th>Coder Equipment Frequency max [MHz]</th>
                            <th>Customs Clearance</th>
                            <th>Additional Comments</th>
                            <th>Data Sheet</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($dsngs as $dsng)
                            <tr>
                                <td> 1</td>
                                <td>{{ $dsng->user->company_name }}</td>
                                <td>{{ $dsng->user->email_address }}</td>
                                <td>{{ $dsng->user->mobile_number }}</td>
                                <td>{{ $dsng->user->full_name }}</td>
                                <td>{{ $dsng->period }}</td>
                                <td>{{ $dsng->start_date }}</td>
                                <td>{{ $dsng->end_date }}</td>
                                <td>{{ $dsng->zone }}</td>
                                <td>{{ $dsng->vehicle_mounted }}</td>
                                <td>{{ $dsng->vehicle_make }}</td>
                                <td>{{ $dsng->vehicle_model }}</td>
                                <td>{{ $dsng->vehicle_registration_number }}</td>
                                <td>{{ $dsng->studio_name }}</td>
                                <td>{{ $dsng->studio_city }}</td>
                                <td>{{ $dsng->satellite_network }}</td>
                                <td>{{ $dsng->satellite_orbital_position }}</td>
                                <td>{{ $dsng->coder_equipment_manufacturer }}</td>
                                <td>{{ $dsng->coder_equipment_model }}</td>
                                <td>{{ $dsng->antenna_manufacturer }}</td>
                                <td>{{ $dsng->antenna_model }}</td>
                                <td>{{ $dsng->antenna_gain }}</td>
                                <td>{{ $dsng->antenna_freq_range_start }}</td>
                                <td>{{ $dsng->antenna_freq_range_end }}</td>
                                <td>{{ $dsng->coder_freq_min }}</td>
                                <td>{{ $dsng->coder_freq_max }}</td>
                                <td>{{ $dsng->customs_clearance }}</td>
                                <td>{{ $dsng->comments }}</td>
                                <td>{{ $dsng->data_sheet }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="23" class="text-primary text-center">
                                    <h3>
                                        <i>Table is empty</i>
                                    </h3>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!--Export Data Table End-->

@endsection

@section('js-code')
    <script>
        @if (session('success'))
        const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                container: 'send_success'
            },
            title: '{{ session()->get('success') }}',
            icon: 'success',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        Toast.fire();
        @php session()->forget('success') @endphp
        @endif

    </script>
@endsection


