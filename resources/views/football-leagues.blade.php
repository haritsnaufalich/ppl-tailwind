@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <h2 class="text-xl font-semibold text-[#eceeed]">Football Leagues</h2>
    <div class="grid grid-cols-5 gap-6">
      @foreach ($football_leagues as $football_league)
        <a href="/football-leagues/{{ $football_league->id }}">
          <div class="flex flex-col items-center justify-center p-6 rounded-xl bg-[#202221]">
            <p>{{ $football_league->name }}</p>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endsection
