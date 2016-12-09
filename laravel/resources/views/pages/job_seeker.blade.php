@extends('layouts.master')

@section('content')

	<div class="container" style="padding-left:25px;">
        <form class="form-horizontal" id="frm" name="frm" action="{{ route('jobseeker') }}" method="post" autocomplete="on">
            @if(count($errors)>0)
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                            {{
                                $error
                            }}
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="hidden" value="{{ Session::token() }}" name="_token"/>
            <input type="hidden" id="seek_status"  name="seek_status" value="1"/>
            <input type="hidden" id="expinfo" name="expinfo"/>
            <div class="col-md-8 col-sm-12">
		
			<div id="PerDiv" class="abc" style="display:none;">
				<div class="page-header">
					<h1>Personal Detail</h1>
				</div><!-- /.page-header -->
				<div class="DivWrap">
						<div class="">
							<div class="col-md-1">
							&nbsp;
							</div>
							
							<div class="col-md-8">
								<div class="form-group">
									<label class="col-sm-3 control-label "> Name</label>
									<div class="col-md-4">					  
									  <input class="form-control" id="seekers_name" name="seekers_name" type="text"placeholder="First Name"/>
									</div>
									<label class="col-sm-1 control-label "></label>
									<div class="col-md-4">
									  <input class="form-control" id="seekers_surname" name="seekers_surname" type="text" placeholder="Last Name"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Designation</label>
									<div class="col-sm-9">
									  <input class="form-control" id="seekers_designation" name="seekers_designation" type="text"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label ">Objective</label>
									<div class="col-sm-9">
									  <textarea class="form-control" rows="5" id="seekers_objective" name="seekers_objective"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-3">
									<div class="form-group">
										<div class="FileUpload">
                                              <center>
												<label class="">
												<img id="avatar" name="avatar" class="editable img-responsive" alt="Alex's Avatar" src="images/profile-pic.jpg" style="width: 126px;height: 126px;"/>
												</label>	
												<div class="clearfix"></div>
												<label class="UpBtn btn-file">
													Profile Picture <input type="file" id="seekers_photo" name="seekers_photo" style="display: none;"/>
												</label>
											</center>
										</div>
									</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Skills</label>
							<div class="col-sm-9">
                                <select class="demo12" id="seekers_skills" name="seekers_skills" multiple data-placeholder="Choose one or various skills..."  style="width:auto; min-width:345px;">

                                </select>
                            </div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-9">
							  <textarea class="form-control" rows="5" id="seekers_address" name="seekers_address"></textarea>
							</div>
						</div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Location</label>
                            <div class="col-sm-9">
                                <select class="demo12" id="seekers_city" name="seekers_city" style="width:auto; min-width:345px;">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pin Code</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="seekers_pincode" name="seekers_pincode" type="text"/>
                        </div>
                    </div>
						<div class="form-group phone-number">
							<label class="col-xs-12 col-md-3 control-label">Mobile</label>
							<div class="col-xs-12 col-md-3">
								<input type="tel" id="seekers_mobile" name="seekers_mobile" class="form-control"  size="3" maxlength="10" minlength="10" required="required"/>
							</div>
					   
							<label class="col-xs-12 col-md-2 control-label">Alternate Mobile</label>
							<div class="col-xs-12 col-md-4">
								<input type="tel" id="seekers_alt_mobile" name="seekers_alt_mobile" class="form-control"  size="3" maxlength="10" minlength="10" required="required"/>
							</div>
						</div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Landline</label>
                        <div class="col-sm-9">
                            <input type="tel" id="seekers_landline" name="seekers_landline" class="form-control" size="3" minlength="6" maxlength="12" required="required"/>
                        </div>
                    </div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
							  <input class="form-control" id="seekers_email" name="seekers_email" type="email"/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3  control-label">Gender</label>
							<label class="radio-inline"><input type="radio" id="seekers_gender1" name="seekers_gender" value="0" checked>Male</label>
							<label class="radio-inline"><input type="radio" id="seekers_gender2" name="seekers_gender" value="1">Female</label>
						</div>
						
						
						<div class="form-group">
						 <label class="col-sm-3 control-label ">Marrital Status</label>
							<select class="demo12" id="seekers_mstatus" name="seekers_mstatus" style="width:auto; min-width:345px;">
                                <option value="" >Select Marital status...</option>
                                <option value="0">Married</option>
                                <option value="1">UnMarried</option>
							</select>
						</div>
						
					
						<div class="form-group" style="margin-right:0px;margin-left:0px;">
						<label class="col-sm-3  control-label" style="margin-right:8px;">Date of Birth</label>
							<div class="input-group date" id='datetimepicker1' style="width:auto;">
								<input type='text' id="seekers_dob" name="seekers_dob" class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
								
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Language Known</label>

							<div class="col-sm-9">
								<div class="inline">
								    <select class="demo12" id="seekers_languages" name="seekers_languages" multiple data-placeholder="Choose one or various languages..." style="width:auto; min-width:345px;">

                                    </select>
                                </div>
							</div>
						</div>
									
						<div class="clearfix form-actions">					
							<div class="form-group">					
								<button type="button" id="PerBtn" class="btn btn-primary center-block">Continue</button>					
							</div>					
						</div>

				</div>
			</div>

			<div id="ExpDiv" class="abc" style="display:none;">
                <div class="row" style="margin-left: 6px;">
                    <div class="col-lg-3">
                        <button class="btn btn-primary" type="button" onclick="showperDiv()">&nbsp;Personal Details</button>
                    </div>
                    <div class="col-lg-4" style="margin-left: 65px;">
                        &nbsp;&nbsp;
                    </div>
                </div>
                <br/>
			
				<div class="page-header">
					<h1>
						Experience Detail
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							Write your experience detail
						</small>
					</h1>
				</div><!-- /.page-header -->
                <br/>
                <div class="row">
                    <div class="col-lg-4">
                        &nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="seekers_type" id="seekers_type1" value="Fresher" onchange="loadexperienceDiv()" checked>Fresher
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="radio" name="seekers_type" id="seekers_type2" value="Experienced" onchange="loadexperienceDiv()">Experienced
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
				<div id="experienceTbl" >
                         <div id="experienceDivList">
                             <div id="experienceDiv1" class="DivWrap">
                                     <label style="margin-left: 300px;"><h4>Experience-1</h4></label>
                                    <div class="form-group">
                                    <label class="col-sm-3 control-label ">Company Name</label>
                                        <div class="col-sm-9">
                                            <select class="demo12" style="width:100%; " id="experience_company1" name="experience_company1">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-sm-3 control-label ">Job Title</label>
                                        <div class="col-sm-9">
                                            <select class="demo12" style="width:100%; " id="experience_designation1" name="experience_designation1">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label ">Salary</label>
                                        <div class="col-sm-6">
                                          <input class="form-control" id="experience_salary1" name="experience_salary1" type="text"/>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="demo12" style="width:auto; min-width:160px;" id="salary_type1" name="salary_type1">
                                              <option value="Monthly">Monthly</option>
                                              <option value="Yearly">Yearly</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3  control-label" style="">Time Period</label>

                                        <div class="col-md-3">

                                            <div class="input-group date" id='exp_from1' style="width:156px;">
                                                <input type='text' id="experience_from1" name="experience_from1" class="form-control" placeholder="From" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>

                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="input-group date" id='exp_to1' style="width:156px;">
                                                <input type='text' id="experience_to1" name="experience_to1" class="form-control"  placeholder="To"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>

                                              </div>
                                         </div>

                                        <div class="col-md-4">
                                            <div class="checkbox"><label style="margin-left: 34px;">OR&nbsp;&nbsp;</label>
                                                <label><input id="currently_working1" name="currently_working1" type="checkbox"> Currently Working</label>
                                            </div>
                                        </div>
                                    </div>
                             </div>
                         </div>
                         <br/>
                        <div class="col-md-1">
                            &nbsp;
                        </div>
                        <br/>
                        <div class="col-md-8" style="margin-left: 5px;">
                            <button class="btn btn-primary col-md-offset-1" type="button" onclick="addExperience()">Add More</button>
                            &nbsp;&nbsp;<button class="btn btn-primary col-md-offset-1" type="button" onclick="removeExperience()">Remove</button>
                        </div>

                    <br/>
                </div>

                <div class="clearfix form-actions">
                    <div class="form-group">
                        <center>
                            <button type="button"  id="ExpBtn" onclick="calltaxes()" class="btn btn-primary col-md-offset-1">Continue</button>
                        </center>
                    </div>
                </div>
			
			</div>

			<div id="EduDiv" class="abc" style="display:none;">
                <div class="row" style="margin-left: 6px;">
                    <div class="col-lg-8">
                        <button class="btn btn-primary" type="button" onclick="showperDiv()">Personal Details</button>
                        &nbsp;<button class="btn btn-primary" type="button" onclick="showexpDiv()">Experience Details</button>
                    </div>
                    <div class="col-lg-4" style="margin-left: 65px;">
                        &nbsp;&nbsp;
                    </div>
                </div>
                <br/>
			
				<div class="page-header">
					<h1>Educational Detail</h1>
				</div><!-- /.page-header -->
				
				<div  class="DivWrap">
					<h4 class="header green">SSC</h4>
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">University</label>
                            <div class="col-sm-9">
                                <select class="demo12" id="ssc_university" name="ssc_university" style="width:auto; min-width:345px;" onchange="loadcolleges('ssc');">

                                </select>
                            </div>
                        </div>
						<div class="form-group" id="schoolnamediv1" style="display:none;">
						<label class="col-sm-3 control-label ">School Name</label>
							<div class="col-sm-9">
                                <select class="demo12" id="ssc_schoolname" name="ssc_schoolname" style="width:auto; min-width:345px;">

                                </select>
                            </div>
						</div>
						<div class="form-group">
						<label class="col-sm-3 control-label ">Location</label>
							<div class="col-sm-9">
                                <select class="demo12" id="ssc_schoollocation" name="ssc_schoollocation" style="width:auto; min-width:345px;">

                                </select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label ">Passing Year</label>
							
							<div class="col-sm-3">
								<select class="demo12" id="ssc_passingyear" name="ssc_passingyear" style="width:auto; min-width:160px;">
                                    <?php $this_year = date("Y"); // Run this only once ?>
                                    @for ($year = $this_year; $year >= 1980; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor

                                </select>
							</div>
							
							<label class="col-sm-3 control-label ">Percentage</label>
							<div class="col-sm-3">
							  <input class="form-control" id="ssc_passingpercent" name="ssc_passingpercent" type="text"/>
							</div>
						</div>
				</div>


				<div class="DivWrap">
					<h4 class="header green">HSC</h4>
					<form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">University</label>
                            <div class="col-sm-9">
                                <select class="demo12" id="hsc_university" name="hsc_university" style="width:auto; min-width:345px;" onchange="loadcolleges('hsc');">

                                </select>
                            </div>
                        </div>
						<div class="form-group" id="schoolnamediv2" style="display: none;">
						<label class="col-sm-3 control-label ">School Name</label>
							<div class="col-sm-9">
                                <select class="demo12" id="hsc_schoolname" name="hsc_schoolname" style="width:auto; min-width:345px;">

                                </select>
                            </div>
						</div>
						<div class="form-group">
						<label class="col-sm-3 control-label ">Location</label>
							<div class="col-sm-9">
                                <select class="demo12" id="hsc_schoollocation" name="hsc_schoollocation" style="width:auto; min-width:345px;">

                                </select>
                            </div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label ">Passing Year</label>
							<div class="col-sm-3">
                                <select class="demo12" id="hsc_passingyear" name="hsc_passingyear" style="width:auto; min-width:160px;">
                                    <?php $this_year = date("Y"); // Run this only once ?>
                                    @for ($year = $this_year; $year >= 1980; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
							</div>
							
							<label class="col-sm-3 control-label ">Percentage</label>
							<div class="col-sm-3">
							  <input class="form-control" id="hsc_passingpercent" name="hsc_passingpercent" type="text"/>
							</div>
						</div>
					</form>	
				
				</div>

                <br/>
                <div class="row" style="margin-left: 2px;">
                    <div class="col-lg-4">
                        &nbsp; <button class="btn btn-primary" id="batchlorbtn" type="button" onclick="showbachelorDiv()">Add Bachelors</button>
                    </div>
                    <div class="col-lg-4">
                        &nbsp;&nbsp;
                    </div>
                </div>
				
				<div id="bachelorDiv" class="DivWrap" style="display: none;">
					<h4 class="header green">BACHELORS</h4>
					<form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">University</label>
                            <div class="col-sm-9">
                                <select class="demo12" id="bachelors_university" name="bachelors_university" style="width:auto; min-width:345px;" onchange="loadcolleges('bachelors');">

                                </select>
                            </div>
                        </div>
						<div class="form-group" id="schoolnamediv3" style="display:none;">
						<label class="col-sm-3 control-label ">College Name</label>
							<div class="col-sm-9">
                                <select class="demo12" id="bachelors_collegename" name="bachelors_collegename" style="width:auto; min-width:345px;">

                                </select>
							</div>
						</div>
						<div class="form-group">
						<label class="col-sm-3 control-label ">Location</label>
							<div class="col-sm-9">
                                <select class="demo12" id="bachelors_collegelocation" name="bachelors_collegelocation" style="width:auto; min-width:345px;">

                                </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label ">Course</label>
							<div class="col-sm-9">
                                <select class="demo12" id="bachelors_coursename" name="bachelors_coursename" style="width:auto; min-width:345px;">

                                </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label ">Passing Year</label>
							<div class="col-sm-3">
                                <select class="demo12" id="bachelors_passingyear" name="bachelors_passingyear" style="width:auto; min-width:160px;">
                                    <?php $this_year = date("Y"); // Run this only once ?>
                                    @for ($year = $this_year; $year >= 1980; $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
							</div>
							
							<label class="col-sm-3 control-label ">Percentage</label>
							<div class="col-sm-3">
							  <input class="form-control" id="bachelors_passingpercent" name="bachelors_passingpercent" type="text"/>
							</div>
						</div>
					</form>	
				</div>
                <br/>
                <div id="masterbtnDiv" class="row" style="display: none; margin-left: 2px;">
                    <div class="col-lg-4">
                        &nbsp; <button class="btn btn-primary" id="masterbtn" type="button" onclick="showmasterDiv()">Add Masters</button>
                    </div>
                    <div class="col-lg-4">&nbsp;&nbsp;
                    </div>
                </div>
                <div id="masterDiv" class="DivWrap" style="display: none;">
                    <h4 class="header green">MASTERS</h4>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">University</label>
                            <div class="col-sm-9">
                                <select class="demo12" id="masters_university" name="masters_university" style="width:auto; min-width:345px;" onchange="loadcolleges('masters');">

                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="schoolnamediv4" style="display: none;">
                            <label class="col-sm-3 control-label ">College Name</label>
                            <div class="col-sm-9">
                                <select class="demo12" id="masters_collegename" name="masters_collegename" style="width:auto; min-width:345px;">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">Location</label>
                            <div class="col-sm-9">
                                <select class="demo12" id="masters_collegelocation" name="masters_collegelocation" style="width:auto; min-width:345px;">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">Course</label>

                            <div class="col-sm-9">
                                <select class="demo12" id="masters_coursename" name="masters_coursename" style="width:auto; min-width:345px;">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">Passing Year</label>
                            <div class="col-sm-3">
                                <select class="demo12" id="masters_passingyear" name="masters_passingyear" style="width:auto; min-width:160px;">
                                    <?php $this_year = date("Y"); // Run this only once ?>
                                    @for ($year = $this_year; $year >= 1980; $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                            <label class="col-sm-3 control-label ">Percentage</label>
                            <div class="col-sm-3">
                                <input class="form-control" id="masters_passingpercent" name="masters_passingpercent" type="text"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix form-actions">
						<div class="form-group">	
							<center>
                                <button class="btn btn-primary" type="button" onclick="saveseekersInfo()">Save All Information</button>
                                <button class="btn btn-primary" type="button" onclick="cancel()"><i class="fa fa-cancel"></i>&nbsp; Cancel</button>
                            </center>
						</div>	
					</div>
			</div>

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
        </form>
	</div>
    @stop
    @push('footer')
    <script>
        function showexpDiv()
        {
            $("#PerDiv").attr("style", "display:none");
            $("#EduDiv").attr("style", "display:none");
            $("#ExpDiv").attr("style", "display:inline");
        }

        function showperDiv()
        {
            $("#PerDiv").attr("style", "display:inline");
            $("#EduDiv").attr("style", "display:none");
            $("#ExpDiv").attr("style", "display:none");
        }

        function showbachelorDiv()
        {
            $("#bachelorDiv").attr("style", "display:block;margin-top:-34px;");
            $("#batchlorbtn").attr("style", "display:none");
            $("#masterbtnDiv").attr("style", "display:block;margin-left:2px;");
            loadcourses('bachelors');
        }

        function showmasterDiv()
        {
            $("#masterDiv").attr("style", "display:block;margin-top:-20px;");
            $("#masterbtnDiv").attr("style", "display:none");
            loadcourses('masters');
        }

        function loadexperienceDiv()
        {
            if (document.getElementById('seekers_type1').checked) {
                $("#experienceTbl").attr("style", "display:none");

            }
            else
            {
                $("#experienceTbl").attr("style", "display:block");

                $("#experienceTbl").attr("style", "width:100%");
            }
        }
        function calltaxes()
        {
            if (document.getElementById('seekers_type2').checked) {
               Refreshexp();
            }
        }

        $("#seekers_photo").change(function()
        {
            var val = $(this).val().toLowerCase();
            var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");

            if (!(regex.test(val))) {
                $(this).val('');
                alert('Unsupported file, only .jpg formats are allowed');
            }
            else {
                var f = this.files[0];
                var AccSize = 5120000;
                if (f.size > AccSize) {
                    $(this).val('');
                    alert("Image must be less than 5 MB");
                }
                else
                    readURL(this);
            }
        });

        function readURL(input)
        {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        var counter = 2;
        var exptablejson=[{"expid":"0","expcmpid":"0","expfromyear":"na","exptoyear":"na","expsalary":"na","jobtitle":"0"}];

        function addExperience()
        {
            if (counter > 10) {
                alert("Only 10 Experiences allowed");
                return false;
            }
            var htmlContent = "<br/><div id='experienceDiv"+counter+"' class='DivWrap'><label style='margin-left: 300px;'><h4>Experience-"+counter+"</h4></label><div class='form-group'><label class='col-sm-3 control-label'>Company Name</label><div class='col-sm-9'><select class='demo12' style='width:100%;' id='experience_company"+counter+"' name='experience_company"+counter+"'></select></div></div><div class='form-group'><label class='col-sm-3 control-label'>Job Title</label><div class='col-sm-9'><select class='demo12' style='width:100%;' id='experience_designation"+counter+"' name='experience_designation"+counter+"'></select></div></div><div class='form-group'><label class='col-sm-3 control-label'>Salary</label><div class='col-sm-6'><input class='form-control' id='experience_salary"+counter+"' name='experience_salary"+counter+"' type='text'></div><div class='col-sm-3'><select class='demo12' style='width:auto; min-width:160px;' id='salary_type"+counter+"' name='salary_type"+counter+"'><option value='Monthly'>Monthly</option><option value='Yearly'>Yearly</option></select></div></div><div class='form-group'><label class='col-sm-3  control-label' style=''>Time Period</label><div class='col-md-3'><div class='input-group date' id='exp_from"+counter+"' style='width:156px;'><input type='text' id='experience_from"+counter+"' name='experience_from"+counter+"' class='form-control' placeholder='From' /><span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span></div></div><div class='col-md-2'><div class='input-group date' id='exp_to"+counter+"' style='width:156px;'><input type='text' id='experience_to"+counter+"' name='experience_to"+counter+"' class='form-control'  placeholder='To'/><span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span></div></div><div class='col-md-4'><div class='checkbox'><label style='margin-left: 34px;'>OR&nbsp;&nbsp;</label><label><input id='currently_working"+counter+"' name='currently_working"+counter+"' type='checkbox'> Currently Working</label></div></div></div></div>";

            var i=counter-1;
            if($("#experience_company"+i).val()!="" && $("#experience_designation"+i).val()!="" && $("#experience_from"+i).val()!="" && $("#experience_salary"+i).val()!="")
            {
                $('#experienceDivList').append(htmlContent);
                loadcompanys(counter);
                loaddesignation(counter);
                $("#salary_type"+counter).select2();
                $('#exp_from'+counter).datepicker();
                $('#exp_to'+counter).datepicker();
                Refreshexp();
                counter++;
            }
            else
            {
                alert("Please Fill Up All Information Of Experience - "+i);
            }
        }

        function removeExperience()
        {
            if (counter == 1) {
                alert("No more Experience to remove");
                return false;
            }
            counter--;
            $("#experienceDiv" + counter).remove();
            exptablejson.splice((counter-1),1);
            Refreshexp();
        }

        function Refreshexp()
        {
            exptablejson.length = 0;
            for(var i=1;i<counter;i++)
            {
                var experience_to='';
                if($("#experience_to"+i).val() != "")
                {   experience_to=$("#experience_to"+i).val(); }
                else if(document.getElementById("currently_working"+i).checked)
                {   experience_to='Currently Working'; }
                else
                {   experience_to='';  }
                var salary=$("#experience_salary"+i).val();
                if($("#experience_company"+i).val()!=null || $("#experience_company"+i).val() !='')
                {
                    var abc={"expid":i ,"expcmpid":$("#experience_company"+i).val(),"expfromyear":$("#experience_from"+i).val(),"exptoyear":experience_to,"expsalary":salary,"jobtitle":$("#experience_designation"+i).val()};
                    exptablejson.push(abc);
                }
            }
            var str=escape(JSON.stringify(exptablejson));
            $("#expinfo").val(str);
        }

        function loadcompanys(count)
        {
            $.ajax({
                type:"POST",
                url:" {{ route('company_action')  }} ",
                data:{_token:"{{ Session::token() }}" },
                success: function (response) {
                    var arr=response;
                    var str='<option value="">Select Your Company...</option>';
                    for(var i=0;i<arr.length;i++)
                    {
                        str=str+"<option value='"+arr[i].cmp_id+"'>"+arr[i].cmp_name+"</option>";
                    }
                        str=str+'<option value="0">Other</option>';
                        $("#experience_company"+count).html("");
                        $("#experience_company"+count).append(str);
                        $("#experience_company"+count).select2();
                },
                error: function (xhr) {
                    alert("Ajax Call Error");
                }
            });
        }

        function loadcitys()
        {
            $.ajax({
                type:"POST",
                url:" {{ route('city_action')  }} ",
                data:{_token:"{{ Session::token() }}" },
                success: function (response) {
                    var arr=response.data;
                    var str='<option value="">Select Your City...</option>';
                    for(var i=0;i<arr.length;i++)
                    {
                        str=str+"<option value='"+arr[i].city_id+"'>"+arr[i].city_name+"</option>";
                    }
                        str=str+'<option value="0">Other</option>';
                        $("#seekers_city").html("");
                        $("#seekers_city").append(str);
                        $("#seekers_city").select2();
                        $("#experience_location1").html("");
                        $("#experience_location1").append(str);
                        $("#experience_location1").select2();
                        $("#ssc_schoollocation").html("");
                        $("#ssc_schoollocation").append(str);
                        $("#ssc_schoollocation").select2();
                        $("#hsc_schoollocation").html("");
                        $("#hsc_schoollocation").append(str);
                        $("#hsc_schoollocation").select2();
                        $("#bachelors_collegelocation").html("");
                        $("#bachelors_collegelocation").append(str);
                        $("#bachelors_collegelocation").select2();
                        $("#masters_collegelocation").html("");
                        $("#masters_collegelocation").append(str);
                        $("#masters_collegelocation").select2();

                },
                error: function (xhr) {
                    alert("Ajax Call Error");
                }
            });
        }

        function loaddesignation(count)
        {
            $.ajax({
                type:"POST",
                url:" {{ route('designation_action')  }} ",
                data:{_token:"{{ Session::token() }}" },
                success: function (response) {
                    var arr=response;
                    var str='<option value="">Select Your Designation...</option>';
                    for(var i=0;i<arr.length;i++)
                    {
                        str=str+"<option value='"+arr[i].job_cat_id+"'>"+arr[i].cat_title+"</option>";
                    }
                        str=str+'<option value="0">Other</option>';
                        $("#experience_designation"+count).html("");
                        $("#experience_designation"+count).append(str);
                        $("#experience_designation"+count).select2();
                },
                error: function (xhr) {
                    alert("Ajax Call Error");
                }
            });
        }

        function loaduniversitys()
        {
            $.ajax({
                type:"POST",
                url:" {{ route('university_action')  }} ",
                data:{_token:"{{ Session::token() }}" },
                success: function (response) {
                    var arr=response;
                    var str='<option value="">Select Your University/Board...</option>';
                    for(var i=0;i<arr.length;i++)
                    {
                        str=str+"<option value='"+arr[i].uni_id+"'>"+arr[i].uni_name+"</option>";
                    }
                    str=str+'<option value="0">Other</option>';
                    $("#ssc_university").html("");
                    $("#ssc_university").append(str);
                    $("#ssc_university").select2();
                    $("#hsc_university").html("");
                    $("#hsc_university").append(str);
                    $("#hsc_university").select2();
                    $("#bachelors_university").html("");
                    $("#bachelors_university").append(str);
                    $("#bachelors_university").select2();
                    $("#masters_university").html("");
                    $("#masters_university").append(str);
                    $("#masters_university").select2();
                },
                error: function (xhr) {
                    alert("Ajax Call Error");
                }
            });
        }

        function loadskills()
        {
            $.ajax({
                type:"POST",
                url:" {{ route('skills_action')  }} ",
                data:{_token:"{{ Session::token() }}" },
                success: function (response) {

                    var arr=response;
                    var str='';
                    for(var i=0;i<arr.length;i++)
                    {
                        str=str+"<option value='"+arr[i].skill_id+"'>"+arr[i].skill_title+"</option>";
                    }
                    str=str+'<option value="0">Other</option>';
                    $("#seekers_skills").html("");
                    $("#seekers_skills").append(str);
                    $("#seekers_skills").select2();
                },
                error: function (xhr) {
                    alert("Ajax Call Error");
                }
            });
        }

        function loadlanguages()
        {
            $.ajax({
                type:"POST",
                url:" {{ route('languages_action')  }} ",
                data:{_token:"{{ Session::token() }}" },
                success: function (response) {
                    var arr=response;
                    var str='';
                    for(var i=0;i<arr.length;i++)
                    {
                        str=str+"<option value='"+arr[i].lang_id+"'>"+arr[i].lang_name+"</option>";
                    }
                    str=str+'<option value="0">Other</option>';
                    $("#seekers_languages").html("");
                    $("#seekers_languages").append(str);
                    $("#seekers_languages").select2();
                },
                error: function (xhr) {
                    alert("Ajax Call Error");
                }
            });
        }

        function loadcourses(type)
        {
            $.ajax({
                type:"POST",
                url:" {{ route('courses_action')  }} ",
                data:{_token:"{{ Session::token() }}" },
                success: function (response) {
                    var arr=response;
                    var str='<option value="">Select Your Course...</option>';
                    for(var i=0;i<arr.length;i++)
                    {
                        str=str+"<option value='"+arr[i].course_id+"'>"+arr[i].course_title+"</option>";
                    }
                    str=str+'<option value="0">Other</option>';
                    if(type=='bachelors')
                    {
                        $("#bachelors_coursename").html("");
                        $("#bachelors_coursename").append(str);
                        $("#bachelors_coursename").select2();
                    }
                    else
                    {
                        $("#masters_coursename").html("");
                        $("#masters_coursename").append(str);
                        $("#masters_coursename").select2();
                    }
                },
                error: function (xhr) {
                    alert("Ajax Call Error");
                }
            });
        }

        function loadcolleges(type)
        {
            var university='';
            if(type=="bachelors")
            {
                university=$("#bachelors_university").val();
            }
            else if(type=="ssc")
            {
                university=$("#ssc_university").val();
            }
            else if(type=="hsc")
            {
                university=$("#hsc_university").val();
            }
            else
            {
                university=$("#masters_university").val();
            }
            $.ajax({
                type:"POST",
                url:" {{ route('institutes_action')  }} ",
                data:{university:university,_token:"{{ Session::token() }}" },
                success: function (response) {
                    var arr=response;
                    var str='<option value="">Select Your School/College...</option>';
                    for(var i=0;i<arr.length;i++)
                    {
                        str=str+"<option value='"+arr[i].ins_id+"'>"+arr[i].ins_name+"</option>";
                    }
                    str=str+'<option value="0">Other</option>';
                    if(type=='bachelors')
                    {
                        $("#bachelors_collegename").html("");
                        $("#bachelors_collegename").append(str);
                        $("#bachelors_collegename").select2();
                        $("#schoolnamediv3").css("display", "block");
                    }
                    else if(type=='ssc')
                    {
                        $("#ssc_schoolname").html("");
                        $("#ssc_schoolname").append(str);
                        $("#ssc_schoolname").select2();
                        $("#schoolnamediv1").css("display", "block");
                    }
                    else if(type=='hsc')
                    {
                        $("#hsc_schoolname").html("");
                        $("#hsc_schoolname").append(str);
                        $("#hsc_schoolname").select2();
                        $("#schoolnamediv2").css("display", "block");
                    }
                    else
                    {
                        $("#masters_collegename").html("");
                        $("#masters_collegename").append(str);
                        $("#masters_collegename").select2();
                        $("#schoolnamediv4").css("display", "block");
                    }
                },
                error: function (xhr) {
                    alert("Ajax Call Error");
                }
            });
        }

        function cancel()
        {
            window.location.reload();
        }

        var edutablejson=[];
        function saveseekersInfo()
        {
            var seekers_skill="skills:"+$("#seekers_skills").val()+"";
            var seekers_gender='';
            if (document.getElementById('seekers_gender1').checked) {
                seekers_gender = document.getElementById('seekers_gender1').value;
            }
            else if (document.getElementById('seekers_gender2').checked) {
                seekers_gender = document.getElementById('seekers_gender2').value;
            }
            var seekers_languages="Languages:"+$("#seekers_languages").val()+"";
            var exp='';
            if($("#expinfo").val()=='')
            {
                exp='Fresher';
            }
            else
            {
                exp=$("#expinfo").val();
            }
            var experience_details=exp;

            if($("#ssc_schoolname").val()!=null)
            {
                var abc1={"eduinsid":$("#ssc_schoolname").val(),"educityid":$("#ssc_schoollocation").val(),"educourseid":"2","passyear":$("#ssc_passingyear").val(),"passpercent":$("#ssc_passingpercent").val()};
                edutablejson.push(abc1);
            }
            if($("#hsc_schoolname").val()!=null)
            {
                var abc2={"eduinsid":$("#hsc_schoolname").val(),"educityid":$("#hsc_schoollocation").val(),"educourseid":"1","passyear":$("#hsc_passingyear").val(),"passpercent":$("#hsc_passingpercent").val()};
                edutablejson.push(abc2);
            }
            if($("#bachelors_collegename").val()!=null)
            {
                var abc3={"eduinsid":$("#bachelors_collegename").val(),"educityid":$("#bachelors_collegelocation").val(),"educourseid":$("#bachelors_coursename").val(),"passyear":$("#bachelors_passingyear").val(),"passpercent":$("#bachelors_passingpercent").val()};
                edutablejson.push(abc3);
            }
            if($("#masters_collegename").val()!=null)
            {
                var abc4={"eduinsid":$("#masters_collegename").val(),"educityid":$("#masters_collegelocation").val(),"educourseid":$("#masters_coursename").val(),"passyear":$("#masters_passingyear").val(),"passpercent":$("#masters_passingpercent").val()};
                edutablejson.push(abc4);
            }
            var educational_details=escape(JSON.stringify(edutablejson));
            if($("#ssc_schoolname").val()==null && $("#hsc_schoolname").val()==null && $("#bachelors_collegename").val()==null && $("#masters_collegename").val()==null)
            {
                educational_details='';
            }
            var frmdata = new FormData();
            frmdata.append('seekers_name',$("#seekers_name").val());
            frmdata.append('seekers_surname',$("#seekers_surname").val());
            frmdata.append('seekers_designation',$("#seekers_designation").val());
            frmdata.append('seekers_objective',$("#seekers_objective").val());
            frmdata.append('seekers_address',$("#seekers_address").val());
            frmdata.append('seekers_city',$("#seekers_city").val());
            frmdata.append('seekers_pincode',$("#seekers_pincode").val());
            frmdata.append('seekers_mobile',$("#seekers_mobile").val());
            frmdata.append('seekers_landline',$("#seekers_landline").val());
            frmdata.append('seekers_email',$("#seekers_email").val());
            frmdata.append('seekers_gender',seekers_gender);
            frmdata.append('seekers_mstatus',$("#seekers_mstatus").val());
            frmdata.append('seekers_dob',$("#seekers_dob").val());
            frmdata.append('seekers_languages',seekers_languages);
            frmdata.append('seekers_skill',seekers_skill);
            frmdata.append('seekers_alt_mobile',$("#seekers_alt_mobile").val());
            frmdata.append('seek_status',$("#seek_status").val());
            frmdata.append('file',$("#seekers_photo")[0].files[0]);
            frmdata.append('experience_details',experience_details);
            frmdata.append('educational_details',educational_details);
            frmdata.append('_token',"{{ Session::token() }}");

            $.ajax({
                type:"POST",
                url:" {{ route('addseeker_action')  }} ",
                //data:{seekers_name:$("#seekers_name").val(),seekers_surname:$("#seekers_surname").val(),seekers_designation:$("#seekers_designation").val(),seekers_objective:$("#seekers_objective").val(),seekers_address:$("#seekers_address").val(),seekers_city:$("#seekers_city").val(),seekers_pincode:$("#seekers_pincode").val(),seekers_mobile:$("#seekers_mobile").val(),seekers_landline:$("#seekers_landline").val(),seekers_email:$("#seekers_email").val(),seekers_gender:seekers_gender,seekers_mstatus:$("#seekers_mstatus").val(),seekers_dob:$("#seekers_dob").val(),seekers_languages:seekers_languages,seekers_skill:seekers_skill,seekers_alt_mobile:$("#seekers_alt_mobile").val(),seek_status:$("#seek_status").val(),file:$("#seekers_photo")[0].files[0],experience_details:experience_details,educational_details:educational_details,_token:"{{ Session::token() }}" },
                data:frmdata,
                contentType: false,
                processData: false,
                success: function (response) {
                    alert("Saved Successfully");
                },
                error: function (xhr) {
                   // alert("Ajax Call Error");
                }
            });
        }

        $(document).ready(function(){
            loadcitys();
            loadskills();
            loadlanguages();
            loadcompanys(1);
            loaddesignation(1);
            loaduniversitys();
            loadexperienceDiv();
            $('#exp_from1').datepicker({autoclose:true});
            $('#exp_to1').datepicker();
        });

    </script>

    @endpush