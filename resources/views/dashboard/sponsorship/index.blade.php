@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <h2 class="text-xl font-semibold text-[#eceeed]">All Sponsorship</h2>
    <table class="w-full text-center rounded-xl bg-[#202221]">
      <thead>
        <tr>
          <th scope="col" class="py-3 px-6 text-left">Club Name</th>
          <th scope="col" class="py-3 px-6 text-left">Sponsorship Type</th>
          <th scope="col" class="py-3 px-6 text-left">Description</th>
          <th scope="col" class="py-3 px-6 text-right">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($club_sponsorships as $club_sponsorship)
          <tr>
            <td scope="col" class="py-3 px-6 text-left">{{ $club_sponsorship->football_club->name }}</td>
            <td scope="col" class="py-3 px-6 text-left">{{ $club_sponsorship->sponsorship_type->name }}</td>
            <td scope="col" class="py-3 px-6 text-left">{{ Str::limit($club_sponsorship->description, 45, '...') }}
            </td>
            <td scope="col" class="flex gap-6 py-3 px-6 justify-end">
              <a class="text-[#ECEEED] hover:bg-[#ECEEED] hover:p-1.5 hover:rounded-lg hover:text-[#202221] hover:cursor-pointer hover:m-[-6px]"
                href="/dashboard/sponsorship/{{ $club_sponsorship->id }}"><i class="fa-solid fa-eye"></i></a>
              <form action="/dashboard/sponsorship/{{ $club_sponsorship->id }}" method="post">
                @method('delete')
                @csrf
                <button
                  class="text-[#ECEEED] hover:bg-[#ECEEED] hover:p-1.5 hover:rounded-lg hover:text-[#202221] hover:cursor-pointer hover:m-[-6px]"
                  onclick="return confirm('Are you Sure?')"><i class="fa-solid fa-trash"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
