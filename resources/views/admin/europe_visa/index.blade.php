@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Europe Visa Applications</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th width="120">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($applications as $key => $app)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $app->surname }} {{ $app->first_name }} {{ $app->middle_name }}</td>
                    <td>{{ $app->email }}</td>
                    <td>{{ $app->mobile_phone }}</td>
                    <td>
                        <a href="{{ route('admin.europe.visa.show', $app->id) }}" class="btn btn-primary btn-sm">
                            View
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No Applications Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection