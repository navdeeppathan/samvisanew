<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Europe Visa Application</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Update Your Europe Visa Application</h2>

    @if(empty($fields))
        <div class="alert alert-info">
            No corrections pending. Your application is already updated.
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($application->correction_message)
        <div class="alert alert-warning">
            {{ $application->correction_message }}
        </div>
    @endif

    <form method="POST" action="{{ route('europe.application.update', $application->id) }}" enctype="multipart/form-data">
        @csrf

        @foreach($fields as $field)

            <div class="mb-3">

                <label class="form-label">
                    {{ ucfirst(str_replace('_',' ', $field)) }}
                </label>

                {{-- FILE FIELDS --}}
                @if(in_array($field, [
                    'passport_scan',
                    'bank_statements',
                    'payslips',
                    'prev_eu_visa',
                    'eu_relation_passport'
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

        @if(!empty($fields))
            <button class="btn btn-primary">Update Application</button>
        @endif

    </form>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>