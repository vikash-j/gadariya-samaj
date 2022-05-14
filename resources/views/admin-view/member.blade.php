@extends('admin-view.layout.admin_master')
@section('title', 'Home')
@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Setting</a> </div>
    <h1>Member</h1>
  </div>
<!--End-breadcrumbs-->
	<div class="span11">
		<div class="widget-box">
			<div class="widget-content tab-content">
				
					<h3></h3></hr>
						
						<div class="widget-box">
							<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
							  <h5>Member List</h5>
							</div>
							<div class="widget-content nopadding">
							  <table class="table table-bordered data-table">
						  	    <thead>
								  <tr>
									<th>S.No.</th>
									<th>Name</th>
									<th>Age</th>
									<th>Address</th>
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
				</div>
        </div>
	</div>
	@endsection