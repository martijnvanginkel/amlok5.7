<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{config('app.name')}}</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
  <link rel="stylesheet" href="{{ asset('css/cmsstyles.css') }}">
</head>
<body>

<nav class="cms-nav" style="padding:20px">

  {{-- <h1><a href="{{ route('pages.index') }}">Website</a></h1> --}}

    @if(Auth::check())
      {{-- <a class="button" href="{{ route('register') }}">
        Register
       </a> --}}

       <a class="button" href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
       </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
       </form>
    @endif
</nav>

<div class="columns">

  <div class="column is-one-quarter" style="padding:20px">
    <aside class="menu">
      <p class="menu-label">Posts</p>
      <ul class="menu-list">
        <li>
          <a class="" href="{{ route('home') }}">Tekst</a>
        </li>
      </ul>
    </aside>
  </div>

  <div class="column" style="padding:20px; background-color:#F1F1F1">
    @yield('content')
  </div>

</div>

</body>

</html>
