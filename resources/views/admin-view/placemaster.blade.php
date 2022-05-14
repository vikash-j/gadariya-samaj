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
					<li class="active"><a data-toggle="tab" href="#tab1">Country</a></li>
					<li><a data-toggle="tab" href="#tab2">State</a></li>
					<li><a data-toggle="tab" href="#tab3">City</a></li>
				</ul>
			</div>
			<div class="widget-content tab-content">
				<div id="tab1" class="tab-pane active">
					<h3>Country</h3></hr>
						<div class="container-fluid"><hr>
							<div class="row-fluid">
								<div class="span12">
									<div class="widget-box">
										<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
											<h5>Add Country</h5>
										</div>
										<div class="widget-content nopadding">
											<form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
												<div class="control-group">
													<label class="control-label">Country Name</label>
														<div class="controls">
															<input type="text" name="required" id="required">
														</div>
												</div>
												<div class="form-actions">
												  <input type="submit" value="Add" class="btn btn-success">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						<div class="widget-box">
							<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
							  <h5>Country List</h5>
							</div>
							<div class="widget-content nopadding">
							  <table class="table table-bordered data-table">
						  	    <thead>
								  <tr>
									<th>S.No.</th>
									<th>Country</th>
									<th>Action</th>
							 	  </tr>
							    </thead>
							    <tbody>
							   	  <tr>
									<td>Trident</td>
									<td>Internet Explorer 4.0</td>
									<td style="text-align: center;"><a href="#"><i class="icon-edit"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
								  </tr>
							    </tbody>
						      </table>
							</div> 
						</div>
						</div>
				</div>
        <div id="tab2" class="tab-pane">
          <h3>State</h3></hr>
			<div class="container-fluid"><hr>
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title"> <span class="icon"><i class="icon-info-sign"></i></span>
							   <h5>Add State</h5>
							</div>
								<div class="widget-content nopadding">
								  <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
									<div class="control-group"></br>
									  <label class="control-label">Country Name</label>
										<div class="controls">
										  <Select>
										    <option value="Select">Select</option>
										    <option value="Country">Country name</option>
										  </select>
										</div>
									</div>
								<div class="control-group">
								  <label class="control-label">State Name</label>
									<div class="controls">
								 	  <input type="text" name="required" id="required">
									</div>
								</div>
								<div class="control-group">
								  <label class="control-label">Is Territory</label>
									<div class="controls">
									  <input type="radio" name="y"value="yes" id="required">Yes
									  <input type="radio" name="required" value="no" id="required">No
									</div>
								</div>
								<div class="form-actions">
								  <input type="submit" value="Add" class="btn btn-success">
								</div>
									</form>
								</div>
						</div>
					</div>
				</div>
       
		
		<div class="widget-box">
				<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
					<h5>State List</h5>
				</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Country</th>
									<th>State</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="gradeX">
									<td>Trident</td>
									<td>Internet Explorer 4.0</td>
									<td>Win 95+</td>
									<td style="text-align: center;"><a href="#"><i class="icon-edit"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div> 
			</div>
			</div>
		</div>
            
            <div id="tab3" class="tab-pane">
			<h3>City</h3></hr>
			    <div class="container-fluid"><hr>
					<div class="row-fluid">
						<div class="span12">
							<div class="widget-box">
								<div class="widget-title"> <span class="icon"><i class="icon-info-sign"></i></span>
								<h5>Add City</h5>
							</div>
							<div class="widget-content nopadding">
							<form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
								<div class="control-group"></br>
									<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Select State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Select class=></label>
										<option value="Select">Select</option>
										<option value="Country">Country name</option>
									</select>
										</div>
							
								<div class="control-group">
									<label class="control-label">State City</label>
										<div class="controls">
											<input type="text" name="required" id="required">
										</div>
								</div>
								<div class="control-group">
									<label class="control-label">Is District</label>
										<div class="controls">
											<input type="radio" name="required" value="yes" id="required">Yes
											<input type="radio" name="required" value="no" id="required">No
										</div>
								</div>
							<div class="form-actions">
								<input type="submit" value="Add" class="btn btn-success">
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        
		<div class="widget-box">
				<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
					<h5>City List</h5>
				</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Country</th>
									<th>State </th>
									<th>City</th>
									<th>Is District</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="gradeX">
									<td>Trident</td>
									<td>Internet Explorer 4.0</td>
									<td>Win 95+</td>
									<td>Winbfbbffd</td>
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
      </div>
 

<!--end-main-container-part-->
@endsection