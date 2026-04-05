@extends('admin.layouts.admin')

@section('title','Ireland Visa Details')

@section('content')

<div class="container mt-5">

<a href="{{ route('admin.visa.show.all') }}" class="btn btn-secondary mb-4">← Back</a>

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

@php
$file = $application->passport_scan;
$ext = $file ? strtolower(pathinfo($file, PATHINFO_EXTENSION)) : null;
@endphp

@if($file)
<label><input type="checkbox" name="fields[]" value="passport_scan"> Passport Scan</label>

@if(in_array($ext, ['jpg','jpeg','png','webp']))
    <img src="{{ asset($file) }}" width="150" class="mt-2">
@elseif($ext === 'pdf')
    <div class="mt-2">
        <a href="{{ asset($file) }}" target="_blank" class="btn btn-primary btn-sm">View PDF</a>
    </div>
@endif
@endif

</div>
</div>

<!-- ADDRESS -->
<div class="card mb-4">
<div class="card-header bg-secondary text-white">Address</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="home_door"> {{ $application->home_door }}</p>
<p><input type="checkbox" name="fields[]" value="home_street"> {{ $application->home_street }}</p>
<p><input type="checkbox" name="fields[]" value="home_city"> {{ $application->home_city }}</p>
<p><input type="checkbox" name="fields[]" value="home_postcode"> {{ $application->home_postcode }}</p>
<p><input type="checkbox" name="fields[]" value="home_country"> {{ $application->home_country }}</p>
<p><input type="checkbox" name="fields[]" value="uk_residency_since"> {{ $application->uk_residency_since }}</p>

</div>
</div>

<!-- EMPLOYMENT -->
<div class="card mb-4">
<div class="card-header bg-info text-white">Employment</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="company_name"> {{ $application->company_name }}</p>
<p><input type="checkbox" name="fields[]" value="occupation"> {{ $application->occupation }}</p>
<p><input type="checkbox" name="fields[]" value="job_title"> {{ $application->job_title }}</p>

<p><input type="checkbox" name="fields[]" value="employment_start"> {{ $application->employment_start }}</p>
<p><input type="checkbox" name="fields[]" value="employment_end"> {{ $application->employment_end }}</p>

</div>
</div>

<!-- TRAVEL -->
<div class="card mb-4">
<div class="card-header bg-warning text-dark">Travel</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="departure_date"> {{ $application->departure_date }}</p>
<p><input type="checkbox" name="fields[]" value="return_date"> {{ $application->return_date }}</p>
<p><input type="checkbox" name="fields[]" value="destination_city"> {{ $application->destination_city }}</p>
<p><input type="checkbox" name="fields[]" value="visit_purpose"> {{ $application->visit_purpose }}</p>

<p><input type="checkbox" name="fields[]" value="accommodation"> {{ $application->accommodation }}</p>
<p><input type="checkbox" name="fields[]" value="accommodation_phone"> {{ $application->accommodation_phone }}</p>

</div>
</div>

<!-- VISA HISTORY -->
<div class="card mb-4">
<div class="card-header bg-dark text-white">Visa History</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="applied_before">
{{ $application->applied_before ? 'Yes' : 'No' }}</p>

<p><input type="checkbox" name="fields[]" value="prev_application_date">
{{ $application->prev_application_date }}</p>

<p><input type="checkbox" name="fields[]" value="prev_application_country">
{{ $application->prev_application_country }}</p>

<hr>

<p><input type="checkbox" name="fields[]" value="refused_before">
{{ $application->refused_before ? 'Yes' : 'No' }}</p>

<p><input type="checkbox" name="fields[]" value="refused_date">
{{ $application->refused_date }}</p>

<p><input type="checkbox" name="fields[]" value="refused_country">
{{ $application->refused_country }}</p>

<p><input type="checkbox" name="fields[]" value="refused_reason">
{{ $application->refused_reason }}</p>

</div>
</div>

<!-- FAMILY -->
<div class="card mb-4">
<div class="card-header bg-primary text-white">Family</div>
<div class="card-body">

<p><input type="checkbox" name="fields[]" value="is_married">
{{ $application->is_married ? 'Yes' : 'No' }}</p>

<p><input type="checkbox" name="fields[]" value="spouse_name"> {{ $application->spouse_name }}</p>
<p><input type="checkbox" name="fields[]" value="spouse_dob"> {{ $application->spouse_dob }}</p>

<p><input type="checkbox" name="fields[]" value="has_children">
{{ $application->has_children ? 'Yes' : 'No' }}</p>

<p><input type="checkbox" name="fields[]" value="num_children"> {{ $application->num_children }}</p>

</div>
</div>

<!-- DOCUMENTS -->
<div class="card mb-4">
<div class="card-header">Documents</div>
<div class="card-body row">

@foreach([
'prev_passport_1'=>'Prev Passport 1',
'prev_passport_2'=>'Prev Passport 2',
'spouse_passport'=>'Spouse Passport',
'bank_statements'=>'Bank',
'payslips'=>'Payslip'
] as $field=>$label)

@if($application->$field)

@php
$file = $application->$field;
$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
@endphp

<div class="col-md-3 text-center mb-3">

<label>
<input type="checkbox" name="fields[]" value="{{ $field }}">
{{ $label }}
</label>

@if(in_array($ext, ['jpg','jpeg','png','webp']))
    <img src="{{ asset($file) }}" class="img-fluid border rounded mt-2">
@elseif($ext === 'pdf')
    <a href="{{ asset($file) }}" target="_blank" class="btn btn-primary btn-sm mt-2">View PDF</a>
@endif

</div>

@endif
@endforeach

</div>
</div>

<!-- CHILDREN PASSPORTS -->
@if($application->children_passports)
@php $children = json_decode($application->children_passports, true); @endphp

<div class="card mb-4">
<div class="card-header">Children Passports</div>
<div class="card-body row">

@foreach($children as $file)
@php $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION)); @endphp

<div class="col-md-3 text-center mb-3">

@if(in_array($ext, ['jpg','jpeg','png','webp']))
    <img src="{{ asset($file) }}" class="img-fluid border rounded">
@elseif($ext === 'pdf')
    <a href="{{ asset($file) }}" target="_blank" class="btn btn-primary btn-sm">View PDF</a>
@endif

</div>

@endforeach

</div>
</div>
@endif

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