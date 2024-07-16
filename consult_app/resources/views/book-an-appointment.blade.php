<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.main')

<head>
    @include('layouts.LinkScript')
    @section('header')
        @parent
    @show
</head>

<body>
    @section('content')
        @extends('layouts.LinkScript')
    @section('content')
        @yield('linkA')
        <div class="flex flex-col md:flex-row items-center justify-between bg-white dark:bg-zinc-900">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <x-wellcome />
                        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header bg-blue-500 text-white font-bold py-2 px-4 rounded">
                                                Add Consultation Here:
                                            </div>

                                            <div class="card-body">
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif

                                                <div class="flex mb-8 justify-center">
                                                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ml-0 w-full ">
                                                        <div class="p-12 bg-white border-b border-gray-200">
                                                            <h2 class="text-2xl font-semibold mb-6">Add consultation</h2>
                                                            <form action="{{ url('/consultation') }}" method="POST">
                                                                @csrf
                                                                <div class="mb-6">
                                                                    <label for="" class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2">Title</label>
                                                                    <input type="text" name="title" required="" class="w-full px-6 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                                                                </div>
                                                                <div class="mb-6">
                                                                    <label for="" class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2">Description</label>
                                                                    <textarea name="description" required="" class="w-full px-6 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500" rows="5"></textarea>
                                                                </div>
                                                                <div class="mb-6">
                                                                    <label for="" class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2">When would you like to book?</label>
                                                                    <input type="datetime-local" name="booked_at" required="" class="w-full px-6 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                                                                </div>
                                                                <div class="flex justify-center">
                                                                    <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-3 px-6 rounded shadow-md">
                                                                        Book Consultation
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endsection
</body>

</html>
