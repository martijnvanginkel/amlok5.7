@extends('main')

@section('content')

       

 


                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">


                            <label for="email">E-Mail Address</label>

                                <input type="email" name="email" value="{{ $email or old('email') }}" required autofocus>



                            <label for="password">Password</label>

                                <input type="password" name="password" required>

        

                      
                            <label for="password-confirm">Confirm Password</label>
                     
                                <input type="password" name="password_confirmation" required>

           
       
                                <button type="submit">
                                    Reset Password
                                </button>
                    
                    </form>

@endsection
