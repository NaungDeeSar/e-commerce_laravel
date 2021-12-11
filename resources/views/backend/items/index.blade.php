@extends('backendtemplate')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Items</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Items Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="title-header">

            <h2 class="d-inline-block">Items List</h2>
              <a class="btn btn-primary float-right" href="{{route('items.create')}}"><i class="fa fa-lg fa-plus"></i>Add New</a>
          </div>
            <hr>

          <table class="table table-bordered dataTable ">
            <thead>
              <tr>
                <th>No</th><th>CodeNo</th>
                <th>Name</th>
                  <th>Photo</th>
                  <th>Price</th>
                  <th>Brand_ID</th>
                  <th>Category_ID</th>
                <th>Actions</th>
              </tr>
            </thead>
              <tfoot>
              <tr>
                  <th>No</th>
                  <th>CodeNo</th>
                  <th>Name</th>
                  <th>Photo</th>
                  <th>Price</th>
                  <th>Brand_ID</th>
                  <th>Category_ID</th>
                  <th>Actions</th>
              </tr>

              </tfoot>
            <tbody>
            @php
            $i=1;
            @endphp
                 @foreach($items as $item)

              <tr>
                <td>{{$i++}}</td>
                  <td>{{$item->codeno}}</td>
                <td>{{$item->name}}</td>
                  <td>                        
                      <img src="{{asset($item->photo)}}" al="image" class="img-fluid" width="80px">
                
                  </td>
               <td>{{$item->price}} MMK</td>
                  <td>{{$item->brand_id}}</td>
                  <td>{{$item->subcategory_id}}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-primary" href="{{route('items.show',$item->id)}}">
                            <i class="fa fa-lg fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{route('items.edit',$item->id)}}">
                            <i class="fa fa-lg fa-edit"></i>
                        </a>

                        <form id="demo" method="post" action="{{route('items.destroy',$item->id)}}" class="d-inline-block">
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
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('backend_asset/js/plugins/bootstrap-notify.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('backend_asset/js/plugins/sweetalert.min.js')}}"></script>

    <script type="text/javascript">

        $('#demo').click(function(){
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        });
    </script>
@endsection

