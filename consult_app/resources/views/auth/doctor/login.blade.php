<!-- resources/views/auth/doctor/login.blade.php -->
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
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
@endif
