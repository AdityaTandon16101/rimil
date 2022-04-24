<table class="table">
  @isset($thead)
  <thead>
    {{ $thead }}
  </thead>
  @endisset
  <tbody>
    {{ $slot }}
  </tbody>
  @isset($tfoot)
  <tfoot>
    {{ $tfoot }}
  </tfoot>
  @endisset
</table>