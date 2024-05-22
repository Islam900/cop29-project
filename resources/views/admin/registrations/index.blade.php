@extends('admin.layouts.app')
@section('title', 'COP29 - Registrations')
@section('page-title', 'Registrations')
@section('content')

    <div class="col-12 mb-6">
        <div class="card">
{{--            <div class="card-head border-bottom">export excel--}}
{{--            </div>--}}
            <div class="card-body">
                <table class="table table-bordered data-table registrations-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Full name</th>
                        <th>Passport number</th>
                        <th>Company name</th>
                        <th>Job title</th>
                        <th>Mobile number</th>
                        <th>Represent</th>
                        <th>Email</th>
                        <th>Confirmation status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($registrations as $registration)
                        <tr>
                            <td>{{ $registration->id }}</td>
                            <td>{{ $registration->full_name }}</td>
                            <td>{{ $registration->passport_number }}</td>
                            <td>{{ $registration->company_name }}</td>
                            <td>{{ $registration->job_title }}</td>
                            <td>{{ $registration->mobile_number }}</td>
                            <td>{{ $registration->represent }}</td>
                            <td>{{ $registration->email_address }}</td>
                            <td>
                                <div class="form-check form-switch form-check-inline">
                                    <input class="form-check-input confirmed-status" name="confirmed_status"
                                           type="checkbox" data-registration-id="{{ $registration->id }}"
                                           id="exampleSwitch6" @if($registration->confirmed_status) checked @endif>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Export Data Table End-->

@endsection

@section('js-code')
    <script>
        $(document).ready(function () {
            $('.registrations-table').DataTable({
                responsive: true,
                language: {
                    paginate: {
                        previous: '',
                        next: ''
                    }
                }
            });

            $('.confirmed-status').on("change", function () {
                const registration_id = $(this).data('registration-id');
                const confirmed_status = $(this).is(':checked') ? 1 : 0; // Değişken tanımlamalarını düzeltme

                Swal.fire({
                    title: "Are you sure?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Confirm"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/admin/users/update/",
                            type: "PUT",
                            data: {
                                "_token": "{{csrf_token()}}",
                                "confirmed_status": confirmed_status,
                                "registration_id": registration_id
                            },
                            success: function (response) {
                                Swal.fire({
                                    title: 'Success',
                                    text: response.message,
                                    icon: response.status ? 'success' : 'error'
                                });
                            }
                        })
                    } else {
                        if (confirmed_status == 1) {
                            $(this).prop('checked', false);
                        } else {
                            $(this).prop('checked', true);
                        }
                    }
                });
            });

        })
    </script>
@endsection


