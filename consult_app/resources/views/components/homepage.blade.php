@extends('layouts.LinkScript')

@section('content')
@yield('linkA')
<div class="flex flex-col md:flex-row items-center justify-between p-6 bg-white dark:bg-zinc-900">
  <div class="md:w-1/2">
    <h1 class="text-3xl font-bold text-zinc-900 dark:text-white mb-4">Access top certified Doctors for <span class="text-blue-600">Online Consultations</span></h1>
    <p class="text-zinc-700 dark:text-zinc-300 mb-6">Consult a Doctor Online within minutes using your phone, tablet or computer on our website.</p>
    <button class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">Consult a doctor now</button>
  </div>
  <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center">
    <div class="relative">
      <img src="https://placehold.co/300x300?text=Doctor+Image" alt="Doctor consulting online" class="rounded-lg shadow-lg" />
      <div class="absolute bottom-0 left-0 right-0 bg-blue-800 text-white p-4 rounded-b-lg">
        <p class="text-lg font-bold">DISCOUNT ON CONSULTATION FEE</p>
        <div class="flex justify-between items-center mt-2">
          <div class="text-2xl font-bold">OVER <span class="text-yellow-400">20%</span></div>
          <div class="text-2xl font-bold">NOW <span class="text-yellow-400">Ksh. 700</span></div>
        </div>
        <p class="mt-2 text-sm">Visit www.afyabora.co.ke for more information</p>
      </div>
    </div>
  </div>
</div>
@endsection