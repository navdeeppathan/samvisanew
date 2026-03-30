@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

    <a href="{{ route('admin.morocco.visa.index') }}" class="btn btn-secondary mb-4">← Back</a>

    <h2 class="mb-4">Morocco Visa Application Details</h2>

    <!-- PERSONAL -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white">Personal Info</div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $application->surname }} {{ $application->first_name }} {{ $application->middle_name }}</p>
            <p><strong>DOB:</strong> {{ $application->dob }}</p>
            <p><strong>Nationality:</strong> {{ $application->nationality }}</p>
            <p><strong>Country of Birth:</strong> {{ $application->country_of_birth }}</p>
            <p><strong>Marital Status:</strong> {{ $application->marital_status }}</p>
            <p><strong>Occupation:</strong> {{ $application->occupation }}</p>
        </div>
    </div>

    <!-- CONTACT -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Contact</div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $application->email }}</p>
            <p><strong>Phone:</strong> {{ $application->mobile_phone }}</p>
        </div>
    </div>

    <!-- ADDRESS -->
    <div class="card mb-4">
        <div class="card-header bg-info text-white">Address</div>
        <div class="card-body">
            {{ $application->home_door }},
            {{ $application->home_street }},
            {{ $application->home_city }},
            {{ $application->home_postcode }},
            {{ $application->home_country }}
        </div>
    </div>

    <!-- FAMILY -->
    <div class="card mb-4">
        <div class="card-header">Family</div>
        <div class="card-body">
            <p><strong>Father:</strong> {{ $application->father_full_name }}</p>
            <p><strong>Mother:</strong> {{ $application->mother_full_name }}</p>
        </div>
    </div>

    <!-- TRAVEL -->
    <div class="card mb-4">
        <div class="card-header bg-success text-white">Travel</div>
        <div class="card-body">
            <p><strong>Departure:</strong> {{ $application->departure_date }}</p>
            <p><strong>Return:</strong> {{ $application->return_date }}</p>
            <p><strong>Destination:</strong> {{ $application->destination_city }}</p>
            <p><strong>Purpose:</strong> {{ $application->visit_purpose }}</p>
            <p><strong>Accommodation:</strong> {{ $application->accommodation }}</p>
            <p><strong>Accommodation Phone:</strong> {{ $application->accommodation_phone }}</p>

        </div>
    </div>

    <!-- DOCUMENTS -->
    <div class="card mb-4">
        <div class="card-header">Documents</div>
        <div class="card-body row">

            @foreach([
                'passport_scan' => 'Passport Scan',
                'passport_photo' => 'Passport Photo',
                'uk_visa_copy' => 'UK Visa Copy',
                'bank_statements' => 'Bank Statement',
                'payslips' => 'Payslip'
            ] as $field => $label)

                @if($application->$field)
                <div class="col-md-3 mb-3">
                    <label>{{ $label }}</label>
                    <img src="{{ asset($application->$field) }}" class="img-fluid border rounded">
                </div>
                @endif

            @endforeach

        </div>
    </div>

    <!-- EXTRA -->
    <div class="card mb-4">
        <div class="card-header">Other</div>
        <div class="card-body">
            <p><strong>UK Sharecode:</strong> {{ $application->uk_sharecode }}</p>
            <p><strong>Message:</strong> {{ $application->message }}</p>
        </div>
    </div>

</div>

@endsection