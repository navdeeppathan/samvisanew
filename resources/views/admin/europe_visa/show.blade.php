@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

<a href="{{ route('admin.visa.show.all') }}" class="btn btn-secondary mb-4">← Back</a>

<h2 class="mb-4">Europe Visa Application Details</h2>

<form method="POST" action="{{ route('admin.europe.application.send.correction', $application->id) }}">
@csrf

<!-- PERSONAL -->
<div class="card mb-4">
<div class="card-header bg-dark text-white">Personal Information</div>
<div class="card-body row">

<div class="col-md-6">
<p><input type="checkbox" name="fields[]" value="surname">
<strong>Name:</strong> {{ $application->surname }} {{ $application->first_name }} {{ $application->middle_name }}</p>

<p><input type="checkbox" name="fields[]" value="dob">
<strong>DOB:</strong> {{ $application->dob }}</p>

<p><input type="checkbox" name="fields[]" value="nationality">
<strong>Nationality:</strong> {{ $application->nationality }}</p>

<p><input type="checkbox" name="fields[]" value="country_of_birth">
<strong>Country of Birth:</strong> {{ $application->country_of_birth }}</p>

<p><input type="checkbox" name="fields[]" value="marital_status">
<strong>Marital Status:</strong> {{ $application->marital_status }}</p>
</div>

<div class="col-md-6">
<p><input type="checkbox" name="fields[]" value="passport_number">
<strong>Passport No:</strong> {{ $application->passport_number }}</p>

<p><input type="checkbox" name="fields[]" value="passport_issue">
<strong>Issue Date:</strong> {{ $application->passport_issue }}</p>

<p><input type="checkbox" name="fields[]" value="passport_expiry">
<strong>Expiry Date:</strong> {{ $application->passport_expiry }}</p>
</div>

</div>
</div>

<!-- CONTACT -->
<div class="card mb-4">
<div class="card-header bg-primary text-white">Contact</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="email">
<strong>Email:</strong> {{ $application->email }}</p>

<p><input type="checkbox" name="fields[]" value="mobile_phone">
<strong>Phone:</strong> {{ $application->mobile_phone }}</p>

</div>
</div>

<!-- ADDRESS -->
<div class="card mb-4">
<div class="card-header bg-info text-white">Home Address</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="home_door"> {{ $application->home_door }}</p>
<p><input type="checkbox" name="fields[]" value="home_street"> {{ $application->home_street }}</p>
<p><input type="checkbox" name="fields[]" value="home_city"> {{ $application->home_city }}</p>
<p><input type="checkbox" name="fields[]" value="home_postcode"> {{ $application->home_postcode }}</p>
<p><input type="checkbox" name="fields[]" value="home_country"> {{ $application->home_country }}</p>

</div>
</div>

<!-- EMPLOYMENT -->
<div class="card mb-4">
<div class="card-header bg-warning">Employment</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="company_name"> Company: {{ $application->company_name }}</p>
<p><input type="checkbox" name="fields[]" value="occupation"> Occupation: {{ $application->occupation }}</p>

<p><input type="checkbox" name="fields[]" value="work_door"> {{ $application->work_door }}</p>
<p><input type="checkbox" name="fields[]" value="work_street"> {{ $application->work_street }}</p>
<p><input type="checkbox" name="fields[]" value="work_city"> {{ $application->work_city }}</p>
<p><input type="checkbox" name="fields[]" value="work_postcode"> {{ $application->work_postcode }}</p>
<p><input type="checkbox" name="fields[]" value="work_country"> {{ $application->work_country }}</p>

<p><input type="checkbox" name="fields[]" value="work_phone"> {{ $application->work_phone }}</p>
<p><input type="checkbox" name="fields[]" value="work_email"> {{ $application->work_email }}</p>

</div>
</div>

<!-- TRAVEL -->
<div class="card mb-4">
<div class="card-header bg-success text-white">Travel</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="departure_date"> {{ $application->departure_date }}</p>
<p><input type="checkbox" name="fields[]" value="return_date"> {{ $application->return_date }}</p>
<p><input type="checkbox" name="fields[]" value="destination_city"> {{ $application->destination_city }}</p>
<p><input type="checkbox" name="fields[]" value="visit_purpose"> {{ $application->visit_purpose }}</p>

</div>
</div>

<!-- DOCUMENTS -->
{{-- <div class="card mb-4">
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
<div class="col-md-3 mb-3 text-center">
<label>
<input type="checkbox" name="fields[]" value="{{ $field }}">
{{ $label }}
</label>
<img src="{{ asset($application->$field) }}" class="img-fluid border rounded mt-2">
</div>
@endif

@endforeach

</div>
</div> --}}

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

@php
$file = $application->$field;
$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
@endphp

<div class="col-md-3 mb-3 text-center">
    <label>
        <input type="checkbox" name="fields[]" value="{{ $field }}">
        {{ $label }}
    </label>

    @if(in_array($ext, ['jpg','jpeg','png','webp']))
        <!-- IMAGE -->
        <img src="{{ asset($file) }}" class="img-fluid border rounded mt-2">

    @elseif($ext === 'pdf')
        <!-- PDF -->
        <div class="border rounded p-3 mt-2">
            <p>📄 PDF Document</p>
            <a href="{{ asset($file) }}" target="_blank" class="btn btn-sm btn-primary">
                View PDF
            </a>
        </div>

    @else
        <!-- OTHER FILE -->
        <a href="{{ asset($file) }}" target="_blank" class="btn btn-sm btn-secondary mt-2">
            Download File
        </a>
    @endif

</div>
@endif

@endforeach

</div>
</div>

<!-- MESSAGE -->
<div class="card mb-4">
<div class="card-header bg-danger text-white">Send Correction</div>
<div class="card-body">

<textarea name="message" class="form-control mb-3" required></textarea>

<button id="submitBtn" class="btn btn-danger" disabled>Send Email</button>

<small class="text-muted d-block mt-2">
   <i class="fas fa-info-circle"></i> Select the fields that need correction. At least one field must be selected to enable sending.
</small>

</div>
</div>

</form>

</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('input[name="fields[]"]');
    const submitBtn = document.getElementById('submitBtn');

    function toggleButton() {
        const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
        submitBtn.disabled = !anyChecked;
    }

    checkboxes.forEach(cb => {
        cb.addEventListener('change', toggleButton);
    });
});
</script>

@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Success',
    text: "{{ session('success') }}",
    confirmButtonColor: '#1a4aab'
});
</script>
@endif

@endsection