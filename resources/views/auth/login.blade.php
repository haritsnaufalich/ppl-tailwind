@extends('layouts.app')

@section('content')
  <div class="grid grid-cols-2 min-h-screen">
    <div class="grid col-span-1 content-center justify-items-center">
      <img src="/assets/Football.svg" alt="" class="max-h-screen w-full object-fill">
    </div>
    <div class="grid col-span-1 content-center justify-items-center relative">

      @if (session()->has('registerSuccess'))
        {{-- Toast --}}
        <div class="absolute max-w-xs bg-[#eceeed] rounded-xl bottom-3 right-3 toast-out" role="alert">
          <div class="flex p-4">
            <div class="flex-shrink-0">
              <svg class="flex-shrink-0 h-4 w-4 text-teal-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
              </svg>
            </div>
            <div class="ms-3">
              <p class="text-sm text-[#202221]">
                {{ session('registerSuccess') }}
              </p>
            </div>
          </div>
        </div>
        {{-- End Toast --}}
      @endif

      @if (session()->has('loginFailed'))
        {{-- Toast --}}
        <div class="absolute max-w-xs bg-[#eceeed] rounded-xl bottom-3 right-3 toast-out" role="alert">
          <div class="flex p-4">
            <div class="flex-shrink-0">
              <svg class="flex-shrink-0 h-4 w-4 text-red-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
              </svg>
            </div>
            <div class="ms-3">
              <p class="text-sm text-[#202221]">
                {{ session('loginFailed') }}
              </p>
            </div>
          </div>
        </div>
        {{-- End Toast --}}
      @endif

      <form action="/auth/login" method="post">
        @csrf
        <div class="flex flex-col gap-6 p-12 rounded-xl bg-[#202221] min-w-[480px]">
          <div class="flex flex-col gap-4">
            <label for="email" class="space-y-2">
              <p>Email</p>
              <input type="email" name="email" id="email" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
                placeholder="name@email.com" autofocus required>
            </label>
            <label for="password" class="space-y-2">
              <p>Password</p>
              <input type="password" name="password" id="password" class="py-3 px-6 bg-[#5B625F] rounded-xl w-full"
                placeholder="Password" required>
            </label>
            <div class="flex flex-col space-y-2">
              <button
                class="flex font-medium py-3 px-6 items-center justify-center rounded-xl bg-[#eceeed] text-[#202221] mt-6"
                type="submit">
                Sign In
              </button>
              <p class="flex justify-center">Don't Have an Account?&nbsp;
                <a href="/auth/register" class="text-[#1FD8A4] hover:underline hover:underline-offset-4">Sign Up</a>
              </p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
