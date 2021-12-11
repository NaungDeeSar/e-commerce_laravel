@extends('frondendtemplate')
@section('content')
    <div class="container">
        <div class="modal-dialog signup">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Create Account</h5>

                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Last Name</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                    <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <a class="btn btn-light" href="login.php">Create Account</a></div>
                    </form>
                </div>
                <div class="footer bg-light py-3">
                    <div class="small text-center">
                        <a href="{{route('signinpage')}} ">Have  an account? Go To Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{asset('frondend_asset/js/custom.js')}}"></script>
@endsection
