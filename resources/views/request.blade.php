@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <div class="flex items-center">
      <h2 class="text-xl font-semibold text-[#eceeed]">Request</h2>
    </div>
    <form action="/request" method="post">
      @csrf
      <div class="flex flex-col gap-6 p-6 rounded-xl bg-[#202221]">
        <div class="grid grid-cols-3 gap-6">
          <div class="col-span-1">
            <label for="football_club_id">
              <select name="football_club_id" id="football_club_id"
                class="py-3 px-6 bg-[#5B625F] rounded-xl w-full min-h-[48px]">
                @foreach ($football_clubs as $football_club)
                  <option class="bg-[#202221]" value="{{ $football_club->id }}">{{ $football_club->name }}
                  </option>
                @endforeach
              </select>
            </label>
          </div>
          <div class="col-span-1">
            <label for="email">
              <input type="email" name="email" id="email" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
                placeholder="Email" value="{{ old('email') }}">
            </label>
          </div>
          <div class="col-span-1">
            <label for="request_type_id">
              <select name="request_type_id" id="request_type_id"
                class="py-3 pl-6 bg-[#5B625F] rounded-xl w-full min-h-[48px]">
                @foreach ($request_types as $request_type)
                  <option class="bg-[#202221]" value="{{ $request_type->id }}">{{ $request_type->name }}</option>
                @endforeach
              </select>
            </label>
          </div>
        </div>
        <div class="grid grid-cols-1">
          <textarea name="description" id="description" rows="20" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
            placeholder="Request Description"></textarea>
        </div>
        <div class="flex items-center justify-end">
          <button class="flex font-medium py-2 px-4 items-center justify-center rounded-xl bg-[#eceeed] text-[#202221]"
            type="submit">
            Submit
          </button>
        </div>
      </div>
    </form>
  </div>
@endsection
