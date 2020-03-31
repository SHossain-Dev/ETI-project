@extends('layouts.frontend.master') 

@section('style-lib')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--fontawesome link-->
    	<link rel="stylesheet" href="fonts/font-awesome.min.css">
    	    <!--CSS link
     <link rel="stylesheet" type="text/css" href="css/style.css">-->

     	<!--CSS link
     	<link rel="stylesheet" type="text/css" href="css/Eti_Style.css">-->

     	<!--Js link-->

     	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
@push('custom-css')
	<style type="text/css">
		body {

		margin: 5%;
		margin-top: 5%;
		margin-bottom: 0%;

		}

		#icon1 {

		background-color: #68b2ff; 
		border: 2px solid #ffffff;
		color: white;
		padding: 15px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px; 
		border-radius: 50%;
		}
	</style>
@endpush

@section('page-content')
	
<h2><b>F.D.G</b></h2>


<div style="height:60px; width:100%; background-color: #68b2ff; margin-top:20px;margin-bottom:20px;" > 

	<form style=" text-align:right; float:right;">
		<label for="gsearch"><b>Search</b> </label>
		<input  style="font-size:25px; border-radius: 8px; margin-top:10px; margin-right:5px; border: 1px solid #4CAF50; background-color: #68b2ff; width:280px;" type="search" id="gsearch" name="gsearch">

  </form>


  <div  style="float:left; text-align:center; margin-top:15px;">
	  <label style="padding-right:3px;"><b>Entries</b><select style="font-family: inherit; font-size: inherit; margin-left: 5px; width: 160px;background-color: blue; height: 30px;"> 
		  <option value="10">10</option> 
		  <option value="25">25</option> 
		  <option value="50">50</option> 
		  <option value="100">100</option> 
	  </select>  
	  </label> 
  </div>
</div>


<div class="col-xs-12 col-sm-12 col-lg-12 table-responsive" style="padding-top:10px;">
  <div id="faculty-table_wrapper" class="dataTables_wrapper no-footer">
	  <div class="wrapper">
	  <!--
	  <div> table-striped table-bordered table-hover table-condensed table-responsive dataTable no-footer-->

	  <table id="faculty-table" class="table table-striped table-bordered table-hover table-condensed dataTable no-footer" role="grid" aria-describedby="faculty-table_info" style="margin-bottom:100px; border-color:blue;"> 

	  <thead style="background-color:#68b2ff; font-size:12px; width:100%;">
		  <tr role="row"> 
			  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Picture" style="text-align: center; height: 40px; font-size: 20px; color: white; background-color: #68b2ff; width: 33%; border-right-color:white;">Picture</th> 

			  <th class="sorting" tabindex="0" aria-controls="faculty-table" rowspan="1" colspan="1" aria-label="Name &amp;amp; Designation: activate to sort column ascending" style=" width:100px; text-align: center; height: 40px; font-size: 20px; color: white; background-color: #68b2ff; width: 33%;">Name &amp; Designation</th> 


			  <th class="sorting" tabindex="0" aria-controls="faculty-table" rowspan="1" colspan="1" aria-label="Contact(Phone &amp;amp; Email): activate to sort column ascending" style="width: 146px; text-align: center; height: 40px; font-size: 20px; color: white; background-color: #68b2ff; width:33%;">Contact<br/>(Phone &amp; Email)</th> 
		  </tr>
	  </thead>

	  <tbody>

		  <tr role="row" class="odd" style="background-color: white;">

	  <td style="width:33%; border-bottom-color:white; border-left-color: #68b2ff; border-right-color:#68b2ff;"> 

		  <img style="border:0px solid #CCC; border-radius: 50%; width:200px;" alt="Avatar" class="avatar" src="image/1.jpg"> 
	  </td>

	  <td style="width:33%; text-align:left; border-bottom-color:white; border-right-color:#68b2ff;"> 	<a href="javascript:void(0)" id="id_3" class="cvshow">
			  <span style="font-size:12px;font-family: Arial;position:relative;left:-5px;">Dr. M ASLAM ALAM</span> 
		  </a> 
		  <br> 
		  <span style="font-size:11px;font-family:Arial;">Rector (Senior Secretary to the Govt.)</span> 
	  </td>


	  <td style="width:33%; text-align:left; background-color: white; border-bottom-color:white; border-right-color:#68b2ff;"> 

		  <div class="row text-center">
			  <div class="col-md-8" style="height:50px;">

				  <i class="fa fa-envelope-o" id="icon1" aria-hidden="true" style=" float:left; margin:0px;"></i>
				  <p style=" margin:0px; font-size:20px;">dg_eti@yahoo.com</p> 
			  </div>

			  <div class="col-md-7" style="height:50px;">
				  <i class="fa fa-phone" id="icon1" aria-hidden="true" style="float:left; margin:0px;"></i>
				  <p style="float:right; margin:0px; font-size:20px;"> +88 02 8181 731 </p>
			  </div>

			  <div class="col-md-6" style="height:50px;">
				  <i class="fa fa-file-text-o" id="icon1" aria-hidden="true" style="float:left; margin:0px;"></i>
				  <p style="float:right; margin:0px; font-size:20px;"> 01127765654</p>
			  </div>
			  </div>
	  </td>

  </tr> 



  <tr role="row" class="even" style= "background-color: white;">

	  <td style="width:33%; text-align:left; vertical-align:middle; border-bottom-color: white; border-right-color:#68b2ff; border-left-color: #68b2ff;"> 
		  <img style="border:0px solid #CCC; border-radius: 50%; width:200px;" alt="Avatar" class="avatar" src="image/3.jpg"> 
	  </td>

	  <td style="width:33%; text-align:left; vertical-align:middle; border-bottom-color:white; border-right-color:#68b2ff;"> 
		  <a href="javascript:void(0)" id="id_3" class="cvshow"> 
			  <span style="font-size:12px;font-family: Arial;position:relative;left:-5px;">A. S. Shameem Ahmed</span></a> 
			  <br> 
			  <span style="font-size:11px;font-family:Arial;">Member Directing Staff (R &amp; C)(Additional Secretary to the Govt.) 
			  </span> 
	  </td>


	  <td style="width:33%; text-align:left; background-color: white; border-bottom-color:white; border-right-color:#68b2ff;"> 

		  <div class="row text-center">
			  <div class="col-md-8" style="height:50px;">

				  <i class="fa fa-envelope-o" id="icon1" aria-hidden="true" style=" float:left; margin:0px;"></i>
				  <p style=" margin:0px; font-size:20px;">dg_eti@yahoo.com</p> 
			  </div>

			  <div class="col-md-7" style="height:50px;">
				  <i class="fa fa-phone" id="icon1" aria-hidden="true" style="float:left; margin:0px;"></i>
				  <p style="float:right; margin:0px; font-size:20px;"> +88 02 8181 731 </p>
			  </div>

			  <div class="col-md-6" style="height:50px;">
				  <i class="fa fa-file-text-o" id="icon1" aria-hidden="true" style="float:left; margin:0px;"></i>
				  <p style="float:right; margin:0px; font-size:20px;"> 01127765654</p>
			  </div>
			  </div>
	  </td>

  </tr> 

  <tr role="row" class="odd" style= "background-color: white; border: none;">
	  <td style="width:33%; text-align:left; vertical-align:middle;  border-bottom-color:#68b2ff; border-right-color:#68b2ff; border-left-color: #68b2ff;"> 
		  <img style="border:0px solid #CCC; border-radius: 50%; width:200px;" alt="Avatar" class="avatar" src="image/1.jpg"> 
	  </td>

	  <td style="width:33%; text-align:left; vertical-align:middle; border-bottom-color: #68b2ff; border-right-color:#68b2ff;"> 
		  <a href="javascript:void(0)" id="id_3" class="cvshow"> 
			  <span style="font-size:12px;font-family: Arial;position:relative;left:-5px;">A. S. Shameem Ahmed</span></a> 
		  <br> 
		  <span style="font-size:11px;font-family:Arial;">Member Directing Staff (R &amp; C)(Additional Secretary to the Govt.)</span> 
	  </td>


	   <td style="width:33%; text-align:left; background-color: white; border-bottom-color:#68b2ff; border-right-color:#68b2ff;"> 

		  <div class="row text-center">
			  <div class="col-md-8" style="height:50px;">

				  <i class="fa fa-envelope-o" id="icon1" aria-hidden="true" style=" float:left; margin:0px;"></i>
				  <p style=" margin:0px; font-size:20px;">dg_eti@yahoo.com</p> 
			  </div>

			  <div class="col-md-7" style="height:50px;">
				  <i class="fa fa-phone" id="icon1" aria-hidden="true" style="float:left; margin:0px;"></i>
				  <p style="float:right; margin:0px; font-size:20px;"> +88 02 8181 731 </p>
			  </div>

			  <div class="col-md-6" style="height:50px;">
				  <i class="fa fa-file-text-o" id="icon1" aria-hidden="true" style="float:left; margin:0px;"></i>
				  <p style="float:right; margin:0px; font-size:20px;"> 01127765654</p>
			  </div>
			  </div>
	  </td>

  </tr> 

</tbody>

  </table> 
</div> 

</div>
</div>
@endsection