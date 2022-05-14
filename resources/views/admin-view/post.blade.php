@extends('admin-view.layout.admin_master')
@section('title', 'Home')
@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Blog</a><a href="#" class="current">Post</a> </div>
    <h1>Blog</h1>
  </div>
<!--End-breadcrumbs-->
	<div class="span11">
		<div class="widget-box">
		<h3>Post</h3></hr>
		<div class="container-fluid"><hr>
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title"> <span class="icon"><i class="icon-info-sign"></i></span>
							   <h5>Add Post</h5>
							</div>
								<div class="widget-content nopadding">
								  <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
								<div class="control-group"></br>
									  <label class="control-label">Categories</label>
										<div class="controls">
										  <Select>
										    <option value="Select">Select</option>
										    <option value="Country">Categories name</option>
										  </select>
										</div>
									</div>	
								<div class="control-group">
								  <label class="control-label">Post Tittle</label>
									<div class="controls">
								 	  <input type="text" name="required" id="required">
									</div>
								</div>
								<div class="control-group">
								  <label class="control-label">Description</label>
									<div class="controls">
								 	  <textarea type="text" name="required" id="required"></textarea>
									</div>
								</div>
								<div class="control-group">
								  <label class="control-label">Photo</label>
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
					<h5>Post List</h5>
				</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Category</th>
									<th>Tittle</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="gradeX">
									<td>Trident</td>
									<td>T</td>
									<td>Trivrgr</td>
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
<!--end-main-container-part-->
@endsection