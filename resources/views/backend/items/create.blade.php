@extends('backendtemplate')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Add Items page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a> Add Items Page</a></li>
      </ul>
    </div>
      <div class="container">
          <div class="row col-md-8 offset-3">
              <form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                      <div class="col-md-6">
                          <label for="name" class="text-info">Photo</label>
                          <input type="file" value="{{old('photo')}}" name="photo" class="form-control @error('photo') is-invalid @enderror" >

                      </div>
                      <div class="col-md-6">
                          <label for="name" class="text-info">Name</label>
                          <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name">

                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-6">
                          <label for="price" class="text-info">Price</label>
                          <input type="number"value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror" name="price">
                      </div>
                      <div class="col-md-6">
                          <label for="discount" class="text-info">Discount</label>
                          <input type="number" value="{{old('discount')}}" class="form-control" name="discount">
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-6">
                          <label for="cat_id" class="text-info">Brand_ID</label>
                          <select name="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                              <option value="">Selected Brands</option>
                              @foreach($brand as $b)
                                  <option value="{{$b->id}}">{{$b->name}}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col-md-6">
                          <label for="cat_id" class="text-info">Category_ID</label>
                          <select name="subcategory_id" class="form-control @error('subcategory_id') is-invalid @enderror">
                              <option value="">Selected Category</option>
                              @foreach($subcategory as $cat)
                                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <lable for="dsection">Description</lable>
                      <textarea name="description"  cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">
                          {{old('description')}}
                      </textarea>
                  </div>
                  <div class="form-group">
                      <button  type="submit" class="btn btn-info btn-block" id="demoSwal">
                          <i class="fa fa-lg fa-plus"></i> Add Items
                      </button>

                  </div>
              </form>
          </div>
      </div>

  </main>

@endsection

@section('script')
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('backend_asset/js/plugins/bootstrap-notify.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('backend_asset/js/plugins/sweetalert.min.js')}}"></script>

    <script type="text/javascript">
        // $('#demoSwal1').click(function(){
        //     $.notify({
        //         title: "Update Complete : ",
        //         message: "Something cool is just updated!",
        //         icon: 'fa fa-check'
        //     },{
        //         type: "info"
        //     });
        // });
        $('#demoSwal').click(function(){
                    swal("Added!", "New item  has been Added.", "success");
        });
    </script>
@endsection
