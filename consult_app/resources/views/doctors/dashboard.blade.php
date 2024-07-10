@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-semibold mb-4">Doctor Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($doctors as $doctor)
                <div class="bg-white rounded shadow-md p-4">
                    <h2 class="text-lg font-semibold">{{ $doctor->doctorName }}</h2>
                    <p class="text-gray-600">{{ $doctor->Specialization }}</p>
                    <p class="mt-2"><strong>Email:</strong> {{ $doctor->doctorEmail }}</p>
                    <p><strong>Office Location:</strong> {{ $doctor->officeLocation }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
