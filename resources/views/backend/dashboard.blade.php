@extends('backendtemplate')

@section('content')
 <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Dashboard Page</h1>
        
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard Page</a></li>
      </ul>
    </div>
    <div class="row">
    	<div class="col-md-6 col-lg-3">
    		<div class="widget-small primary coloured-icon"><i class="icon fa fa-bar-chart fa-3x"></i>
    			<div class="info">
    				<h4>Items</h4>
    				<p><b>20</b></p>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-6 col-lg-3">
    		<div class="widget-small info coloured-icon"><i class="icon fa fa-signal fa-3x"></i>
    			<div class="info">
    				<h4>Categories</h4>
    				<p><b>8</b></p>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-6 col-lg-3">
    		<div class="widget-small warning coloured-icon"><i class="icon fa fa-user fa-3x"></i>
    			<div class="info">
    				<h4>Users</h4>
    				<p><b>10</b></p>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-6 col-lg-3">
    		<div class="widget-small danger coloured-icon"><i class="icon fa fa-area-chart fa-3x"></i>
    			<div class="info">
    				<h4>Orders</h4>
    				<p><b>10</b></p>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Monthly Sales</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Support Requests</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>

  </main>
@endsection

