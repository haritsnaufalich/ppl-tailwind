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
    <div class="relative">
      <table class="w-full text-center rounded-xl bg-[#202221]">
        <thead>
          <tr>
            <th scope="col" class="py-3 px-6">Pos</th>
            <th scope="col" class="py-3 px-6 text-left">Club</th>
            <th scope="col" class="py-3 px-6">MP</th>
            <th scope="col" class="py-3 px-6">W</th>
            <th scope="col" class="py-3 px-6">D</th>
            <th scope="col" class="py-3 px-6">L</th>
            <th scope="col" class="py-3 px-6">Pts</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="col" class="py-3 px-6">#1</td>
            <td scope="col" class="py-3 px-6 text-left">Manchester City</td>
            <td scope="col" class="py-3 px-6">12</td>
            <td scope="col" class="py-3 px-6">9</td>
            <td scope="col" class="py-3 px-6">2</td>
            <td scope="col" class="py-3 px-6">1</td>
            <td scope="col" class="py-3 px-6">29</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
