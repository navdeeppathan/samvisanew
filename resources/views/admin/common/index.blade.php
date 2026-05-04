@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container-fluid mt-4">

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <h4 class="mb-4 fw-bold">Visa Request Applications</h4>

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle bg-white text-dark">
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
                            <td>{{ $applications->firstItem() + $key }}</td>

                            <td>
                                {{ $app->surname ?? '' }}
                                {{ $app->first_name ?? '' }}
                                {{ $app->middle_name ?? '' }}
                            </td>

                            <td>{{ $app->email ?? '-' }}</td>
                            <td>{{ $app->mobile_phone ?? '-' }}</td>

                            <!-- PAYMENT -->
                            <td>
                                <span class="badge 
                                    @if($app->payment_status == 'paid') bg-success
                                    @elseif($app->payment_status == 'pending') bg-warning text-dark
                                    @else bg-secondary
                                    @endif">
                                    {{ strtoupper($app->payment_status) }}
                                </span>
                            </td>

                            <!-- COUNTRY -->
                            <td>
                                <span class="badge bg-primary">
                                    {{ strtoupper($app->country) }}
                                </span>
                            </td>

                            <!-- ACTION -->
                            <td>
                                <a href="{{ route('admin.' . $app->country . '.visa.show2', $app->id) }}"
                                   class="btn btn-sm btn-primary">
                                   View
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No Applications Found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <!-- Pagination -->
            

                <div>
                    {{ $applications->links('pagination::bootstrap-5') }}
                </div>
           
            </div>

            

        </div>
    </div>

</div>

@endsection