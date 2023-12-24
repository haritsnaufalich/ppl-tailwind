@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <h2 class="text-xl font-semibold text-[#eceeed]">{{ $club_sponsorship->football_club->name }} -
      {{ $club_sponsorship->sponsorship_type->name }}</h2>
    <div class="flex flex-col gap-6 p-6 rounded-xl bg-[#202221]">
      <div class="grid grid-cols-3 gap-6">
        <div class="col-span-1 text-left">
          <p>Sponsorship ID : {{ $club_sponsorship->id }}</p>
        </div>
        <div class="col-span-1 text-center">
          <p>Club Name : {{ $club_sponsorship->football_club->name }}</p>
        </div>
        <div class="col-span-1 text-right">
          <p>Sponsorship Type : {{ $club_sponsorship->sponsorship_type->name }}</p>
        </div>
      </div>
      <div class="grid grid-cols-1 gap-6 text-left">
        <div class="flex flex-col">
          <p>Description :</p>
          <p>{{ $club_sponsorship->description }}</p>
        </div>
        <a class="font-bold hover:underline hover:underline-offset-4" href="/dashboard/sponsorship">Back to All
          Sponsorship</a>
      </div>
    </div>
  </div>
@endsection
