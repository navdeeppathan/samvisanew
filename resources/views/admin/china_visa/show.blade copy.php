@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

    <a href="{{ route('admin.china.visa.index') }}" class="btn btn-secondary mb-4">← Back</a>

    <h2 class="mb-4">China Visa Application Details</h2>

    <!-- PERSONAL INFO -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white">Personal Information</div>
        <div class="card-body row">
            <div class="col-md-6">
                <p><strong>Name:</strong> {{ $application->surname }} {{ $application->first_name }} {{ $application->middle_name }}</p>
                <p><strong>Country:</strong> {{ $application->country }}</p>
                <p><strong>City of Birth:</strong> {{ $application->city_of_birth }}</p>
                <p><strong>State of Birth:</strong> {{ $application->state_of_birth }}</p>
                <p><strong>Country of Birth:</strong> {{ $application->country_of_birth }}</p>
                <p><strong>Marital Status:</strong> {{ $application->marital_status }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Other Nationality:</strong> {{ $application->other_nationality }}</p>
                <p><strong>Nationality Name:</strong> {{ $application->other_nationality_name }}</p>
                <p><strong>Passport No:</strong> {{ $application->other_passport_number }}</p>
                <p><strong>Date:</strong> {{ $application->other_nationality_date }}</p>
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

    <!-- HOME ADDRESS -->
    <div class="card mb-4">
        <div class="card-header bg-info text-white">Home Address</div>
        <div class="card-body">
            <p>
                {{ $application->home_door }},
                {{ $application->home_street }},
                {{ $application->home_city }},
                {{ $application->home_postcode }},
                {{ $application->home_country }}
            </p>
        </div>
    </div>

    <!-- TRAVEL -->
    <div class="card mb-4">
        <div class="card-header bg-success text-white">Travel Details</div>
        <div class="card-body row">
            <div class="col-md-6">
                <p><strong>Departure:</strong> {{ $application->departure_date }}</p>
                <p><strong>Return:</strong> {{ $application->return_date }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Destination:</strong> {{ $application->destination_city }}</p>
                <p><strong>Occupation:</strong> {{ $application->occupation }}</p>
            </div>
        </div>
    </div>

    <!-- EMPLOYMENT -->
    <div class="card mb-4">
        <div class="card-header bg-warning">Employment</div>
        <div class="card-body">
            <p><strong>Company:</strong> {{ $application->company_name }}</p>
            <p><strong>Job Title:</strong> {{ $application->job_title }}</p>
            <p><strong>Income:</strong> {{ $application->annual_income }}</p>
            <p><strong>Duties:</strong> {{ $application->job_duties }}</p>
            <p><strong>Start Date:</strong> {{ $application->job_start_date }}</p>

            <hr>

            <p><strong>Work Address:</strong>
                {{ $application->work_door }},
                {{ $application->work_street }},
                {{ $application->work_city }},
                {{ $application->work_postcode }},
                {{ $application->work_country }}
            </p>

            <p><strong>Work Phone:</strong> {{ $application->work_phone }}</p>
            <p><strong>Supervisor:</strong> {{ $application->supervisor_name }}</p>
            <p><strong>Supervisor Phone:</strong> {{ $application->supervisor_phone }}</p>

            <p><strong>Work History:</strong> {{ $application->work_history }}</p>
        </div>
    </div>

    <!-- EDUCATION -->
    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">Education</div>
        <div class="card-body">
            <p><strong>School:</strong> {{ $application->school_name }}</p>
            <p><strong>Degree:</strong> {{ $application->degree }}</p>
            <p><strong>Subjects:</strong> {{ $application->subjects }}</p>
        </div>
    </div>

    <!-- FAMILY -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white">Family</div>
        <div class="card-body">

            <h6>Father</h6>
            <p>{{ $application->father_name }} | {{ $application->father_dob }} | {{ $application->father_nationality }} | {{ $application->father_occupation }}</p>

            <h6>Mother</h6>
            <p>{{ $application->mother_name }} | {{ $application->mother_dob }} | {{ $application->mother_nationality }} | {{ $application->mother_occupation }}</p>

            <h6>Spouse</h6>
            <p>{{ $application->spouse_name }} | {{ $application->spouse_dob }} | {{ $application->spouse_nationality }} | {{ $application->spouse_occupation }}</p>

        </div>
    </div>

    <!-- EMERGENCY -->
    <div class="card mb-4">
        <div class="card-header bg-danger text-white">Emergency Contact</div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $application->emergency_name }}</p>
            <p><strong>Relation:</strong> {{ $application->emergency_relationship }}</p>
            <p><strong>Phone:</strong> {{ $application->emergency_phone }}</p>
            <p><strong>Email:</strong> {{ $application->emergency_email }}</p>
        </div>
    </div>

    <!-- TRAVEL HISTORY -->
    <div class="card mb-4">
        <div class="card-header">Travel History</div>
        <div class="card-body">
            <p><strong>Been to China:</strong> {{ $application->been_to_china }}</p>
            <p><strong>Previous Visa:</strong> {{ $application->prev_china_visa }}</p>
            <p><strong>Fingerprint Date:</strong> {{ $application->prev_fingerprint_date }}</p>
            <p><strong>Other Countries:</strong> {{ $application->visited_countries }}</p>
        </div>
    </div>

    <!-- DECLARATIONS -->
    <div class="card mb-4">
        <div class="card-header">Declarations</div>
        <div class="card-body">
            <p><strong>Refused:</strong> {{ $application->china_refused }}</p>
            <p><strong>Criminal Record:</strong> {{ $application->criminal_record }}</p>
            <p><strong>Medical Condition:</strong> {{ $application->medical_condition }}</p>
            <p><strong>Military:</strong> {{ $application->military_service }}</p>
        </div>
    </div>

    <!-- DOCUMENTS -->
    <div class="card mb-4">
        <div class="card-header">Documents</div>
        <div class="card-body row">

            @foreach([
                'passport_scan' => 'Passport',
                'empty_pages' => 'Empty Pages',
                'selfie_photo' => 'Selfie',
                'bank_statements' => 'Bank',
                'payslips' => 'Payslip',
                'dbs_check' => 'DBS',
                'prev_visa' => 'Old Visa'
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

</div>

@endsection