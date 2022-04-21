<div class="hero">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="head">Welcome to Rimil Trading Company</p>
        <p class="subtitle">Lorem ipsum dolor sit amet consectetur</p>
        <ul>
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
      <div class="col-md-6 py-2">
        <img src="{{ asset('assets/hero.png') }}" alt="HERO IMAGE" />
      </div>
    </div>
  </div>
</div>