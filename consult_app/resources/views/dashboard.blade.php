<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patients Dashboard') }}
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
                                                    <h2 class="text-lg font-semibold mb-4">Upcoming Consultations</h2>
                                                    @if (isset($upcomingConsultations) && count($upcomingConsultations) > 0)
                                                        <ul>
                                                            @foreach ($upcomingConsultations as $consultation)
                                                                <li>{{ $consultation->booked_at }} - {{ $consultation->description }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        <p>No upcoming consultations.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div>
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
                                        </div>

                                        {{-- <div>
                                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                                <div class="p-6 bg-white border-b border-gray-200">
                                                    <h2 class="text-lg font-semibold mb-4">Recent Consultations</h2>
                                                    <h2>Your Consultations:</h2>
                                                    <ul>
                                                        @foreach($user->consultations as $consultation)
                                                            <li>
                                                                {{ $consultation->title }} ({{ $consultation->created_at->format('Y-m-d') }})
                                                                <ul>
                                                                    <li>Doctors: {{ $consultation->users()->wherePivot('role', 'doctor')->count() }}</li>
                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                    </ul>
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
