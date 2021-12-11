@extends('frondendtemplate')
@section('content')
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Login</h5>

                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox">
                            <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="password.html">Forgot Password?</a>
                            <a class="btn btn-light" href="index.html"><i class="fas fa-sign-in-alt"></i>
                                &nbsp;Login</a>
                        </div>

                    </form>
                </div>

                <div class="footer bg-light py-3">
                    <div class="small text-center">
                        <a href="{{route('signuppage')}} ">Need an account? Sign up!</a>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection
@section('script')
    <script src="{{asset('frondend_asset/js/custom.js')}}"></script>
@endsection


