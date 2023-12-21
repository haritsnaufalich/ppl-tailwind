@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <div class="flex flex-col gap-6 p-6 rounded-xl bg-[#202221]">
      <div class="flex flex-col">
        <div class="flex items-center justify-between">
          <p>{{ $match->first_team_name }}</p>
          <p>VS</p>
          <p>{{ $match->second_team_name }}</p>
        </div>
        <p>{{ $match->match_date }}</p>
        <p>{{ $match->match_time }}</p>
        <a href="/football-leagues/{{ $match->football_league->id }}">
          <p class="font-semibold hover:underline hover:underline-offset-4">{{ $match->football_league->name }}</p>
        </a>
      </div>
    </div>
    <a class="font-semibold hover:underline hover:underline-offset-4" href="/matches">Back to Matches</a>
  </div>
@endsection
