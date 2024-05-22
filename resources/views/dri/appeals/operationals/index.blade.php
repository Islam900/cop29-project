@extends('dri.layouts.app')
@section('title', 'DRI - Operationals')
@section('content')

    <div class="col-12 mb-6">
        <div class="card">
            <div class="card-head border-bottom d-flex justify-content-between align-items-center">
{{--                <button class="btn btn-warning">EXPORT EXCEL</button>--}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Service type</th>
                            <th>Period</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Zone</th>
                            <th>Indoor or outdoor use</th>
                            <th>Manufacturer</th>
                            <th>Handheld model</th>
                            <th>Number of Handheld units</th>
                            <th>Belt pack Model</th>
                            <th>Number of Beltpack units</th>
                            <th>Max Power Output / Required Radiated Power
                                [mW]</th>
                            <th>Antenna Height [m]</th>
                            <th>Antenna Gain [dB]</th>
                            <th>Frequency Range Start [MHz]</th>
                            <th>Frequency Range End [MHz]</th>
                            <th>Tuning Step [KHz]</th>
                            <th>Tuning Step [KHz]</th>
                            <th>Bandwidth [KHz]</th>
                            <th>Customs Clearance</th>
                            <th>Additional comments</th>
                            <th>Data sheet</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($operationals as $oper)
                            <tr>
                                <td>{{ $oper->id }}</td>
                                <td>{{ $oper->service_type }}</td>
                                <td>{{ $oper->period }}</td>
                                <td>{{ $oper->start_date }}</td>
                                <td>{{ $oper->end_date }}</td>
                                <td>{{ $oper->zone }}</td>
                                <td>{{ $oper->in_out_use }}</td>
                                <td>{{ $oper->manufacturer }}</td>
                                <td>{{ $oper->hand_model }}</td>
                                <td>{{ $oper->hand_units }}</td>
                                <td>{{ $oper->belt_pack_model }}</td>
                                <td>{{ $oper->belt_pack_units }}</td>
                                <td>{{ $oper->power_output }}</td>
                                <td>{{ $oper->antenna_height }}</td>
                                <td>{{ $oper->antenna_gain }}</td>
                                <td>{{ $oper->frequency_range_start }}</td>
                                <td>{{ $oper->frequency_range_end }}</td>
                                <td>{{ $oper->tuning_step }}</td>
                                <td>{{ $oper->bandwidth }}</td>
                                <td>{{ $oper->customs_clearance }}</td>
                                <td>{{ $oper->comments }}</td>
                                <td>{{ $oper->data_sheet }}</td>
                                <td>{{ $oper->data_sheet }}</td>
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


