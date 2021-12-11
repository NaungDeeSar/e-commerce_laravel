@extends('backendtemplate')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Add Subcategory page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Add Subcategory Page</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add Subcategory</h3>
                @if($errors->any())
                    <div class="alert alert-danger">

                            @foreach($errors->all() as $error)
                                <h5 class="text-primary">{{$error}}</h5>
                            @endforeach


                    </div>
                    @endif
                <div class="tile-body">
                    <form class="row" action="{{route('subcategories.store')}}" method="POST" enctype="multipart/form-data">
                         @csrf

                        <div class="form-group col-md-3">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" placeholder="Enter  Name" name="name">

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Category_id</label>
                            <select name="category_id" class="form-control">
                                <option value="">selected Option</option>
                                  @foreach($category as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group col-md-4 align-self-end">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </main>
@endsection

@section('script')
  <script type="text/javascript" src="{{ asset('backend_asset/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('backend_asset/js/plugins/dataTables.bootstrap.min.js')}}"></script>
  <script type="text/javascript">
    $('.dataTable').DataTable();
  </script>
@endsection
