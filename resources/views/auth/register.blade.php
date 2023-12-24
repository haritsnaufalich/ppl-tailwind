@extends('layouts.app')

@section('content')
  <div class="grid grid-cols-2 min-h-screen">
    <div class="grid col-span-1 content-center justify-items-center">
      <img src="/assets/Football.svg" alt="" class="max-h-screen w-full object-fill">
    </div>
    <div class="grid col-span-1 content-center justify-items-center">
      <form action="/auth/register" method="post">
        @csrf
        <div class="flex flex-col gap-6 p-12 rounded-xl bg-[#202221] min-w-[480px]">
          <div class="flex flex-col gap-4">
            <label for="name" class="space-y-2">
              <p>Full Name</p>
              <input type="text" name="name" id="name" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
                required value="{{ old('name') }}" placeholder="Boedi Koevlink">
            </label>
            <label for="username" class="space-y-2">
              <p>Username</p>
              <input type="text" name="username" id="username" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
                required value="{{ old('username') }}" placeholder="Username">
            </label>
            <label for="email" class="space-y-2">
              <p>Email</p>
              <input type="email" name="email" id="email" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
                required value="{{ old('email') }}" placeholder="name@email.com">
            </label>
            <label for="password" class="space-y-2">
              <p>Password</p>
              <input type="password" name="password" id="password" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
                required placeholder="Password">
            </label>
            <div class="flex flex-col space-y-2">
              <button
                class="flex font-medium py-3 px-6 items-center justify-center rounded-xl bg-[#eceeed] text-[#202221] mt-6"
                type="submit">
                Sign Up
              </button>
              <p class="flex justify-center">Already Have an Account?&nbsp;
                <a href="/auth/login" class="text-[#1FD8A4] hover:underline hover:underline-offset-4">Sign In</a>
              </p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
