@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

<a href="{{ route('admin.visa.show.all') }}" class="btn btn-secondary mb-4">← Back</a>

<h2 class="mb-4">China Visa Application Details</h2>

<form method="POST" action="{{ route('admin.application.send.correction', $application->id) }}">
@csrf

<!-- PERSONAL -->
<div class="card mb-4">
<div class="card-header bg-dark text-white">Personal Information</div>
<div class="card-body row">

<div class="col-md-6">

<p><input type="checkbox" name="fields[]" value="surname">
<strong>Name:</strong> {{ $application->surname }} {{ $application->first_name }} {{ $application->middle_name }}</p>

<p><input type="checkbox" name="fields[]" value="country">
<strong>Country:</strong> {{ $application->country }}</p>

<p><input type="checkbox" name="fields[]" value="city_of_birth">
<strong>City of Birth:</strong> {{ $application->city_of_birth }}</p>

<p><input type="checkbox" name="fields[]" value="state_of_birth">
<strong>State:</strong> {{ $application->state_of_birth }}</p>

<p><input type="checkbox" name="fields[]" value="country_of_birth">
<strong>Country of Birth:</strong> {{ $application->country_of_birth }}</p>

<p><input type="checkbox" name="fields[]" value="marital_status">
<strong>Marital Status:</strong> {{ $application->marital_status }}</p>

</div>

<div class="col-md-6">

<p><input type="checkbox" name="fields[]" value="other_nationality">
<strong>Other Nationality:</strong> {{ $application->other_nationality }}</p>

<p><input type="checkbox" name="fields[]" value="other_nationality_name">
<strong>Nationality Name:</strong> {{ $application->other_nationality_name }}</p>

<p><input type="checkbox" name="fields[]" value="other_passport_number">
<strong>Passport No:</strong> {{ $application->other_passport_number }}</p>

<p><input type="checkbox" name="fields[]" value="other_nationality_date">
<strong>Date:</strong> {{ $application->other_nationality_date }}</p>

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

<!-- HOME -->
<div class="card mb-4">
<div class="card-header bg-info text-white">Home Address</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="home_door"> Door: {{ $application->home_door }}</p>
<p><input type="checkbox" name="fields[]" value="home_street"> Street: {{ $application->home_street }}</p>
<p><input type="checkbox" name="fields[]" value="home_city"> City: {{ $application->home_city }}</p>
<p><input type="checkbox" name="fields[]" value="home_postcode"> Postcode: {{ $application->home_postcode }}</p>
<p><input type="checkbox" name="fields[]" value="home_country"> Country: {{ $application->home_country }}</p>

</div>
</div>

<!-- TRAVEL -->
<div class="card mb-4">
<div class="card-header bg-success text-white">Travel</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="departure_date"> Departure: {{ $application->departure_date }}</p>
<p><input type="checkbox" name="fields[]" value="return_date"> Return: {{ $application->return_date }}</p>
<p><input type="checkbox" name="fields[]" value="destination_city"> Destination: {{ $application->destination_city }}</p>
<p><input type="checkbox" name="fields[]" value="occupation"> Occupation: {{ $application->occupation }}</p>

</div>
</div>

<!-- EMPLOYMENT -->
<div class="card mb-4">
<div class="card-header bg-warning">Employment</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="company_name"> Company: {{ $application->company_name }}</p>
<p><input type="checkbox" name="fields[]" value="job_title"> Job Title: {{ $application->job_title }}</p>
<p><input type="checkbox" name="fields[]" value="annual_income"> Income: {{ $application->annual_income }}</p>
<p><input type="checkbox" name="fields[]" value="job_duties"> Duties: {{ $application->job_duties }}</p>
<p><input type="checkbox" name="fields[]" value="job_start_date"> Start Date: {{ $application->job_start_date }}</p>

<hr>

<p><input type="checkbox" name="fields[]" value="work_door"> Door: {{ $application->work_door }}</p>
<p><input type="checkbox" name="fields[]" value="work_street"> Street: {{ $application->work_street }}</p>
<p><input type="checkbox" name="fields[]" value="work_city"> City: {{ $application->work_city }}</p>
<p><input type="checkbox" name="fields[]" value="work_postcode"> Postcode: {{ $application->work_postcode }}</p>
<p><input type="checkbox" name="fields[]" value="work_country"> Country: {{ $application->work_country }}</p>

<p><input type="checkbox" name="fields[]" value="work_phone"> Phone: {{ $application->work_phone }}</p>
<p><input type="checkbox" name="fields[]" value="supervisor_name"> Supervisor: {{ $application->supervisor_name }}</p>
<p><input type="checkbox" name="fields[]" value="supervisor_phone"> Supervisor Phone: {{ $application->supervisor_phone }}</p>
<p><input type="checkbox" name="fields[]" value="work_history"> Work History: {{ $application->work_history }}</p>

</div>
</div>

<!-- EDUCATION -->
<div class="card mb-4">
<div class="card-header bg-secondary text-white">Education</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="school_name"> School: {{ $application->school_name }}</p>
<p><input type="checkbox" name="fields[]" value="degree"> Degree: {{ $application->degree }}</p>
<p><input type="checkbox" name="fields[]" value="subjects"> Subjects: {{ $application->subjects }}</p>

</div>
</div>

<!-- FAMILY -->
<div class="card mb-4">
<div class="card-header bg-dark text-white">Family</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="father_name"> Father: {{ $application->father_name }}</p>
<p><input type="checkbox" name="fields[]" value="mother_name"> Mother: {{ $application->mother_name }}</p>
<p><input type="checkbox" name="fields[]" value="spouse_name"> Spouse: {{ $application->spouse_name }}</p>

</div>
</div>

<!-- EMERGENCY -->
<div class="card mb-4">
<div class="card-header bg-danger text-white">Emergency</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="emergency_name"> Name: {{ $application->emergency_name }}</p>
<p><input type="checkbox" name="fields[]" value="emergency_phone"> Phone: {{ $application->emergency_phone }}</p>
<p><input type="checkbox" name="fields[]" value="emergency_email"> Email: {{ $application->emergency_email }}</p>

</div>
</div>

<!-- DECLARATIONS -->
<div class="card mb-4">
<div class="card-header">Declarations</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="china_refused"> Refused: {{ $application->china_refused }}</p>
<p><input type="checkbox" name="fields[]" value="criminal_record"> Criminal: {{ $application->criminal_record }}</p>
<p><input type="checkbox" name="fields[]" value="medical_condition"> Medical: {{ $application->medical_condition }}</p>
<p><input type="checkbox" name="fields[]" value="military_service"> Military: {{ $application->military_service }}</p>

</div>
</div>

<!-- DOCUMENTS -->
<div class="card mb-4">
<div class="card-header">Documents</div>
<div class="card-body row">

{{-- @foreach([
'passport_scan'=>'Passport',
'empty_pages'=>'Empty Pages',
'selfie_photo'=>'Selfie',
'oldVisaCopy'=>'Old Visa',
'bank_statements'=>'Bank',
'payslips'=>'Payslip',
'dbs_check'=>'DBS',
'prev_visa'=>'Old Visa'
] as $field=>$label)

@if($application->$field)
<div class="col-md-3 mb-3 text-center">
<label>
<input type="checkbox" name="fields[]" value="{{ $field }}">
{{ $label }}
</label>
<img src="{{ asset($application->$field) }}" class="img-fluid border rounded mt-2">
</div>
@endif

@endforeach --}}

@foreach([
'passport_scan'=>'Passport',
'empty_pages'=>'Empty Pages',
'selfie_photo'=>'Selfie',
'oldVisaCopy'=>'Old Visa',
'bank_statements'=>'Bank',
'payslips'=>'Payslip',
'dbs_check'=>'DBS',
'prev_visa'=>'Old Visa'
] as $field=>$label)

@if($application->$field)
@php
$file = $application->$field;
$ext = pathinfo($file, PATHINFO_EXTENSION);
@endphp

<div class="col-md-3 mb-3 text-center">
    <label>
        <input type="checkbox" name="fields[]" value="{{ $field }}">
        {{ $label }}
    </label>

    @if(in_array(strtolower($ext), ['jpg','jpeg','png','webp']))
        <!-- IMAGE -->
        <img src="{{ asset($file) }}" class="img-fluid border rounded mt-2">

    @elseif(strtolower($ext) === 'pdf')
        <!-- PDF -->
        <div class="border rounded p-3 mt-2">
            <p>📄 PDF Document</p>
            <a href="{{ asset($file) }}" target="_blank" class="btn btn-sm btn-primary">
                View PDF
            </a>
        </div>

    @else
        <!-- OTHER FILE -->
        <a href="{{ asset($file) }}" target="_blank">Download File</a>
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