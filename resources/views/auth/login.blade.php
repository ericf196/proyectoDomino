@extends('layout.homePanel')
@section('contentPanel')


<div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Dash</span><strong class="text-primary">Express</strong></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>



<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="label-custom">Usuario (Email)</label>

                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="label-custom">Contraseña</label>

                                <input id="password" type="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">
                            
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>

                        </div>

                        <div class="form-group">

                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="forgot-pass" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>

                        </div>
                    </form>




           
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>



@endsection
