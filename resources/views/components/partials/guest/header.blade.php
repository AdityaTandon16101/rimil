<header x-data="{ open: false }" class="px-5 fixed top-0 w-full z-[999]" :class="{'h-auto' : open, 'h-20': !open}">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex">
      <div class="flex justify-between w-full">
        <!-- Logo -->
        <div class="shrink-0 flex items-center leading-[4rem]">
          <a href="{{ route('index') }}">
            <x-application-logo class="block h-12 my-4 w-auto fill-current text-gray-600" clr="#fff" />
          </a>
        </div>

        <!-- Navigation Links -->
        <div class="flex">
          <ul class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <li>
              <a href="#about">{{ __('About') }}</a>
            </li>
            <li>
              <a href="#contact">{{ __('Contact') }}</a>
            </li>
          </ul>
          <ul class="hidden h-12 my-4 guestauth sm:flex">
            @if (Route::has('login') && Route::currentRouteName() != 'login')
            <li class="h-12 leading-[3rem] my-4">
              <a href="{{ route('login') }}">
                {{ __('Login') }}
              </a>
            </li>
            @endif
            @if (Route::has('register') && Route::currentRouteName() != 'register')
            <li class="h-12 leading-[3rem] my-4">
              <a href="{{ route('register') }}">
                {{ __('Register') }}
              </a>
            </li>
            @endif
          </ul>
        </div>
      </div>

      <!-- Hamburger -->
      <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open"
          class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{'block bg-[#676be5] px-4': open, 'hidden': ! open}" class="hidden sm:hidden">
    <ul class="pt-2 pb-3 space-y-1">
      <li>
        <a class="text-white" :href="route('login')">
          {{ __('Login') }}
        </a>
      </li>
      <li>
        <a class="text-white" :href="route('register')">
          {{ __('Register') }}
        </a>
      </li>
    </ul>


  </div>
</header>