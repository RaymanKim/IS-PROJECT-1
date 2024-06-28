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
    

    <div>
        {{-- @include('components.homepage-paragraph') --}}
        <x-homepage/>
    </div>
</body>

</html>
