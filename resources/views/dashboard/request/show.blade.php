@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <h2 class="text-xl font-semibold text-[#eceeed]">{{ $club_request->football_club->name }} -
      {{ $club_request->request_type->name }}</h2>
    <div class="flex flex-col gap-6 p-6 rounded-xl bg-[#202221]">
      <div class="grid grid-cols-3 gap-6">
        <div class="col-span-1 text-left">
          <p>Request ID : {{ $club_request->id }}</p>
        </div>
        <div class="col-span-1 text-center">
          <p>Club Name : {{ $club_request->football_club->name }}</p>
        </div>
        <div class="col-span-1 text-right">
          <p>Request Type : {{ $club_request->request_type->name }}</p>
        </div>
      </div>
      <div class="grid grid-cols-1 gap-6 text-left">
        <div class="flex flex-col">
          <p>Description :</p>
          <p>{{ $club_request->description }}</p>
        </div>
        <a class="font-bold hover:underline hover:underline-offset-4" href="/dashboard/request">Back to All Request</a>
      </div>
    </div>
  </div>
@endsection
