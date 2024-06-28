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
    <div>
        <x-homepage/>
    </div>
    @endsection
</body>

</html>
