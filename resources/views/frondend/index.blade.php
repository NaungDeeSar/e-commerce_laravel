@extends('frondendtemplate')
@section('content')
<div class="container-fluid bg-light">
   <div class="container">
    <div class="row">
      <div class="col-lg-3">        
         <x-siderbar-component></x-siderbar-component>
     </div>
     <!-- /.col-lg-3 -->
     <div class="col-lg-9">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner shadow rounded" role="listbox">

                            
            <div class="carousel-item active">

               <img class="d-block img-fluid" src="{{asset('frondend_asset/image/slider4.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('frondend_asset/image/t-shirt.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('frondend_asset/image/laptop.png')}}" alt="Third slide">
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</div>
<!-- /.col-lg-9 -->
</div>
</div>
</div>
<!-- /slider end row -->
{{--    promotion items--}}
<div class="container py-4 promotion_item1 shadow p-3 mb-5 bg-white ">
   <div class="row">
       <div class="col-12">
           <h5 class="text-muted ">ပရိုမိုးရှင်းနောက်ဆုံးနေ့ပစ္စည်းများ</h5>
                 <hr class="divider my-2">
           
       </div>
         <div class="responsive slider1">
       @foreach($items as $item)        
       <x-item-component :item=$item></x-item-component>
       @endforeach
       </div>
   </div>
   <!-- /.row -->

</div>
<div class="container py-5">
    <div class="row">
        <div class="col-12" style="border-left: 3px solid red">
            <h5>ရရှိနိုင်သည့်အမှတ်တံဆိပ်များ</h5>
           
        </div>           
    
        <!-- Brand Start -->       
        <div class="owl-carousel owl-theme my-3">
           @foreach($brands as $brand)
           <div class="item py-2">
            <img src="{{asset($brand->photo)}}" class="img-fluid" alt="" style="cursor: pointer;">
            {{--                <p class="text-center mt-2">{{$brand->name}}</p>--}}
        </div>
        @endforeach

    </div>         

    <!-- Brand End --> 


</div>
</div>
<div class="container-fluid bg-light">
   <div class="container py-5">
       <div class="row">
           <div class="col-12" style="border-left: 3px solid red">
               <h5 class="">အမျိုးအစားများ</h5>
               {{--   <hr class="divider my-2"> --}}
           </div>
            
           <div class="cat_items_area row py-3 my-2 bg-white">
               @foreach($category as $category)
               <ul>
                 <li>                          
                     <a href="#" class="container1">  
                        <img src="{{asset($category->photo)}}" class="img-fluid ml-3 image" >
                        <div class="middle">
                            <div class="text-muted text">{{$category->name}} </div>
                        </div>
                       
                       

                    </a>

                </li>
            </ul>
                  
               @endforeach
           </div>
       </div>
   </div>

</div>

 @endsection

           @section('script')
           <script src="{{asset('frondend_asset/js/custom.js')}}"></script>
           <script type="text/javascript">
            $(document).ready(function (argument) {
              $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
                autoplayTimeout:2000,
                responsive:{
                    0:{
                        items:3
                    },
                    600:{
                        items:4
                    },
                    1000:{
                        items:6
                    }
                }
            });  

   
     $('.responsive').slick({
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

