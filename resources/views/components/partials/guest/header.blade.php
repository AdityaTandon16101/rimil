<header class="navbar navbar-expand-md" id="header">
  <div class="container">
    <div class="logo">
      <a href="{{ route('index') }}">
        <x-logo />
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul @class(["navbar-nav ms-auto", "d-none"=> Route::currentRouteName() != 'index'])>
        <li class="nav-item">
          <a class="nav-link" href="#about">{{ __('About') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">{{ __('Contact') }}</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto guestauth">
        @if (Route::has('login') && Route::currentRouteName() != 'login')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">
            {{ __('Login') }}
          </a>
        </li>
        @endif
        @if (Route::has('register') && Route::currentRouteName() != 'register')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">
            {{ __('Register') }}
          </a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</header>