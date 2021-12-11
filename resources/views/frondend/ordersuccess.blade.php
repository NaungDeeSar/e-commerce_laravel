@extends('frondendtemplate')
@section('content')
<div class="container-fluid bg-light">
  <div class="container">
    <div class="col-12 my-2 py-3 mycart">
      <a href="{{route('indexpage')}}" style="text-decoration: none;font-weight: 700">HOME</a>
      
      <span class="ml-2 text-muted">Order Success</span>
       

    </div>  

  </div>
</div>
    <div class="container">

        <div class="row">
           
            <div class="col-md-12 text-success my-4 text-center">
                    <h3 class="text-muted text-success">Your Order is Successfully!</h3>
            <p class="text-muted">Yor order is submitted successfully. We will deliver to you within three days. Thank you.</p>
            <a href="{{route('indexpage')}}" class="btn btn-outline-danger">Continue Shopping</a>
                
        
            </div>
        </div>
        <!-- /.row -->
    </div>
    <div class="container-fluid features-area bg-light ptb-30 py-4 my-5">
        <div class="container my-2">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="featurebox">
                        <i class="fas fa-truck-moving fa-3x text-success py-3 ml-5"></i>
                        <h5 class="text-muted">Door to Door Delivery</h5>
                        <p class="text-muted">On-time Delivery</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="featurebox">
                        <i class="fas fa-headphones-alt fa-3x text-success py-3 ml-5"></i>
                        </i> <h5 class="text-muted">Customer Service</h5>
                        <p class="text-muted">Phone : <a href="tel:09000000">09-779-888-877</a>

                    </div> </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="featurebox">
                        <i class="fas fa-smile fa-3x text-success py-3 ml-5"></i>
                        <h5 class="text-muted">100% satisfaction</h5> <p class="text-muted">3 days return</p>
                    </div>
                </div> <div class="col-lg-3 col-md-6 col-12">
                    <div class="featurebox">
                        <i class="fa fa-credit-card fa-3x text-success py-3 ml-5"></i>
                        <h5 class="text-muted">Cash on Delivery</h5> <p class="text-muted">Online Payment</p>
                    </div> </div>
            </div> </div> </div>
@endsection
@section('script')
    <script src="{{asset('frondend_asset/js/custom.js')}}"></script>
    
@endsection

