@extends('backendtemplate')
@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> SubCategory Edit Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Edit Page</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Subcategory Edit Form</h3>
                @if($errors->any())
                    <div class="alert alert-danger">

                            @foreach($errors->all() as $error)
                                <h5 class="text-primary">{{$error}}</h5>
                            @endforeach


                    </div>
                    @endif
                <div class="tile-body">
                    <form class="row" action="{{route('subcategories.update',$subcategory->id)}}" method="POST" enctype="multipart/form-data">
                         @csrf
                        @method('PUT')

                        <div class="form-group col-md-3">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" \
                                   placeholder="Enter Brand Name" name="name" value="{{$subcategory->name}}">

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Category_id</label>
                            <select name="category_id" class="form-control">
                                <option value="">selected Option</option>
                                @foreach ($category as $cat)
                                    <option  value="{{$cat->id}}" {{ $cat->id == $subcategory->category_id ? 'selected':'' }}>{{$cat->name}}</option>
                                @endforeach


                            </select>

                        </div>
                        <div class="form-group col-md-4 my-4">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-fw fa-lg fa-edit"></i>Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </main>
@endsection

