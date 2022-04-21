<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="logo">
          <a href="{{ route('index') }}">
            <x-logo />
          </a>
          <p class="mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo alias asperiores eaque temporibus magni
            laboriosam fugiat facilis animi nihil sapiente?
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <h4>Quick Links</h4>
        <ul>
          @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
          @endguest
          @if (Route::currentRouteName() == 'index')
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          @endif
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Contact</h4>
        <p>Email: xyz@gmail.com</p>
        <p>phone: 1234567890</p>
      </div>
    </div>
  </div>
  <div class="copyright">
    <p>Copyright © 2022 {{ config('app.name') }}. All Rights Reserved.</p>
  </div>
</footer>