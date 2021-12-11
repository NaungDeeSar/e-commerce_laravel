@extends('backendtemplate')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Show Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Show Page</a></li>
      </ul>
    </div>
      <div class="row">

          <div class="col-md-8 offset-2">
              <div class="tile">

                  <div class="tile-body">
                      <form class="form-horizontal">
                          <div class="form-group row">
                              <label class="control-label col-md-3">ID</label>
                              <div class="col-md-8">
                                  <input class="form-control" type="text"
                                         value="{{$category->id}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="control-label col-md-3">Name</label>
                              <div class="col-md-8">
                                  <input class="form-control" type="email"
                                         value="{{$category->name}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="control-label col-md-3">Photo</label>
                              <div class="col-md-8">

                                  <img src="{{asset('/backend_asset/category/'.$category->photo)}}" alt="brand image" class="img-fluid">
                              </div>
                          </div>


                      </form>
                  </div>

              </div>
          </div>
      </div>
  </main>
@endsection

