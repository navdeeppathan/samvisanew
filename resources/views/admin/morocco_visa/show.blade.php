@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

<a href="{{ route('admin.visa.show.all') }}" class="btn btn-secondary mb-4">← Back</a>

<h2 class="mb-4">Morocco Visa Application Details</h2>

<form method="POST" action="{{ route('admin.morocco.application.send.correction', $application->id) }}">
@csrf

<!-- PERSONAL -->
<div class="card mb-4">
<div class="card-header bg-dark text-white">Personal Info</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="surname"> {{ $application->surname }}</p>
<p><input type="checkbox" name="fields[]" value="first_name"> {{ $application->first_name }}</p>
<p><input type="checkbox" name="fields[]" value="middle_name"> {{ $application->middle_name }}</p>
<p><input type="checkbox" name="fields[]" value="dob"> {{ $application->dob }}</p>
<p><input type="checkbox" name="fields[]" value="nationality"> {{ $application->nationality }}</p>
<p><input type="checkbox" name="fields[]" value="country_of_birth"> {{ $application->country_of_birth }}</p>
<p><input type="checkbox" name="fields[]" value="marital_status"> {{ $application->marital_status }}</p>
<p><input type="checkbox" name="fields[]" value="occupation"> {{ $application->occupation }}</p>

</div>
</div>

<!-- CONTACT -->
<div class="card mb-4">
<div class="card-header bg-primary text-white">Contact</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="email"> {{ $application->email }}</p>
<p><input type="checkbox" name="fields[]" value="mobile_phone"> {{ $application->mobile_phone }}</p>

</div>
</div>

<!-- ADDRESS -->
<div class="card mb-4">
<div class="card-header bg-info text-white">Address</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="home_door"> {{ $application->home_door }}</p>
<p><input type="checkbox" name="fields[]" value="home_street"> {{ $application->home_street }}</p>
<p><input type="checkbox" name="fields[]" value="home_city"> {{ $application->home_city }}</p>
<p><input type="checkbox" name="fields[]" value="home_postcode"> {{ $application->home_postcode }}</p>
<p><input type="checkbox" name="fields[]" value="home_country"> {{ $application->home_country }}</p>

</div>
</div>

<!-- DOCUMENTS -->
{{-- <div class="card mb-4">
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
'passport_scan' => 'Passport Scan',
'passport_photo' => 'Passport Photo',
'uk_visa_copy' => 'UK Visa Copy',
'bank_statements' => 'Bank Statement',
'payslips' => 'Payslip'
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

<button class="btn btn-danger">Send Email</button>

</div>
</div>

</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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