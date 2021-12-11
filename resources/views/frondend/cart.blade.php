@extends('frondendtemplate')
@section('content')
<div class="container-fluid bg-light">
  <div class="container">
    <div class="col-12 my-2 py-3 mycart">
      <a href="{{route('indexpage')}}" style="text-decoration: none;font-weight: 700">HOME</a>
      <span class="ml-2 text-muted">Shopping Cart</span>      

    </div>  

  </div>
</div>
    <div class="container">
        <div class="row">            
            <div class="col-md-12">            
    <section id="cart_items">
        <div class="container">
            
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>                   

                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
     <!--/#cart_items-->

                <form method="" action="" class="checkoutform">
                    <div class="form-group">
                        <textarea class="form-control" name="notes" placeholder="Plz insert notes..." required id="notes"></textarea>
                    </div>
                <div class="form-group">
                    <a href="{{route('indexpage')}}" class="btn btn-outline-danger shadow rounded ">Continue Shopping</a>
                        
                       
                        @guest
                            <a href="{{route('login')}}" class="btn btn-info float-right shadow">
                                <i class="fa fa-shopping-cart"></i> Checkout</a>
                        @else
                            <input type="submit" name="btnsubmit" value="Checkout" class="btn btn-success float-right">
                        @endguest

                    </div>
                </form>

            </div>
        </div>
        <!-- /.row -->
        <br>
    </div>
  
@endsection
@section('script')
      <script src="{{asset('frondend_asset/js/custom.js')}}"></script>
       <script src="{{asset('frondend_asset/js/jquery.number.js')}}"></script>
     
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // $(document).ready(function (argument) {
        //     // using form method post
        //      $('#ls').val(localStorage.getItem('heinshop'));
        //      localStorage.clear();
        // })
        $(document).ready(function (argument) {
            // using form method post
            // $('#ls').val(localStorage.getItem('items'));

            // using ajax post
            $('.checkoutform').submit(function(e){
                let notes = $('#notes').val();
                if (notes === "") {
                    return true;
                }else{
                    let order = localStorage.getItem('heinshop'); // JSON String
                    $.post("{{route('orders.store')}}",{ls:order,notes:notes},function (response) {
                        // alert(response.msg);
                        localStorage.clear();
                        location.href="{{route('order_success')}}";
                    })
                    e.preventDefault();
                }
            })
        })
    </script>
@endsection

