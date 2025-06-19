<header class="bg-blue-900 text-white p-4" x-data="{ open: false }">
  <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-3xl font-semibold">
      <a href="{{ url('/') }}">Workglobal</a>
    </h1>
    <nav class="hidden md:flex items-center space-x-4">
      <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
      <x-nav-link url="/jobs" :active="request()->is('jobs')"> All Jobs </x-nav-link>
      @auth
        <x-nav-link url="/bookmarks" :active="request()->is('bookmarks')"> Saved Jobs </x-nav-link>
        <x-logout-button />
        <div class="flex items-center space-x-3">
                <a href="{{route('dashboard')}}">
                    @if(Auth::user()->avatar)
                    <img src="{{asset('storage/' . Auth::user()->avatar)}}" alt="{{Auth::user()->name}}"
                        class="w-10 h-10 rounded-full">
                    @else
                    <img src="{{asset('storage/avatars/default-avatar.png')}}" alt="{{Auth::user()->name}}"
                        class="w-10 h-10 rounded-full">
                    @endif
                </a>
            </div>
        <x-nav-link url="/dashboard" :active="request()->is('dashboard')" icon="gauge"> Dashboard </x-nav-link>
        <x-button-link url="/jobs/create" icon="edit" bgClass="bg-yellow-500" hoverClasss="hover:bg-yellow-600"
          textClass="text-black">
          Create Job
        </x-button-link>
      @else
        <x-nav-link url="/login" :active="request()->is('login')"> Login </x-nav-link>
        <x-nav-link url="/register" :active="request()->is('register')"> Register </x-nav-link>
      @endauth
    </nav>
    <button x-cloak @click="open = !open" id="hamburger" class="text-white md:hidden flex items-center">
      <i class="fa fa-bars text-2xl"></i>
    </button>
  </div>
  <!-- Mobile Menu -->
  <nav x-show="open" x-transition @click.away="open = false" id="mobile-menu"
    class="md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2" style="display: none;">
    <x-nav-link url="/jobs" :active="request()->is('jobs')" :mobile="true"> All Jobs </x-nav-link>
    @auth
      <x-nav-link url="bookmarks" :active="request()->is('bookmarks')" :mobile="true">Saved Jobs</x-nav-link>
      <a href="{{ url('/dashboard') }}" class="block text-white hover:underline py-2">
        <i class="fa fa-gauge mr-1"></i> Dashboard
      </a>
      <x-logout-button />
      <div class="pt-2"></div>
      <x-button-link url='/jobs/create' icon='edit' :block="true">Create Job </x-button-link>
    @else
      <x-nav-link url="/login" :active="request()->is('login')" :mobile="true">Login</x-nav-link>
      <x-nav-link url="/register" :active="request()->is('register')" :mobile="true">Register</x-nav-link>
    @endauth
  </nav>
</header>
