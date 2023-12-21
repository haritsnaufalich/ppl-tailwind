@extends('layouts.app')

@section('content')
  <div class="flex flex-col space-y-6">
    <h2 class="text-xl font-semibold text-[#eceeed]">League Tables</h2>
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
