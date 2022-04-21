<div class="sidebar">
  <div class="logo">
    <x-logo />
  </div>
  <ul>
    <li @class(['active'=> Route::currentRouteName() == 'dashboard'])>
      <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li @class(['active'=> Route::currentRouteName() == 'teams'])>
      <a href="{{ route('teams') }}">Team</a>
    </li>
    <li @class(['active'=> Route::currentRouteName() == 'deposites'])>
      <a href="{{ route('deposites') }}">Deposites</a>
    </li>
    <li @class(['active'=> Route::currentRouteName() == 'withdraw'])>
      <a href="{{ route('withdraw') }}">Withdraw</a>
    </li>
  </ul>
</div>