@extends('layouts.app')

@section('content')

<div class="center-screen">
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="field">
      <div class="control">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input class="input" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <label for="password">{{ __('Password') }}</label>
        <input class="input" id="password" type="password" name="password" required>
      </div>
    </div>

    <div class="field">
      <div class="control">

        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember"> {{ __('Remember Me') }} </label>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-primary">
          {{ __('Login') }}
        </button>
      </div>
    </div>

  </form>
</div>

@endsection
