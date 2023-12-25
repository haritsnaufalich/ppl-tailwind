@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <h2 class="text-xl font-semibold text-[#eceeed]">League Table : {{ $football_league_name }}</h2>
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
    <a class="font-bold hover:underline hover:underline-offset-4" href="/tables">Back to League Tables</a>
  </div>
@endsection
