@extends('frondendtemplate')
@section('content')
{{-- <div class="container py-5 my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}
<div class="container-fluid bg-light">
  <div class="container">
    <div class="col-12 my-2 py-3 mycart">
      <a href="{{route('indexpage')}}" style="text-decoration: none;font-weight: 700">HOME</a>
      <span class="ml-2 text-muted">Register</span>      

    </div>  

  </div>
</div>

<div class="container">
        <div class="modal-dialog shadow">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Create Account</h5>
                </div>
                <div class="modal-body">
                   <form method="POST" action="{{ route('register') }}">
                        @csrf                       
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Name</label>
                            <input class="form-control py-4 @error('name') is-invalid @enderror"  type="text" aria-describedby="name" placeholder="Enter Your Name" value="{{ old('name') }}" name="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4 @error('email') is-invalid @enderror" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" value="{{ old('email') }}">
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4 @error('password') is-invalid @enderror" id="inputPassword" type="password" placeholder="Enter password" name="password" >
                                </div>
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                    <input class="form-control py-4" name="password_confirmation" id="inputConfirmPassword" type="password" placeholder="Confirm password" autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                           
                             <button type="submit" class="btn btn-outline-warning">
                                    {{ __('Register') }}
                                </button>
                    
               </div>
                    </form>
                </div>
                <div class="footer bg-light py-3">
                    <div class="small text-center">
                        <a href="{{route('login')}} ">Have  an account? Go To Login!</a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
