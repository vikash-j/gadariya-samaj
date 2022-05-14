@extends('admin-view.layout.admin_master')
@section('title', 'Home')
@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Setting</a> </div>
    <h1>Place Master</h1>
  </div>
<!--End-breadcrumbs-->
	<div class="span11">
		<div class="widget-box">
			<div class="widget-title">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#tab1">24 Head Of States</a></li>
					<li><a data-toggle="tab" href="#tab2">Assembly Head</a></li>
					<li><a data-toggle="tab" href="#tab3">General Membership List</a></li>
				</ul>
			</div>
			<div class="widget-content tab-content">
				<div id="tab1" class="tab-pane active">
					<h3>24Head Of States</h3></hr>
						
						<div class="widget-box">
							<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
							  <h5>24 Head Of State List</h5>
							</div>
							<div class="widget-content nopadding">
							  <table class="table table-bordered data-table">
						  	    <thead>
								  <tr>
									<th>S.No.</th>
									<th>Name</th>
									<th>Position</th>
									<th>City</th>
									<th>Action</th>
							 	  </tr>
							    </thead>
							    <tbody>
							   	  <tr>
									<td>2</td>
									<td>Trident</td>
									<td>Trnt</td>
									<td>Internet Explorer 4.0</td>
									<td style="text-align: center;"><a href="#"><i class="icon-edit"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
								  </tr>
							    </tbody>
						      </table>
							</div> 
						</div>
						</div>
				
        <div id="tab2" class="tab-pane">
		<h3>Assembly Head</h3></hr>
        <div class="widget-box">
				<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
					<h5>Assembly Head List</h5>
				</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Name</th>
									<th>Position</th>
									<th>City</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>4</td>
									<td>dfrfgv</td>
									<td>Internet Explorer 4.0</td>
									<td>Win 95+</td>
									<td style="text-align: center;"><a href="#"><i class="icon-edit"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div> 
			</div>
			 </div>
		
            
            <div id="tab3" class="tab-pane">
			<h3>General Membership List</h3></hr>
		<div class="widget-box">
				<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
					<h5>General Membership List</h5>
				</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Name</th>
									<th>Position</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="gradeX">
									<td>5</td>
									<td>xplorer 4.0</td>
									<td>Wfbgtfbn</td>
									<td style="text-align: center;"><a href="#"><i class="icon-edit"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div> 
			</div>
			</div>
		</div>
			
          </div>
        </div>
	
      </div>
<!--end-main-container-part-->
@endsection