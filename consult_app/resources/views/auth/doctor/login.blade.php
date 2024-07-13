<!-- resources/views/auth/login.blade.php -->

@if(Auth::guard('doctor')->check())
    <form method="POST" action="{{ route('doctor.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
    <form method="POST" action="{{ route('doctor.login') }}">
        @csrf

        <div>
            <label for="doctorEmail">Email</label>
            <input id="doctorEmail" type="email" name="doctorEmail" value="{{ old('doctorEmail') }}" required autofocus>
            @error('doctorEmail')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="doctorPassword">Password</label>
            <input id="doctorPassword" type="password" name="doctorPassword" required autocomplete="current-password">
            @error('doctorPassword')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button type="submit">Login</button>
        </div>

        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
    </form>
@endif
