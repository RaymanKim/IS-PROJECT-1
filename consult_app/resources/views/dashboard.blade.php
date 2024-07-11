<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                                    <div class="card-header">Dashboard</div>

                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <h2>Upcoming Consultations</h2>
                                        @if (isset($upcomingConsultations) && count($upcomingConsultations) > 0)

                                            <ul>
                                                @foreach ($upcomingConsultations as $consultation)
                                                    <li>{{ $consultation->booked_at }} -
                                                        {{ $consultation->description }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <h2>Recent Consultations</h2>
                                        @if (isset($recentConsultations) && count($recentConsultations) > 0)

                                            <ul>
                                                @foreach ($recentConsultations as $consultation)
                                                    <li>{{ $consultation->booked_at }} -
                                                        {{ $consultation->description }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
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
