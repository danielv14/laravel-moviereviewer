@if (Session::has('flash_message'))
  <div id="flash-wrapper">
    <p class="flash-text">
      {{ session('flash_message') }}
    </p>
  </div>
@endif
