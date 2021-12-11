@extends('backendtemplate')
@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Item Edit Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Item Edit Page</a></li>
      </ul>
    </div>
    <div class="container row">
        <div class="row col-md-8 offset-3">
            <form method="post" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="name" class="text-info">Photo</label>
                        <input type="file"  name="photo" class="form-control @error('photo') is-invalid @enderror">
                        <img src="{{asset($item->photo)}}" alt="" class="img-fluid" width="90px">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="text-info">Name</label>
                        <input type="text" value="{{$item->name}}" class="form-control @error('name') is-invalid @enderror" name="name">

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="price" class="text-info">Price</label>
                        <input type="number"value="{{$item->price}}" class="form-control @error('price') is-invalid @enderror" name="price">
                    </div>
                    <div class="col-md-6">
                        <label for="discount" class="text-info">Discount</label>
                        <input type="number" value="{{$item->discount}}" class="form-control" name="discount">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="cat_id" class="text-info">Brand_ID</label>
                        <select name="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                            <option value="">Selected Brands</option>
                            @foreach($brand as $b)
                                <option value="{{$b->id}}"{{$b->id==$item->brand_id? 'selected':''}}>{{$b->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="cat_id" class="text-info">Category_ID</label>
                        <select name="subcategory_id" class="form-control @error('subcategory_id') is-invalid @enderror">
                            <option value="">Selected Category</option>
                            @foreach($subcategory as $cat)
                                <option value="{{$cat->id}}" {{$cat->id==$item->subcategory_id? 'selected':''}}>{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <lable for="dsection">Description</lable>
                    <textarea name="description"  cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">
                          {{$item->description}}
                      </textarea>
                </div>
                <div class="form-group">
                    <button  type="submit" class="btn btn-info btn-block" id="demoSwal">
                        <i class="fa fa-lg fa-edit">Update</i>
                    </button>

                </div>
            </form>
        </div>



    </div>
  </main>
@endsection

