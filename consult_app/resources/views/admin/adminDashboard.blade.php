<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-wellcome />
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Here are your consultations:</div>

                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <div class="mb-8">
                                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                                <div class="p-6 bg-white border-b border-gray-200">
                                                    <h2 class="text-lg font-semibold mb-4">Doctor Registration</h2>
                                                    <form action="{{ url('/adddoctor') }}" method="POST">
                                                        @csrf
                                                        <div class="flex flex-wrap -mx-3 mb-6">
                                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                                <label for=""
                                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                                                                <input type="text" name="name" required=""
                                                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white">
                                                            </div>
                                                            <div class="w-full md:w-1/2 px-3">
                                                                <label for=""
                                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Email</label>
                                                                <input type="email" name="email" required=""
                                                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white">
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-wrap -mx-3 mb-6">
                                                            <div class="w-full px-3">
                                                                <label for=""
                                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Password</label>
                                                                <input type="password" name="password" required=""
                                                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="flex justify-center">
                                                                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-black font-bold py-2 px-4 rounded">
                                                                    Add Doctor
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div>
                                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                                <div class="p-6 bg-white border-b border-gray-200">
                                                    <h2 class="text-lg font-semibold mb-4">Recent Consultations</h2>
                                                    @if (isset($recentConsultations) && count($recentConsultations) > 0)
                                                        <ul>
                                                            @foreach ($recentConsultations as $consultation)
                                                                <li>{{ $consultation->booked_at }} - {{ $consultation->description }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        <p>No recent consultations.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
