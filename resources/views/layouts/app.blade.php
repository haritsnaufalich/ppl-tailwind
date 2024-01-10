<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Goal Craft | {{ $title }}</title>
</head>

<body>
  <main class="main">
    @if (request()->is('auth/login', 'auth/register'))
      @yield('content')
    @elseif (request()->is('dashboard', 'dashboard/*'))
      @if (session()->has('deleteSuccess'))
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
                {{ session('deleteSuccess') }}
              </p>
            </div>
          </div>
        </div>
        {{-- End Toast --}}
      @endif
      <div class="flex justify-center min-h-screen">
        <div class="w-full max-w-[1440px] space-y-12 relative">
          @include('components.navbar')
          <div class="min-h-screen space-y-12 px-6">
            @yield('content')
          </div>
        </div>
      </div>
    @else
      @if (session()->has('requestSuccess'))
        {{-- Toast --}}
        <div class="absolute max-w-xs bg-[#eceeed] rounded-xl bottom-3 right-3 toast-out z-40" role="alert">
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
                {{ session('requestSuccess') }}
              </p>
            </div>
          </div>
        </div>
        {{-- End Toast --}}
      @endif
      <div class="flex justify-center min-h-screen">
        <div class="w-full max-w-[1440px] space-y-12 relative">
          @include('components.navbar')
          <div class="min-h-screen space-y-12 px-6">
            @yield('content')
          </div>
          @include('components.footer')
        </div>
      </div>
    @endif
  </main>
  @vite('resources/js/app.js')
  <script src="https://kit.fontawesome.com/050776ad7a.js" crossorigin="anonymous"></script>
</body>

</html>
