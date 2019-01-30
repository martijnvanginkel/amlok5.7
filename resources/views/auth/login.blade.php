@extends('layouts.main')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third">
        <div class="loginWrapper">
            <h1>Login</h1>

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                    <div class="wrapper">

                    <!-- Email -->
                        <label for="email" ></label>
                        <input class="formField" placeholder="E-Mail Address" type="email"  name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif

                    <!-- Password -->
                        <label for="password"></label>
                        <input class="formField" placeholder="Password" type="password" name="password" required>
                        @if ($errors->has('password'))
                          <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
            
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>

                    </div>
            
                    <button class="loginButton" type="submit">Login</button>

                <div class="loginFormFooter">
                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection
