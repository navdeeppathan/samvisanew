@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

    <a href="{{ route('admin.ireland.visa.index') }}" class="btn btn-secondary mb-4">← Back</a>

    <h2 class="mb-4">Ireland Visa Details</h2>

    <!-- PERSONAL -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white">Personal</div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $application->surname }} {{ $application->first_name }} {{ $application->middle_name }}</p>
            <p><strong>DOB:</strong> {{ $application->dob }}</p>
            <p><strong>Nationality:</strong> {{ $application->nationality }}</p>
            <p><strong>Email:</strong> {{ $application->email }}</p>
            <p><strong>Phone:</strong> {{ $application->mobile_phone }}</p>
        </div>
    </div>

    <!-- PASSPORT -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Passport</div>
        <div class="card-body">
            <p><strong>Number:</strong> {{ $application->passport_number }}</p>
            <p><strong>Issue:</strong> {{ $application->passport_issue }}</p>
            <p><strong>Expiry:</strong> {{ $application->passport_expiry }}</p>

            @if($application->passport_scan)
                <img src="{{ asset($application->passport_scan) }}" class="img-fluid border rounded mt-2" width="200">
            @endif
        </div>
    </div>

    <!-- PREVIOUS PASSPORT -->
    <div class="card mb-4">
        <div class="card-header">Previous Passport</div>
        <div class="card-body">
            <p>{{ $application->prev_passport_number }}</p>

            @foreach(['prev_passport_1','prev_passport_2'] as $field)
                @if($application->$field)
                    <img src="{{ asset($application->$field) }}" class="img-fluid border rounded m-2" width="150">
                @endif
            @endforeach
        </div>
    </div>

    <!-- ADDRESS -->
    <div class="card mb-4">
        <div class="card-header">Address</div>
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
        <div class="card-header">Employment</div>
        <div class="card-body">
            <p>{{ $application->company_name }} ({{ $application->job_title }})</p>
            <p>{{ $application->occupation }}</p>
        </div>
    </div>

    <!-- TRAVEL -->
    <div class="card mb-4">
        <div class="card-header">Travel</div>
        <div class="card-body">
            <p><strong>Departure:</strong> {{ $application->departure_date }}</p>
            <p><strong>Return:</strong> {{ $application->return_date }}</p>
            <p><strong>Purpose:</strong> {{ $application->visit_purpose }}</p>
            <p><strong>Accommodation:</strong> {{ $application->accommodation }}</p>
            <p><strong>Accommodation Phone:</strong> {{ $application->accommodation_phone }}</p>

        </div>
    </div>

    <!-- FAMILY -->
    <div class="card mb-4">
        <div class="card-header bg-warning">Family</div>
        <div class="card-body">
            <p><strong>Spouse:</strong> {{ $application->spouse_name }}</p>

            @if($application->spouse_passport)
                <img src="{{ asset($application->spouse_passport) }}" width="150">
            @endif

            <hr>

            <p><strong>Children:</strong> {{ $application->num_children }}</p>

            @php
                $children = json_decode($application->children_passports, true);
            @endphp

            @if($children)
                @foreach($children as $child)
                    <img src="{{ asset($child) }}" width="120" class="m-1 border">
                @endforeach
            @endif
        </div>
    </div>

    <!-- DOCUMENTS -->
    <div class="card mb-4">
        <div class="card-header">Documents</div>
        <div class="card-body">

            @if($application->bank_statements)
                <p>Bank Statement:</p>
                <img src="{{ asset($application->bank_statements) }}" width="200">
            @endif

            @if($application->payslips)
                <p>Payslip:</p>
                <img src="{{ asset($application->payslips) }}" width="200">
            @endif

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