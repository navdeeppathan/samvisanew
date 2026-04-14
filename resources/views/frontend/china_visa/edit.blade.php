<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Application</title>

    <!-- Bootstrap CSS (optional but recommended) -->
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

    <h2 class="mb-4">Update Your Application</h2>

    @if(empty($fields))
        <div class="alert alert-info">
            No corrections pending. Your application is already updated.
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="alert alert-warning">
        {{ $application->correction_message }}
    </div>

    <form method="POST" action="{{ route('application.update', $application->id) }}" enctype="multipart/form-data">
        @csrf

        @foreach($fields as $field)

            <div class="mb-3">

                <label class="form-label">
                    {{ ucfirst(str_replace('_',' ', $field)) }}
                </label>

                {{-- FILE FIELDS --}}
                @if(in_array($field, [
                    'passport_scan','empty_pages','selfie_photo',
                    'bank_statements','payslips','dbs_check','prev_visa'
                ]))

                    @if($application->$field)
                        <div class="mb-2">
                            <img src="{{ asset($application->$field) }}" width="120">
                        </div>
                    @endif

                    <input type="file" name="{{ $field }}" class="form-control">

                {{-- TEXT FIELDS --}}
                @else

                    <input 
                        type="text" 
                        name="{{ $field }}" 
                        value="{{ $application->$field }}" 
                        class="form-control"
                    >

                @endif

            </div>

        @endforeach

        <button class="btn btn-primary">Update Application</button>

    </form>

</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>