<div class="sidebar">
  <div class="logo">
    logo HERE
  </div>
  <ul>
    <li @class(['active'=> Route::currentRouteName() == 'dashboard'])>
      <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li><a href="">Profile</a></li>
    <li><a href="">Team</a></li>
    <li><a href="">Withdraw</a></li>
  </ul>
</div>