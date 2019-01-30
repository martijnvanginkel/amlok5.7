<nav class="nav">
  <div class="nav-left">
    <a href="/" class="nav-item is-brand">
      <img src="{{asset('img/logo.png')}}" alt="logo" id="logo">
    </a>
  </div>

  <div class="nav-center">

  </div>

  <!-- Using a <label /> here -->
  <label class="nav-toggle" for="nav-toggle-state">
    <span></span>           
    <span></span>
    <span></span>
  </label>

  <!-- This checkbox is hidden -->
  <input type="checkbox" id="nav-toggle-state" />

  <div class="nav-right nav-menu">
    <a class="nav-item" href="/">
      Home
    </a>
    @if(Route::is('index'))
      <a class="nav-item" href="#aboutUsScroll">
        Over ons
      </a>
      <a class="nav-item" href="#updateScroll">
        Updates
      </a>
      <a class="nav-item" href="#contactScroll">
        Contact
      </a>
    @endif
  </div>
</nav>