@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('build/assets/images/TeleDoc.png') }}" alt="TeleDoc Logo" class="max-w-20 max-h-20">
            </div>
            <h2 class="text-center text-2xl font-bold mb-4">TeleDoc Login</h2>

            @if(Auth::guard('doctor')->check())
                <form method="POST" action="{{ route('doctor.logout') }}">
                    @csrf
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Logout</button>
                </form>
            @else
                <form method="POST" action="{{ route('doctor.login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="doctorEmail" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input id="doctorEmail" type="email" name="doctorEmail" value="{{ old('doctorEmail') }}" required autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('doctorEmail')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="doctorPassword" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input id="doctorPassword" type="password" name="doctorPassword" required autocomplete="current-password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('doctorPassword')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Login
                        </button>
                    </div>

                    @if(Session::has('error'))
                        <div class="bg-red-500 text-white text-sm font-bold py-2 px-4 rounded mt-4">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                </form>
            @endif
        </div>
    </div>
@endsection
