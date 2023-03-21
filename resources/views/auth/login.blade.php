@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="auth-wrapper auth-basic px-2">
                        <div class="auth-inner my-2">
                          <!-- Login basic -->
                          <div class="card mb-0">
                            <div class="card-body">
                              <a href="#" class="brand-logo">
                              <svg style="width:35px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 403.25 403.25"><defs><style>.cls-1{fill:#36455a;}.cls-2{fill:#acc5d9;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M201.63,319.68a118.25,118.25,0,0,0,115.71-94.63H245.26a49.53,49.53,0,0,1-93.18-23.44V6.15A200.94,200.94,0,0,0,83.57,38.27V201.61A118.19,118.19,0,0,0,201.63,319.68Z"></path><path class="cls-1" d="M245.26,178.2h72.08A118.13,118.13,0,0,0,169.21,88.09V164.2a49.47,49.47,0,0,1,76,14Z"></path><path class="cls-2" d="M201.63,0a202.62,202.62,0,0,0-32.42,2.6V70.51a134,134,0,0,1,32.42-4c66.49,0,121.92,48.3,133,111.65h0a135.51,135.51,0,0,1,0,46.85h0c-11.11,63.36-66.53,111.64-133,111.64-74.49,0-135.08-60.58-135.08-135.08h-.11V52.16A201.15,201.15,0,0,0,0,201.61c0,111.2,90.45,201.64,201.63,201.64s201.62-90.44,201.62-201.64S312.81,0,201.63,0Z"></path></g></g></svg>
                                <h2 class="brand-text text-primary ms-1">BevCo</h2>
                              </a>
                    
                              <h4 class="card-title mb-1">Welcome to BevCo! 👋</h4>
                              <p class="card-text mb-2">Please sign-in to your account</p>
                              <form method="POST" action="{{ route('login') }}">
                                     <input type="hidden" name="_token" value="J4klNLslHcmaPSMJe8r5KmJNoIYuQw5Hpc4npa8l">            
                                     <div class="mb-1">
                                          <label for="login-email" class="form-label">Email</label>
                                          <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                          required autocomplete="email" tabindex="1" >

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                     </div>
                                     <div class="mb-1">
                                          <div class="d-flex justify-content-between">
                                            <label class="form-label" for="login-password">Password</label>
                                            @if (Route::has('password.request'))
                                               <a href="{{ route('password.request') }}">
                                                    <small>{{ __('Forgot Your Password?') }}</small>
                                                </a>
                                            @endif
                                          </div>
                                          <div class="input-group input-group-merge form-password-toggle">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                                            required autocomplete="current-password"/>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                     </div>
                                     <div class="mb-1">
                                          <div class="form-check">
                                               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                               <label class="form-check-label" for="remember"> Remember Me </label>
                                          </div>
                                     </div>
                                     <button type="submit" class="btn btn-primary w-100 waves-effect waves-float waves-light" tabindex="4">Sign in</button>
                                </form>
                                <p class="text-center mt-2">
                                   <span>New on our platform?</span>
                                   <a href="{{ route('register') }}">
                                   <span>Create an account</span>
                                  </a>
                                </p>
                            </div>
                          </div>
                          <!-- /Login basic -->
                        </div>
                      </div>
    </div>
</div>
@endsection
