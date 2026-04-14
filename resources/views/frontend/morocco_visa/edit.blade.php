<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Update Morocco Visa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WRQWJTDV');</script>
<!-- End Google Tag Manager -->
</head>
<body>
       <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRQWJTDV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="container mt-5">

<h2>Update Your Morocco Visa Application</h2>

@if(empty($fields))
<div class="alert alert-info">No corrections pending</div>
@endif

@if($application->correction_message)
<div class="alert alert-warning">{{ $application->correction_message }}</div>
@endif

<form method="POST" action="{{ route('morocco.application.update',$application->id) }}" enctype="multipart/form-data">
@csrf

@foreach($fields as $field)

<label>{{ ucfirst(str_replace('_',' ',$field)) }}</label>

@if(in_array($field, [
'passport_scan','passport_photo','uk_visa_copy','bank_statements','payslips'
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