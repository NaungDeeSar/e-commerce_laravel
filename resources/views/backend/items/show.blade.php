@extends('backendtemplate')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Item Detail Page</h1>
                <p>Start a beautiful journey here</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Item Detail Page</a></li>
            </ul>
        </div>
        <div class="container row">

            <div class="col-md-7">
                <div class="card">


                    <div class="card-body">


                        <table class="table table-borderless">
                            <tr>
                                <th>ID</th>
                                <th>{{$item->id}}</th>
                            </tr>
                            <tr>
                                <th>Codeno</th>
                                <th>{{$item->codeno}}</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>{{$item->name}}</th>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <th>{{$item->price}}MMK</th>
                            </tr>
                            <tr>
                                <th>Discount</th>
                                <th>{{$item->discount}}MMK</th>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <th>{{$item->brand->name}}</th>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <th>{{$item->subcategory->category->name}}</th>
                            </tr>
                            <tr>
                                <th>Subcategory</th>
                                <th>{{$item->subcategory->name}}</th>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <label for="" class="text-primary">Photo</label>
                        <img src="{{asset($item->photo)}}" alt="" class="img-fluid">
                        <h6 class="text-primary py-2 my-1">Decription</h6>
                        <hr>
                        <p class="text-dark" style="font-size: 16px;text-indent: 20px;text-justify-trim: center">
                            {{$item->description}}
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection

