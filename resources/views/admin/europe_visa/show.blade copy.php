@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

    <a href="{{ route('admin.europe.visa.index') }}" class="btn btn-secondary mb-4">← Back</a>

    <h2 class="mb-4">Europe Visa Application Details</h2>

    <!-- PERSONAL -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white">Personal Information</div>
        <div class="card-body row">
            <div class="col-md-6">
                <p><strong>Name:</strong> {{ $application->surname }} {{ $application->first_name }} {{ $application->middle_name }}</p>
                <p><strong>DOB:</strong> {{ $application->dob }}</p>
                <p><strong>Nationality:</strong> {{ $application->nationality }}</p>
                <p><strong>Country of Birth:</strong> {{ $application->country_of_birth }}</p>
                <p><strong>Marital Status:</strong> {{ $application->marital_status }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Passport No:</strong> {{ $application->passport_number }}</p>
                <p><strong>Issue Date:</strong> {{ $application->passport_issue }}</p>
                <p><strong>Expiry Date:</strong> {{ $application->passport_expiry }}</p>
            </div>
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
        <div class="card-header bg-info text-white">Home Address</div>
        <div class="card-body">
            {{ $application->home_door }},
            {{ $application->home_street }},
            {{ $application->home_city }},
            {{ $application->home_postcode }},
            {{ $application->home_country }}
        </div>
    </div>

    <!-- EMPLOYMENT -->
    <div class="card mb-4">
        <div class="card-header bg-warning">Employment</div>
        <div class="card-body">
            <p><strong>Company:</strong> {{ $application->company_name }}</p>
            <p><strong>Occupation:</strong> {{ $application->occupation }}</p>

            <p><strong>Work Address:</strong>
                {{ $application->work_door }},
                {{ $application->work_street }},
                {{ $application->work_city }},
                {{ $application->work_postcode }},
                {{ $application->work_country }}
            </p>

            <p><strong>Work Phone:</strong> {{ $application->work_phone }}</p>
            <p><strong>Work Email:</strong> {{ $application->work_email }}</p>
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
        </div>
    </div>

    <!-- HISTORY -->
    <div class="card mb-4">
        <div class="card-header">Travel History</div>
        <div class="card-body">
            <p><strong>Been to EU:</strong> {{ $application->been_to_eu }}</p>
        </div>
    </div>

    <!-- SPONSOR -->
    <div class="card mb-4">
        <div class="card-header bg-danger text-white">Sponsor</div>
        <div class="card-body">
            <p><strong>Sponsored:</strong> {{ $application->is_sponsored }}</p>
            <p><strong>Name:</strong> {{ $application->sponsor_name }}</p>
            <p><strong>Relation:</strong> {{ $application->sponsor_relationship }}</p>
            <p><strong>Phone:</strong> {{ $application->sponsor_phone }}</p>
            <p><strong>Address:</strong> {{ $application->sponsor_address }}</p>
        </div>
    </div>

    <!-- DOCUMENTS -->
    <div class="card mb-4">
        <div class="card-header">Documents</div>
        <div class="card-body row">

            @foreach([
                'passport_scan' => 'Passport',
                'bank_statements' => 'Bank',
                'payslips' => 'Payslip',
                'prev_eu_visa' => 'Previous Visa',
                'eu_relation_passport' => 'EU Relation Passport'
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

    <!-- MESSAGE -->
    <div class="card mb-4">
        <div class="card-header">Message</div>
        <div class="card-body">
            {{ $application->message }}
        </div>
    </div>

</div>

@endsection