@extends('layouts.LinkScript')

@section('content')
    @yield('linkA')
    <div class="flex flex-col md:flex-row items-center justify-between p-6 bg-white dark:bg-zinc-900">
        <div class="md:w-1/2">
            <h1 class="text-3xl font-bold text-zinc-900 dark:text-white mb-4">Access top certified Doctors for <span
                    class="text-blue-600">Online Consultations</span></h1>
            <p class="text-zinc-700 dark:text-zinc-300 mb-6">Consult a Doctor Online within minutes using your phone, tablet
                or computer on our website.</p>
            <a href="{{ route('book-an-appointment') }}"
                class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">Consult a doctor now</a>
        </div>
        <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center">
            <div class="relative">
                <img src="{{ asset('build/assets/images/doctor.png') }}" alt="Consultation Image"
                    class="rounded-lg shadow-lg" />

            </div>
        </div>
    </div>
@endsection
