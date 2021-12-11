@extends('backendtemplate')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
                <p>Start a beautiful journey here</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="title-header">
                        <h2 class="d-inline-block">Order List</h2>
                    </div>

                    <table class="table table-bordered dataTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Voucher No</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; @endphp
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$order->voucherno}}</td>
                                <td>{{number_format($order->total)}} Ks</td>
                                <td>{{$order->orderdate}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>
                                    <a href="{{route('orders.show',$order->id)}}" class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
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


