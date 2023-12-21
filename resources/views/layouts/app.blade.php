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
    @elseif (request()->is('dashboard'))
      <div class="flex justify-center min-h-screen">
        <div class="w-full max-w-[1440px] space-y-12 relative">
          @include('components.navbar')
          <div class="min-h-screen space-y-12 px-6">
            @yield('content')
          </div>
        </div>
      </div>
    @else
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
