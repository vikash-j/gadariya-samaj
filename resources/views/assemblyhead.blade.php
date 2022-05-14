@extends('layout.master')
@section('title', 'Assembly Head')
@section('content')
<!--======= HOME MAIN SLIDER =========-->
<section class="sub-bnr" data-stellar-background-ratio="0.3">
  <div class="overlay-gr">
	<div class="container">
	  <h2>महासभा प्रमुख</h2>
	  <p></p>
	</div>
  </div>
</section>

<!-- Breadcrumb -->
<ol class="breadcrumb">
  <li><a href="{{url('/')}}">मुख्य पृष्ठ</a></li>
  <li class="active">महासभा प्रमुख</li>
</ol>

<!-- CONTENT START -->
    <table id="assemblychief" class="table table-striped table-bordered" style="width:150%">
		<thead>
   		 <tr>
   			 <th>क्र.</th>
   			 <th>नाम</th>
   			 <th>पद</th>
   			 <th>राज</th>
   		 </tr>
   	 </thead>
   	 <tbody>
   		 <tr>
   			 <td></td>
   			 <td></td>
   			 <td></td>
   			 <td></td>
   		 </tr>
   	 </tbody>
   	 <tfoot>
   		 <tr>
   			 <th>क्र.</th>
   			 <th>नाम</th>
   			 <th>पद</th>
   			 <th>राज</th>
   		 </tr>
   	 </tfoot>
    </table>


</section>
@endsection
