<footer>
  <div class="container">
    <div class="flex justify-between flex-col gap-4 px-5 md:flex-row md:gap-8 md:px-12">
      <div class="logo w-1/3">
        <a href="{{ route('index') }}">
          <x-application-logo class="block h-20 w-auto fill-current text-gray-600" clr="#fff" />
        </a>
        <p class="mt-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo alias asperiores eaque temporibus magni
          laboriosam fugiat facilis animi nihil sapiente?
        </p>
      </div>
      <div class="w-1/3">
        <h4 class="text-2xl mb-2">Quick Links</h4>
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
      <div class="w-1/3">
        <h4 class="text-2xl mb-2">Contact</h4>
        <p>Email: xyz@gmail.com</p>
        <p>phone: 1234567890</p>
      </div>
    </div>
  </div>
  <div class="copyright">
    <p>Copyright © 2022 {{ config('app.name') }}. All Rights Reserved.</p>
  </div>
</footer>