

    <div class="col-12">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{route('itemdetailpage',$item->id)}}">
                                    <img src="{{asset($item->photo)}}" alt="" />
                                </a>
                                
                                <h5 class="my-2"> 
                                    {{ number_format($item->discount) }} Ks /<del class="text-danger">{{ number_format($item->price) }} Ks</del></h5>
                                    <h6></h6>
                                <p>  {{$item->name}}</p>
                                  <input type="hidden" min="1" value="1" class="form-control w-25" id="qty">

                                <a  class="btn btn-default add-to-cart addtocart "   data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{$item->photo}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}">
                                    <i class="fa fa-shopping-cart">
                                        
                                    </i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>          



