<nav class="flex items-center justify-between bg-[#202221] px-6 h-[72px] rounded-b-xl sticky top-0 z-10">
  <div class="flex items-center">
    <h2 class="text-xl font-semibold text-[#eceeed]">GoalCraft</h2>
  </div>
  <div class="flex items-center gap-6">
    @if (request()->is('dashboard', 'dashboard/*'))
      <a class="{{ $title === 'Dashboard' ? 'font-bold' : 'hover:underline hover:underline-offset-4' }}"
        href="/dashboard">Dashboard</a>
      <a class="{{ $title === 'Request' ? 'font-bold' : 'hover:underline hover:underline-offset-4' }}"
        href="/dashboard/request">Request</a>
      <a class="{{ $title === 'Sponsorship' ? 'font-bold' : 'hover:underline hover:underline-offset-4' }}"
        href="/dashboard/sponsorship">Sponsorship</a>
    @else
      @auth
        <a class="{{ $title === 'Home' ? 'font-bold' : 'hover:underline hover:underline-offset-4' }}"
          href="/">Home</a>
        <a class="{{ $title === 'Request' ? 'font-bold' : 'hover:underline hover:underline-offset-4' }}"
          href="/request">Request</a>
        <a class="{{ $title === 'Sponsorship' ? 'font-bold' : 'hover:underline hover:underline-offset-4' }}"
          href="/sponsorship">Sponsorship</a>
      @else
        <a class="{{ $title === 'Home' ? 'font-bold' : 'hover:underline hover:underline-offset-4' }}"
          href="/">Home</a>
        <a class="{{ $title === 'Matches' ? 'font-bold' : 'hover:underline hover:underline-offset-4' }}"
          href="/matches">Matches</a>
        <a class="{{ $title === 'League Tables' ? 'font-bold' : 'hover:underline hover:underline-offset-4' }}"
          href="/tables">League Tables</a>
      @endauth
    @endif
  </div>

  @if (request()->is('dashboard', 'dashboard/*'))
    <div class="flex items-center">
      <form action="/logout" method="post">
        @csrf
        <button class="flex text-sm font-medium py-2 px-4 items-center rounded-xl bg-[#eceeed] text-[#202221]">Sign
          Out</button>
      </form>
    </div>
  @else
    @auth
      <div class="flex items-center hover:cursor-pointer relative" id="toggle">
        <span>Welcome,
          {{ Auth::user()->name }} <i class="fa-solid fa-caret-down ml-3"></i></span>
        <div class="absolute flex-col items-end p-3 gap-3 bg-[#eceeed] rounded-xl top-[60px] right-0 w-3/4 hidden"
          id="dropdown-box">
          @can('isAdmin')
            <a class="text-[#202221] hover:bg-[#202221] hover:p-1.5 hover:rounded-lg hover:text-[#eceeed] hover:cursor-pointer hover:m-[-6px]"
              href="/dashboard">Dashboard<i class="fa-solid fa-lock ml-3"></i></a>
          @endcan
          <a class="text-[#202221] hover:bg-[#202221] hover:p-1.5 hover:rounded-lg hover:text-[#eceeed] hover:cursor-pointer hover:m-[-6px]"
            href="/matches">Matches<i class="fa-regular fa-futbol ml-3"></i></a>
          <a class="text-[#202221] hover:bg-[#202221] hover:p-1.5 hover:rounded-lg hover:text-[#eceeed] hover:cursor-pointer hover:m-[-6px]"
            href="/tables">Tables<i class="fa-solid fa-table ml-3"></i></a>
          <hr class="border-[#202221] w-full">
          <form action="/logout" method="post">
            @csrf
            <button
              class="text-[#202221] hover:bg-[#202221] hover:p-1.5 hover:rounded-lg hover:text-[#eceeed] hover:cursor-pointer hover:m-[-6px]">Sign
              Out<i class="fa-solid fa-arrow-right-from-bracket ml-3"></i></button>
          </form>
        </div>
      </div>
    @else
      <div class="flex items-center">
        <button class="flex text-sm font-medium py-2 px-4 items-center rounded-xl bg-[#eceeed] text-[#202221]"><a
            href="/auth/login">Sign In</a></button>
      </div>
    @endauth
  @endif
</nav>
