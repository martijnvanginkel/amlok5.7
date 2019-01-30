@extends('layouts.main')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third">
        <div class="loginWrapper">
            <h1>Register</h1>

            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                    <div class="wrapper">

                    <!-- Name -->
                        <label for="name"></label>
                        <input id="name" class="formField" placeholder="Name" type="" name="name" value="{{ old('name') }}" required autofocus>   
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    <!-- Email -->
                        <label for="email"></label>
                        <input id="email" class="formField" placeholder="E-Mail Address" type="email" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
    
                    <!-- Password -->
                        <label for="password"></label>
                        <input id="password" class="formField" placeholder="Password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    <!-- Confirm Password -->
                        <label for="password-confirm"></label>
                        <input id="password-confirm" class="formField" placeholder="Confirm Password" type="password"  name="password_confirmation" required>
           

                    </div>
                    
                    <button class="loginButton" type="submit">Register</button>

                <div class="loginFormFooter">
                    <a href="{{ route('login') }}">Already have an account?</a>
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection

