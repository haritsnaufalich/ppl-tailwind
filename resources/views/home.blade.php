@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-semibold text-[#eceeed]">Matches</h2>
      <a href="/matches" class="font-semibold text-[#1FD8A4] hover:underline hover:underline-offset-4">See More</a>
    </div>
    <div class="grid grid-cols-4 gap-6">
      @foreach ($matches as $match)
        <a href="/matches/{{ $match->id }}">
          <div class="flex flex-col items-center justify-center px-6 h-60 rounded-xl bg-[#202221]">
            <p class="font-semibold">{{ $match->football_league->name }}</p>
            <p>{{ $match->match_date }}</p>
            <p>{{ $match->match_time }}</p>
            <div class="flex items-center space-x-4">
              <img class="max-h-20 max-w-20" src="{{ $match->first_team_img }}" alt="">
              <p>VS</p>
              <img class="max-h-20 max-w-20" src="{{ $match->second_team_img }}" alt="">
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
  <div class="flex flex-col space-y-6">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-semibold text-[#eceeed]">League Tables</h2>
      <a href="/tables" class="font-semibold text-[#1FD8A4] hover:underline hover:underline-offset-4">See More</a>
    </div>
    <div class="grid grid-cols-5 gap-6">
      @foreach ($football_leagues as $football_league)
        <a href="/tables/{{ $football_league->id }}">
          <div class="flex flex-col items-center justify-center p-6 rounded-xl bg-[#202221]">
            <p>{{ $football_league->name }}</p>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endsection
