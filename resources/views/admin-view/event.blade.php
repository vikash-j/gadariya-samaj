@extends('admin-view.layout.admin_master')
@section('title', 'Home')
@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
	
        <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Events</a> </div>
    <h1>Events</h1>
  </div>
			<div class="container-fluid"><hr>
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title"> <span class="icon"><i class="icon-picture"></i></span>
							   <h5>Add Events</h5>
							</div>
								<div class="widget-content nopadding">
								  <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
									
								<div class="control-group">
								  <label class="control-label">Tittle</label>
									<div class="controls">
								 	  <input type="text" name="required" id="required">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Date picker (dd-mm)</label>
									<div class="controls">
										<input type="text" data-date="01-02-2019" data-date-format="dd-mm-yyyy" value="01-02-2019" id="datepicker" class="datepicker">
										<span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
									</div>
								<div class="control-group">
								  <label class="control-label">Description</label>
									<div class="controls">
								 	  <textarea type="text" name="required" id="required"></textarea>
								</div>
								<div class="control-group">
								  <label class="control-label">Images</label>
									<div class="controls">
								 	  <input type="file" name="required" accept="image/*">
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
					<h5>Event List</h5>
				</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Tittle</th>
									<th>Description</th>
									<th>Image</th>
									<th>Origin</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="gradeX">
									<td>Trident</td>
									<td>Internet Explorer 4.0</td>
									<td>Win 95+</td>
									<td>Win </td>
									<td>nfgyhn 95+</td>
									<td style="text-align: center;"><a href="#"><i class="icon-edit"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div> 
			</div>
			</div>
	
</div>
</div>
@endsection