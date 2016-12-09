@extends('layouts.master')

@section('title')
{{--Write Suitable Title for Page--}}
Dashboard
@stop

@section('seo')
{{--Do your SEO Work here--}}
@stop

@push('header')
{{--Add any CSS/JS files to Header--}}
<link href="{{asset('css/ace.min.css')}}" rel="stylesheet">

@endpush

@section('content')
{{--Your page Content Goes here--}}
	<div class="container" style="padding-left:25px;">
		
		<div class="col-md-8 col-sm-12">
		
			
			
						<div class="main-content">
				<div class="main-content-inner">
					
					<div class="page-content2">
						

						<div class="page-header">
							<h1>
								User Profile
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<a href="#">Welcome back Sungare </a>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">

								<div>
									<div id="user-profile-2" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Profile
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#feed">
														<i class="orange ace-icon fa fa-rss bigger-120"></i>
														View Posted Jobs
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#friends">
														<i class="blue ace-icon fa fa-users bigger-120"></i>
														View Applicants
													</a>
												</li>
												
												<li>
													<a data-toggle="tab" href="#PostJobs">
														<i class="blue ace-icon fa fa-users bigger-120"></i>
														Post a new Job
													</a>
												</li>

											</ul>

											<div class="tab-content no-border padding-24">
												<div id="home" class="tab-pane in active">
													<div class="row">
														<div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
																<img class="img-responsive" alt="Sungare Technologies Pvt. Ltd." id="" src="images/Company-Profile.png" />
															</span>

															<div class="space space-4"></div>

															
														</div><!-- /.col -->

														<div class="col-xs-12 col-sm-9">
															<h4 class="blue">
																<span class="middle">Sungare Technologies Pvt. Ltd.</span>
															</h4>

															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Username </div>

																	<div class="profile-info-value">
																		<span>admin</span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Location </div>

																	<div class="profile-info-value">
																		<i class="fa fa-map-marker light-orange bigger-110"></i>
																		<span>2nd floor , Srikrishna Appt,Katepuram Chowk, Pimple Gurav </span>
																		<span>Pune</span>
																	</div>
																</div>

																

																<div class="profile-info-row">
																	<div class="profile-info-name"> Last Online </div>

																	<div class="profile-info-value">
																		<span>3 hours ago</span>
																	</div>
																</div>
															</div>

															<div class="hr hr-8 dotted"></div>

															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Website </div>

																	<div class="profile-info-value">
																		<a href="#" target="_blank">www.sungare.com</a>
																	</div>
																</div>

																
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="space-20"></div>

													<div class="row">
														<div class="col-xs-12 col-sm-12">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-check-square-o bigger-110"></i>
																		Little About us
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		<p>
																			We are a creative web development company. What we hear, we conceptualize. What we read, we understand. But what we do, becomes part of WHO WE ARE.
																		</p>
																	</div>
																</div>
															</div>
														</div>

													
													</div>
												</div><!-- /#home -->

												<div id="feed" class="tab-pane">
													<div class="profile-feed row">
														<div class="col-sm-12">
															<div class="profile-activity clearfix">
																<div>
																	<a class="user" href="#">Business development executive - BDE</a>
																	
																	<h5 class="blue">Sungare Technologies Pvt. Ltd.</h5>
																	<p>We are looking for Business Development Executive who possesses a 
																		passion in sales and marketing and will work with our team of 
																		talented professionals.
																	</p>
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		an hour ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<a class="user" href="#">MBA Internship (Marketing) - InternMBA</a>
																	
																	<h5 class="blue">Sungare Technologies Pvt. Ltd.</h5>
																	<p>Internship for Business Development Executive who possesses a 
																		passion in sales and marketing and will work with our team of 
																		talented professionals.Must have excellent organizational skills, 
																		attention to detail, and the ability to prioritize in a changing environment.
																	</p>
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		an hour ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>
															
															<div class="profile-activity clearfix">
																<div>
																	<a class="user" href="#">Business development executive - BDE</a>
																	
																	<h5 class="blue">Sungare Technologies Pvt. Ltd.</h5>
																	<p>We are looking for Business Development Executive who possesses a 
																		passion in sales and marketing and will work with our team of 
																		talented professionals.
																	</p>
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		an hour ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<a class="user" href="#">MBA Internship (Marketing) - InternMBA</a>
																	
																	<h5 class="blue">Sungare Technologies Pvt. Ltd.</h5>
																	<p>Internship for Business Development Executive who possesses a 
																		passion in sales and marketing and will work with our team of 
																		talented professionals.Must have excellent organizational skills, 
																		attention to detail, and the ability to prioritize in a changing environment.
																	</p>
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		an hour ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>
															
														</div><!-- /.col -->

														
													</div><!-- /.row -->

													<div class="space-12"></div>

													<div class="center">
														<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
															<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
															<span class="bigger-110">View more posts</span>

															<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
														</button>
													</div>
												</div><!-- /#feed -->

												<div id="friends" class="tab-pane">
													<div class="profile-users clearfix">
												
														<div class="page-header">
															<h1>
																Job Applicant List
																<small>
																	<i class="ace-icon fa fa-angle-double-right"></i>
																	Static &amp; Dynamic Tables
																</small>
															</h1>
														</div><!-- /.page-header -->
														
														<div class="row">
																	<div class="col-xs-12">
														
																		<table id="simple-table" class="table table-striped table-bordered table-hover">
																			<thead>
																				<tr>
																					
																					<th>Sr.No.</th>
																					<th>Name</th>
																					<th>Email</th>
																					<th>Mobile</th>
																					<th>Date</th>
																					<th>Action</th>

																				</tr>
																			</thead>

																			<tbody>
																				<tr>
																				
																					<td>1</td>
																					<td><a href="#">Amol Patil</a></td>
																					<td>amolpatil91088@gmail.com</td>
																					<td>8600454953</td>
																					<td>12Feb2016</td>
																					<td>
																						<button class="btn btn-white btn-info btn-bold">
																							<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
																							Backup
																						</button>
																					</td>

																				</tr>
																				
																				
																				
																				<tr>
																				
																					<td>2</td>
																					<td><a href="#">Pranav Gaikwad</a></td>
																					<td>gaikwad.pranav@gmail.com</td>
																					<td>9886564439</td>
																					<td>13 Feb 2016</td>
																					<td>
																						<button class="btn btn-white btn-info btn-bold">
																							<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
																							Backup
																						</button>
																					</td>

																				</tr>
																				
																				
																				
																				
																				<tr>
																				
																					<td>3</td>
																					<td><a href="#">Sachin Mahajan</a></td>
																					<td>sachinmahajan123@gmail.com</td>
																					<td>9273204673</td>
																					<td>21 April 2016</td>
																					<td>
																						<button class="btn btn-white btn-info btn-bold">
																							<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
																							Backup
																						</button>
																					</td>

																				</tr>
																				
																				
																				
																				<tr>
																				
																					<td>4</td>
																					<td><a href="#">Vinod Devkule</a></td>
																					<td>vinod.devkule11@gmail.com</td>
																					<td>9011398356</td>
																					<td>30 March 2016</td>
																					<td>
																						<button class="btn btn-white btn-info btn-bold">
																							<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
																							Backup
																						</button>
																					</td>

																				</tr>
																				
																				
																				
																				<tr>
																				
																					<td>6</td>
																					<td><a href="#">Deipali Deshmukh</a></td>
																					<td>deshmukh.dipali@gmail.com</td>
																					<td>8379989912</td>
																					<td>18 May 2016</td>
																					<td>
																						<button class="btn btn-white btn-info btn-bold">
																							<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
																							Backup
																						</button>
																					</td>

																				</tr>

																				
																			</tbody>
																		</table>
																	</div>
														</div>
													</div>

													<div class="hr10"></div>

												</div><!-- /#friends -->
												
												
												
												<div id="PostJobs" class="tab-pane">
												
												
												
													<div id="PerDiv" class="abc">
														<div class="page-header">
															<h1>Post your job</h1>
														</div><!-- /.page-header -->
														
														
														<div class="DivWrap">
															<form class="form-horizontal" action="{{route('create')}}" method="post">
															
																<!-- <div class="form-group">
																	<label class="col-sm-3 control-label">Company Name</label>
																	<div class="col-sm-9">
																	  <input class="form-control" id="focusedInput" type="text">
																	</div>
																</div> -->
															  
																<div class="form-group">
																	<label class="col-sm-3 control-label">Job Title</label>
																	<div class="col-sm-9">
																	  <input class="form-control" id="job_title" type="text" name="job_title">
																	</div>
																</div>
															  
																
																
																<div class="form-group">
																	<label class="col-sm-3 control-label">Description</label>
																	<div class="col-sm-9">
																	  <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
																	</div>
																</div>


																

<!-- city --> 
																
	<div class="form-group">
		<label class="col-sm-3 control-label">City</label>
			<div class="location-scrollbar12 col-md-9">
               <input type="hidden"  class="form-control"  id = "hiddenCity1"  name="cityid" />
               <input type="text" class="form-control" id = "selectCity1" onclick="selectCities('1')">
              {{-- <div class="white_content2"> --}}
                <div id="citiesDrop1" class="scrollbar3 my-Companysearch style-4">                    
                  <ul id = "backResult1">
                  </ul>
                  <div class="force-overflow"></div>                    
                </div>
              {{-- </div> --}}
              <div class="clear"></div>
              <div id = "addCity1" style="display: none;">
                  <div class="col-md-4">
                      <select class="form-control" id = "country1" onchange="statesData('1',this.value);">
                          <option value="-1">--Country--</option>
                          @foreach($getCountry as $country)
                            <option value = "{{ $country->country_id }}"> {{ $country->country_name }} </option>
                          @endforeach                          
                      </select>
                  </div>
                  <div class="col-md-3">
                      <select class="form-control" disabled="disabled" onchange="cityName('1');" id="states1">
                          <option value="-1">--State--</option>
                      </select>
                  </div>
                  <div class="col-md-3">
                      <input class="form-control" type="text" placeholder="City" name="cityname" id="cityname1" disabled="disabled" onkeyup="checkCity('1',this.value);">
                  </div>
                  <div class="col-md-2">
                      <div class="btn btn-submit" id = "addCityBtn1" style="display: none;" onclick="addCities('1');" ><i id = "btnIcon1" class="fa fa-plus-circle" aria-hidden="true"></i> Add</div>
                  </div>
              </div>
          
          </div>
    </div>
<!-- end of city -->

<!-- job types -->

	<div class="form-group">
				<div class="col-md-9 pull-right col-sm-12  col-xs-12">
                      <select class="demo12" style="width:auto; min-width:100%;" id = "" onchange="catData('1',this.value);">
                          <option value="-1">Functional Area</option>
                          @foreach($types as $jt)
                            <option value = "{{ $jt->jt_id }}"> {{ $jt->jt_title }} </option>
                          @endforeach                          
                      </select>
                  </div>	
	</div>
										

	<div class="form-group">
		<div class="col-md-9 pull-right col-sm-12  col-xs-12">
           <select class="demo12" style="width:auto; min-width:100%;" id = "" onchange="catData('1',this.value);">
               <option value="-1">Category</option>
                    @foreach($category as $cat)
               <option value = "{{ $cat->job_cat_id }}"> {{ $cat->cat_title }} </option>
                    @endforeach                          
           </select>
        </div>	
	</div>


   <div class="form-group">
     <label class="col-sm-3 control-label">Skill</label>
    
	<div class=" location-scrollbar12 col-md-9 col-sm-12  col-xs-12 pull-right">
            <!-- <input type="text" name="skill"  class="tm-input form-control tm-input-info"/> -->
      <input type="hidden"  class="form-control"  id = "hiddenSkill1"  name="skillid" />
      <input type="text" class="tm-input form-control tm-input-info"" id = "selectSkill1" onclick="selectSkills('1')" >

       
      <div id="skillDrop1" class="scrollbar3 my-Companysearch style-4">                   
         <ul id = "backResult1">
         </ul>
         <div class="force-overflow"></div>                    
      </div>
    </div>					
   </div>	
											
	<!-- end type -->															
																
																<div class="form-group">
																	<label class="col-sm-3 control-label ">Salary</label>
																	<div class="col-sm-6">
																	  <input class="form-control" id="salary" name="job_salary" type="text">
																	</div>
																	<div class="col-sm-3">
																		<select class="demo12" style="width:auto; min-width:137px;">
																		  <option value="AL">Monthly</option>
																		  <option value="WY">Yearly</option>
																		</select>
																	</div>
																</div>
																
																
																<div class="clearfix form-actions">					
																	<div class="form-group">					
																		
     <input type="submit" value="SUBMIT" class="btn btn-primary center-block"  form-control">
<!--        <input type="hidden" name="_token"  value="{{ Session::token() }}"> -->
 <input type="hidden" name="_token"  value="<?=csrf_token();?>">

																		<!-- <button type="button" id="PerBtn" class="btn btn-primary center-block">Post Job</button> -->					
																	</div>					
																</div>
																
																
														
															</form>
														</div>

													</div>
																			
												</div>	
											</div>
										</div>
									</div>
								</div>
								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		</div>

		<div class="col-md-3 col-md-offset-1" >
		<img src="images/1.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre"  height="236">

					<div class="panel2 panel-default2 coupon2">

					  <div class="panel-body">
						<img src="images/AD.jpg" class="coupon-img img-rounded">
						<div class="col-md-12">
							<ul class="items">
								<li>Add up to 5 quarts of motor oil (per specification)</li>
								<li>Complimentary multi-point inspection</li>
							</ul>
						</div>
					  
						<div class="col-md-12">
							<p class="disclosure">Using Genuine Oil Filter and 
							multigrade oil up to vehicle specification. Lube as 
							time of write-up. No cash value.</p>
						</div>
					  </div>
					  <div class="panel-footer">
						<div class="coupon-code">
							Code: GBWO2						   
						</div>					   
					  </div>
					</div>	
		</div>				
	</div>

@stop

@push('footer')


{{--Add any CSS/JS files to Footer--}}

<script type="text/javascript" src="{{asset('js/custom/type.js')}}">
</script>

<script type="text/javascript" src="{{asset('js/custom/city.js')}}">
</script>



<!-- tag -->
<script type="text/javascript">
    $(".tm-input").tagsManager();
  </script>
  <!-- -->

@endpush
