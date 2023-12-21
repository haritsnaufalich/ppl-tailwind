@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <h2 class="text-xl font-semibold text-[#eceeed]">Welcome, {{ Auth::user()->name }}</h2>
  </div>
@endsection
