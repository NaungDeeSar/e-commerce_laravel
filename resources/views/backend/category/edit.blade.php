@extends('backendtemplate')
@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Category Edit Page</h1>
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
                <h3 class="tile-title">Category Edit Form</h3>
                @if($errors->any())
                    <div class="alert alert-danger">

                            @foreach($errors->all() as $error)
                                <h5 class="text-primary">{{$error}}</h5>
                            @endforeach


                    </div>
                    @endif
                <div class="tile-body">
                    <form class="row" action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                         @csrf
                        @method('PUT')

                        <div class="form-group col-md-3">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" \
                                   placeholder="Enter Brand Name" name="name" value="{{$category->name}}">

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Photo</label>
                            <input class="form-control" type="file" name="photo" >
                            <img src="{{asset($category->photo)}}" alt="" width="100px">
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

