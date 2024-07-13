<!-- doctorDashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Doctor Dashboard</div>

                    <div class="card-body">
                        <h2>Welcome, {{ $doctor->doctorName }}</h2>
                        <p>Email: {{ $doctor->doctorEmail }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
