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

    @endsection
@endsection
</body>

</html>
