@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <div class="flex items-center">
      <h2 class="text-xl font-semibold text-[#eceeed]">Request</h2>
    </div>
    <div class="flex flex-col gap-6 p-6 rounded-xl bg-[#202221]">
      <div class="grid grid-cols-3 gap-6">
        <div class="col-span-1">
          <label for="name">
            <input type="text" name="name" id="name" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
              placeholder="Club Name">
          </label>
        </div>
        <div class="col-span-1">
          <label for="email">
            <input type="text" name="email" id="email" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
              placeholder="Email">
          </label>
        </div>
        <div class="col-span-1">
          <label for="telephone">
            <input type="text" name="telephone" id="telephone" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
              placeholder="Phone Number">
          </label>
        </div>
      </div>
      <div class="grid grid-cols-1">
        <textarea name="request_description" id="request_description" rows="20"
          class="py-3 px-6 bg-[#5B625F] rounded-xl w-full" placeholder="Request"></textarea>
      </div>
      <div class="flex items-center justify-end">
        <button class="flex font-medium py-2 px-4 items-center justify-center rounded-xl bg-[#eceeed] text-[#202221]">
          Submit
        </button>
      </div>
    </div>
  </div>
@endsection
