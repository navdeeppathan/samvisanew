@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

<a href="{{ route('admin.ireland.visa.index') }}" class="btn btn-secondary mb-4">← Back</a>

<h2 class="mb-4">Ireland Visa Details</h2>

<form method="POST" action="{{ route('admin.ireland.application.send.correction', $application->id) }}">
@csrf

<!-- PERSONAL -->
<div class="card mb-4">
<div class="card-header bg-dark text-white">Personal</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="surname"> {{ $application->surname }}</p>
<p><input type="checkbox" name="fields[]" value="first_name"> {{ $application->first_name }}</p>
<p><input type="checkbox" name="fields[]" value="middle_name"> {{ $application->middle_name }}</p>
<p><input type="checkbox" name="fields[]" value="dob"> {{ $application->dob }}</p>
<p><input type="checkbox" name="fields[]" value="nationality"> {{ $application->nationality }}</p>

<p><input type="checkbox" name="fields[]" value="email"> {{ $application->email }}</p>
<p><input type="checkbox" name="fields[]" value="mobile_phone"> {{ $application->mobile_phone }}</p>

</div>
</div>

<!-- PASSPORT -->
<div class="card mb-4">
<div class="card-header bg-primary text-white">Passport</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="passport_number"> {{ $application->passport_number }}</p>
<p><input type="checkbox" name="fields[]" value="passport_issue"> {{ $application->passport_issue }}</p>
<p><input type="checkbox" name="fields[]" value="passport_expiry"> {{ $application->passport_expiry }}</p>

@if($application->passport_scan)
<label>
<input type="checkbox" name="fields[]" value="passport_scan">
Passport Scan
</label>
<img src="{{ asset($application->passport_scan) }}" width="150">
@endif

</div>
</div>

<!-- DOCUMENTS -->
<div class="card mb-4">
<div class="card-header">Documents</div>
<div class="card-body">

@foreach([
'prev_passport_1'=>'Prev Passport 1',
'prev_passport_2'=>'Prev Passport 2',
'spouse_passport'=>'Spouse Passport',
'bank_statements'=>'Bank',
'payslips'=>'Payslip'
] as $field=>$label)

@if($application->$field)
<label>
<input type="checkbox" name="fields[]" value="{{ $field }}">
{{ $label }}
</label>
<img src="{{ asset($application->$field) }}" width="120" class="m-2">
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

@endsection