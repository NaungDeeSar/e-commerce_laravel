@extends('backendtemplate')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Category</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Category Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="title-header">
            <h2 class="d-inline-block">Category List</h2>
              <a class="btn btn-primary float-right" href="{{route('categories.create')}}"><i class="fa fa-lg fa-plus"></i>Add New</a>
          </div>
            <hr>

          <table class="table table-bordered dataTable ">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @php
            $i=1;
            @endphp
                 @foreach($category as $cat)

              <tr>
                <td>{{$i++}}</td>
                <td>{{$cat->name}}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-primary" href="{{route('categories.show',$cat->id)}}">
                            <i class="fa fa-lg fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{route('categories.edit',$cat->id)}}"><i class="fa fa-lg fa-edit"></i></a>

                        <form method="post" action="{{route('categories.destroy',$cat->id)}}" onsubmit="return confirm('are your sure?')" class="d-inline-block">
                            @csrf
                            @method('DELETE')

                            <button type="submit" name="onsubmit" class="btn btn-primary" >
                                <i class="fa fa-trash"></i>

                            </button>
                        </form>


                    </div>

                </td>
              </tr>
                 @endforeach
            </tbody>
          </table>

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
