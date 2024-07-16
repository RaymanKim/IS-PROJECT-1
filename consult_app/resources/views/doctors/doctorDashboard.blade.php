@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="bg-blue-500 text-white text-xl font-semibold p-4">Doctor Dashboard</div>

                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-4">Welcome, {{ $doctor->doctorName }}</h2>
                        <div class="flex flex-col md:flex-row items-center bg-gray-100 p-4 rounded-lg">
                            <div class="w-full md:w-1/3">
                                <img src="{{ $doctor->doctorProfile_photo_path ?? 'default-image-path.jpg' }}" alt="Profile Photo" class="w-full h-auto rounded-full">
                            </div>
                            <div class="w-full md:w-2/3 mt-4 md:mt-0 md:ml-4">
                                <div class="text-gray-700">
                                    <p class="font-semibold"><strong>Name:</strong> {{ $doctor->doctorName }}</p>
                                    <p class="mt-2"><strong>Email:</strong> {{ $doctor->doctorEmail }}</p>
                                    <p class="mt-2"><strong>Office Location:</strong> {{ $doctor->officeLocation }}</p>
                                    <p class="mt-2"><strong>Office Name:</strong> {{ $doctor->officeName }}</p>
                                    <p class="mt-2"><strong>Specialization:</strong> {{ $doctor->Specialization }}</p>
                                    <p class="mt-2"><strong>License No:</strong> {{ $doctor->license_no }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
