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
              <img class="max-h-20 max-w-full" src="{{ $match->first_team_img }}" alt="">
              <p>VS</p>
              <img class="max-h-20 max-w-full" src="{{ $match->second_team_img }}" alt="">
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
    <table class="w-full max-w-[1440px] text-center rounded-xl bg-[#202221]">
      <thead>
        <tr>
          <th scope="col" class="py-3 px-6 text-left">Pos</th>
          <th scope="col" class="py-3 px-6 text-left">Club Name</th>
          <th scope="col" class="py-3 px-6 text-center">MP</th>
          <th scope="col" class="py-3 px-6 text-right">W</th>
          <th scope="col" class="py-3 px-6 text-right">D</th>
          <th scope="col" class="py-3 px-6 text-right">L</th>
          <th scope="col" class="py-3 px-6 text-right">Pts</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tables as $table)
          <tr>
            <td scope="col" class="py-3 px-6 text-left">#{{ $loop->iteration }}</td>
            <td scope="col" class="py-3 px-6 text-left">{{ $table->footballClub->name }}</td>
            <td scope="col" class="py-3 px-6 text-center">{{ $table->played }}</td>
            <td scope="col" class="py-3 px-6 text-right">{{ $table->win }}</td>
            <td scope="col" class="py-3 px-6 text-right">{{ $table->draw }}</td>
            <td scope="col" class="py-3 px-6 text-right">{{ $table->lose }}</td>
            <td scope="col" class="py-3 px-6 text-right">{{ $table->point }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @auth
      <div class="fixed py-3 px-6 bg-[#1FD8A4] rounded-xl bottom-6 right-6 z-50">
        <a href="/chatify"><i class="fa-solid fa-headset text-[#101211]"></i></a>
      </div>
    @endauth
  </div>
@endsection
