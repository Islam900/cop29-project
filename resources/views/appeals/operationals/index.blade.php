@extends('layouts.app')
@section('title', 'COP29 - Operationals')
@section('page-title', 'Operationals')
@section('content')

    <div class="col-12 mb-6">
        <div class="card">
            <div class="card-head border-bottom">export excel
            </div>
            <div class="card-body">
                <table class="table table-bordered data-table registrations-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Service type</th>
                        <th>Period</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Zone</th>
                        <th>Represent</th>
                        <th>Email</th>
                        <th>Confirmation status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($operationals as $oper)
                        <tr>
                            <td>{{ $registration->id }}</td>
                            <td>{{ $registration->full_name }}</td>
                            <td>{{ $registration->passport_number }}</td>
                            <td>{{ $registration->company_name }}</td>
                            <td>{{ $registration->job_title }}</td>
                            <td>{{ $registration->mobile_number }}</td>
                            <td>{{ $registration->represent }}</td>
                            <td>{{ $registration->email_address }}</td>
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
        })
    </script>
@endsection


