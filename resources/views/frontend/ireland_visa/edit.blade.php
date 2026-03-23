<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Ireland Visa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2>Update Your Ireland Visa Application</h2>

@if(empty($fields))
<div class="alert alert-info">No corrections pending</div>
@endif

@if($application->correction_message)
<div class="alert alert-warning">{{ $application->correction_message }}</div>
@endif

<form method="POST" action="{{ route('ireland.application.update',$application->id) }}" enctype="multipart/form-data">
@csrf

@foreach($fields as $field)

<label>{{ ucfirst(str_replace('_',' ',$field)) }}</label>

@if(in_array($field, [
'passport_scan','prev_passport_1','prev_passport_2',
'spouse_passport','bank_statements','payslips'
]))

@if($application->$field)
<img src="{{ asset($application->$field) }}" width="120">
@endif

<input type="file" name="{{ $field }}" class="form-control mb-3">

@else

<input type="text" name="{{ $field }}" value="{{ $application->$field }}" class="form-control mb-3">

@endif

@endforeach

<button class="btn btn-primary">Update</button>

</form>

</div>

</body>
</html>