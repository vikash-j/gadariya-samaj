@extends('admin-view.layout.admin_master')
@section('title', 'Home')
@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
	<h1>Slider</h1>
  </div>
<!--End-breadcrumbs-->
	<div id="tab2" class="tab-pane">
          <h3></h3></hr>
			<div class="container-fluid"><hr>
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title"> <span class="icon"><i class="icon-info-sign"></i></span>
							   <h5>Add Slider</h5>
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
								  <label class="control-label">Description</label>
									<div class="controls">
								 	  <textarea type="text" name="required" id="required"></textarea>
									</div>
								</div>
								<div class="control-group">
								  <label class="control-label">Slider photo</label>
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
					<h5>Slider List</h5>
				</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Tittle</th>
									<th>Image</th>
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
</div>
@endsection