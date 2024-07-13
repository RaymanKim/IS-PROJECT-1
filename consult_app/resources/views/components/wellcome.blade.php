
{{-- <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome to your Jetstream application!
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is
        designed
        to help you build your application using a development environment that is simple, powerful, and enjoyable. We
        believe
        you should love expressing your creativity through programming, so we have spent time carefully crafting the
        Laravel
        ecosystem to be a breath of fresh air. We hope you love it.
    </p>
</div> --}}

{{-- <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
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

                        @if (isset($upcomingConsultations) && count($upcomingConsultations) > 0)
                            <h2>Upcoming Consultations</h2>
                            <ul>
                                @foreach ($upcomingConsultations as $consultation)
                                    <li>{{ $consultation->booked_at }} - {{ $consultation->description }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if (isset($recentConsultations) && count($recentConsultations) > 0)
                            <h2>Recent Consultations</h2>
                            <ul>
                                @foreach ($recentConsultations as $consultation)
                                    <li>{{ $consultation->booked_at }} - {{ $consultation->description }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
