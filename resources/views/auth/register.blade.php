@extends('layouts.app')

@section('content')

<div class="center-screen">
  <form method="POST" action="{{ route('register') }}">
  @csrf

    <div class="field">
      <div class="control">
        <label for="name">{{ __('Name') }}</label>
        <input id="name" type="text" class="input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
      </div>
    </div>

    @if ($errors->has('name'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
    @endif

    <div class="field">
      <div class="control">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
      </div>
    </div>

    @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
    @endif

    <div class="field">
      <div class="control">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
      </div>
    </div>

    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif

    <div class="field">
      <div class="control">
        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input class="input" id="password-confirm" type="password" name="password_confirmation" required>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-primary">
            {{ __('Register') }}
        </button>
      </div>
    </div>

  </form>
</div>

@endsection
