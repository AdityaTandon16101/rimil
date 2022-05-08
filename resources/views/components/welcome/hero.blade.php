<div class="flex flex-col h-[90vh] pt-16 bg-[#676be5] px-6 lg:flex-row hero">
  <div class="">
    <p class="text-[3.1em] font-bold lg:text-[3.8em] head">Welcome to Rimil Trading Company</p>
    <p class="text-[1.2em] uppercase lg:text-[1.5em] subtitle">Lorem ipsum dolor sit amet consectetur</p>
    <ul class="flex mt-4">
      @if (Route::has('login'))
      <li>
        <a href="{{ route('login') }}">
          {{ __('Login') }}
        </a>
      </li>
      @endif
      @if (Route::has('register'))
      <li>
        <a href="{{ route('register') }}">
          {{ __('Register') }}
        </a>
      </li>
      @endif
    </ul>
  </div>
  <div class="hidden py-2 lg:block">
    <img src="{{ asset('assets/hero.png') }}" alt="HERO IMAGE" />
  </div>
</div>