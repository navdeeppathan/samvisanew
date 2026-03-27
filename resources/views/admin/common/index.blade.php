@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Visa Request Applications</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Payment Status</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($applications as $key => $app)
            <tr>
                <td>{{ $key + 1 }}</td>

                <td>
                    {{ $app->surname ?? '' }}
                    {{ $app->first_name ?? '' }}
                    {{ $app->middle_name ?? '' }}
                </td>

                <td>{{ $app->email ?? '-' }}</td>
                <td>{{ $app->mobile_phone ?? '-' }}</td>

                <!-- PAYMENT BADGE -->
                <td>
                    <span class="badge bg-info text-dark text-uppercase">
                        {{ $app->payment_status }}
                    </span>
                </td>

                <!-- COUNTRY BADGE -->
                <td>
                    <span class="badge bg-info text-dark text-uppercase">
                        {{ $app->country }}
                    </span>
                </td>

                <!-- ACTION -->
                <td>
                    @if($app->country == 'china')
                        <a href="{{ route('admin.china.visa.show', $app->id) }}" class="btn btn-primary btn-sm">View</a>

                    @elseif($app->country == 'dubai')
                        <a href="{{ route('admin.dubai.visa.show', $app->id) }}" class="btn btn-primary btn-sm">View</a>

                    @elseif($app->country == 'europe')
                        <a href="{{ route('admin.europe.visa.show', $app->id) }}" class="btn btn-primary btn-sm">View</a>

                    @elseif($app->country == 'ireland')
                        <a href="{{ route('admin.ireland.visa.show', $app->id) }}" class="btn btn-primary btn-sm">View</a>

                    @elseif($app->country == 'morocco')
                        <a href="{{ route('admin.morocco.visa.show', $app->id) }}" class="btn btn-primary btn-sm">View</a>

                    @elseif($app->country == 'turkey')
                        <a href="{{ route('admin.turkey.visa.show', $app->id) }}" class="btn btn-primary btn-sm">View</a>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No Applications Found</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection