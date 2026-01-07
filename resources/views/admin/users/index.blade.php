@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        @include('partials.admin-sidebar')

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <!-- Informative Cards -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Total Users</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $users->count() }}</h5>
                            <p class="card-text">Registered users on the platform.</p>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">System Status</div>
                        <div class="card-body">
                            <h5 class="card-title">Active</h5>
                            <p class="card-text">System is running smoothly.</p>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">Pending Requests</div>
                        <div class="card-body">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">No pending actions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Table -->
            <h2>Registered Users</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

@push('scripts')
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace()
</script>
@endpush
@endsection
