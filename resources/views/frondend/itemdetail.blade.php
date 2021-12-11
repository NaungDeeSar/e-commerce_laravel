@extends('frondendtemplate')
@section('content')
<div class="container-fluid bg-light">
  <div class="container">
    <div class="col-12 my-2 py-3 mycart">
      <a href="{{route('indexpage')}}" style="text-decoration: none;font-weight: 700">HOME</a>
      <span class="text-muted ml-2">{{$item->subcategory->name}}</span>
       <i class="fas fa-angle-right text-danger"></i>
      <span>{{$item->name}}</span>

    </div>  

  </div>
</div>
<!-- /.row -->
     <!-- Product Detail Start -->
<section>
    <div class="container">
      <div class="row">  
            <div class="col-md-5">
              <div class="view-product">
                <img src="{{asset($item->photo)}}" alt="" / class="img-fluid">
                <h3>Image</h3>
              </div>
              <div id="similar-product" class="carousel slide my-2" data-ride="carousel"> 
                  <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                    <div class="item active">
                      <a href=""><img src="{{asset($item->photo)}}" alt="" class="sliderimg"></a>
                      <a href=""><img src="{{asset($item->photo)}}" alt=""  class="sliderimg"></a>
                      <a href=""><img src="{{asset($item->photo)}}" alt=""  class="sliderimg"></a>
                    </div>
                    
                   
                    
                  </div>

                  <!-- Controls -->
                  <a class="left item-control" href="#similar-product" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="right item-control" href="#similar-product" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
              </div>
            </div>
            <div class="col-md-7">
              <div class="product-information">
                <!--/product-information-->
                <img src="{{asset('frondend_asset/image/item_detail/new.jpg')}}" class="newarrival" alt="" />
                <h2>{{$item->name}}</h2>
                 
                <span>                 
                  <span>{{number_format($item->discount)}} Ks</span>
                  <span class="text-danger">/<del>{{number_format($item->price)}} Ks</del></span><br>
                  <label>Quantity:</label>
                  <input type="text" value="1" id="qty" />
                  <button type="button" class="btn btn-fefault cart addtocart"  data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{$item->photo}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                  </button>
                </span>
                <br>
                
                <b class="text-muted">Subcategory:</b> <span class="badge badge-primary">{{$item->subcategory->name}}</span>               
                <b class="text-muted">Brand:</b> <span class="badge badge-info">{{$item->brand->name}}</span>
                <i class="fa fa-facebook"></i>
                <h5 class="text-muted">Description</h5>

                <p class="text-justify p-2">{{$item->description}}</p>
              </div>
              <!--/product-information-->
            </div>
      </div>
    
    </div>

  </section>
  <section class="container">
      <div class="col-12 my-4">
           <h5 class="text-muted ">ဆက်စပ်ပစ္စည်းများ</h5>
                 <hr class="divider my-2">           
       </div>
         <div class="responsive1 slider1">
       @foreach($items as $item)        
        <div class="col-12 my-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{route('itemdetailpage',$item->id)}}">
                                    <img src="{{asset($item->photo)}}" alt="" />
                                </a>
                                
                               <h5 class="my-2"> 
                                    {{ number_format($item->discount) }} Ks /<del class="text-danger">{{ number_format($item->price) }} Ks</del></h5>
                                <p>  {{$item->name}}</p>
                                  <input type="hidden" min="1" value="1" class="form-control w-25" id="qty">

                                <a  class="btn btn-default add-to-cart addtocart "   data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{$item->photo}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}">
                                    <i class="fa fa-shopping-cart">
                                        
                                    </i>Add to cart</a>
                            </div>

                        </div>
                    </div>
        </div>
       @endforeach
       </div>
  </section>
                        

@endsection
@section('script')
 <script src="{{asset('frondend_asset/js/bootstrap.js')}}"></script>
    <script src="{{asset('frondend_asset/js/custom.js')}}"></script>
   <script type="text/javascript">
      $(document).ready(function (argument) {
       $('.responsive1').slick({
   slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
})
</script>
@endsection

