@extends('layouts.main')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third">
        <div class="loginWrapper">
            <h1>Password Reset</h1>

            <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                <div class="wrapper">

                    <label for="email"></label>
                    <input class="formField" placeholder="E-Mail Address" type="email" name="email" value="{{ old('email') }}" required>

                </div>
                <button class="loginButton" type="submit">Send Password Reset Link</button>
            
                <div class="loginFormFooter"></div>

            </form>
        </div>
    </div>
</div>

@endsection
