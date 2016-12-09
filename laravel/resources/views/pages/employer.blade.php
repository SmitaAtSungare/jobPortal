@extends('layouts.master')

@section('title')
  Login here
@stop 

@section('content')
<section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
  <div class="container">
    <div class="row">
      <div class="wrap">

  <form role="form"  action="" method="post">
        <div id="register" class="register_base" style="display:none">
 
          <h2>Register Your Company With Us</h2>
<!--company -->
<div class="form-group">
              <div class="location-scrollbar style-4 ">
            <div class="location">
             
              <!-- <input type="hidden" id = "hiddenCompany1"/> -->
               <input type="text" class="form-control" id = "selectCompany1" onclick="selectCompanies('1')" placeholder="Company">
              {{-- <div class="white_content2"> --}}
                <div id="companiesDrop1" class="scrollbar3 my-Companysearch style-4">                    
                  <ul id = "backResult1">
                  </ul>
                  <div class="force-overflow"></div>                    
                </div>
              {{-- </div> --}}
              <div class="clear"></div>
              <div id = "addCompany1" style="display: none;">
                  <div class="col-md-4">
                      <select class="form-control" id = "company1" onchange="companyName('1');" >
                          <option value="-1">--Company--</option>
                          @foreach($companies as $company)
                            <option value = "{{ $company->cmp_id }}"> {{ $company->cmp_name }} </option>
                          @endforeach                          
                      </select>
                  </div>

                  <div class="col-md-3">
                      <input class="form-control" type="text" placeholder="Company" name="cmpname" id="cmpname1" disabled="disabled" onkeyup="checkCompany('1',this.value);">
                  </div>
                  <div class="col-md-2">
                      <div class="btn btn-submit" id = "addCompanyBtn1" style="display: none;" onclick="addCompanies('1');" ><i id = "btnIcon" class="fa fa-plus-circle" aria-hidden="true"></i> Add</div>
                  </div>
              </div>
            </div>
          </div> 
</div>
  <!-- -->

  <!-- city -->     

  <div class="form-group">
    
      <div class="location-scrollbar style-4">
               <input type="hidden"  class="form-control"  id = "hiddenCity1"  name="cityid" />
               <input type="text" class="form-control" placeholder="City" id = "selectCity1" onclick="selectCities('1')">
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
                        <!--  -->                      
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
          <!-- end city -->
                    
 <!-- -->   
          <textarea class="form-control" rows="3" placeholder="Address" id="address" name="address"></textarea>
         <div class="error">{{ $errors->first('detail_address') }}</div>
          

          <input type="text" class="form-control" placeholder="E-mail" id="email" name="email">
           <div class="error">{{ $errors->first('email') }}</div>
          

             <input type="password" class="form-control" placeholder="Password" id="emp_password" name="emp_password"  data-toggle="password">
              <div class="error">{{ $errors->first('password') }}</div>

             
          <div class="input-group"> <span class="input-group-addon">Mobile</span> <span class="input-group-addon">+91</span>
            <input type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status" id="mobile" name="mobile">
          </div>        
          <div class="error">{{ $errors->first('mobile') }}</div>
          <div class="input-group"> <span class="input-group-addon">Landline</span>
            <input type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status" id="landline" name="landline">
          </div>
          <div class="error">{{ $errors->first('landline') }}</div>

          <input type="text" class="form-control" placeholder="Reasonable Person Name" id="emp_name" name="emp_name">
        
           <div class="error">{{ $errors->first('emp_name') }}</div>

       <div class="checkbox">       
        <label>
         <input type="checkbox"> By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a>
        </label>
       </div>

          <input type="submit" value="SUBMIT" class="submit-btn  form-control">
          <input type="hidden" name="_token"  value="{{ Session::token() }}">

          <!-- <button type="button" value="submit" class="submit-btn">CREATE</button> -->

          <div class="soon">We Will Contact you Soon</div>
           <button type="button" id="log" value="submit" class="submit-btn ">LOGIN</button>
        </div>

     </div>
    </div>
  </div>
        <div class="register_image "> <img src="images/404.png"> </div>
</form>
<!-- Login -->

  <form action="" method="post">
        <div id="login" class="register_base">
          <h2>LOGIN</h2>

          <input type="text" class="form-control" placeholder="Username" id="emp_name" name="emp_name">
          
          <input type="password" class="form-control" placeholder="Password" id="emp_password" name="emp_password">
         
      
        <div class="forgot"><a  role="link" href="#">Forgot your password?</a></div>
         <!-- <button type="button"  class="submit-btn">SUBMIT</button> -->
 <input type="submit" value="SUBMIT" class="submit-btn  form-control">
          <div class="soon">OR click here to register</div>

          <button type="button" id="create" value="submit" class="submit-btn">REGISTER HERE</button>
           <input type="hidden" name="_token"  value="{{ Session::token() }}">
        </div>
 
  </form>
</section>
@stop

@push('footer')


<!-- script hide nd show for login & registration -->
<script type="text/javascript" src="{{asset('js/custom/employer.js')}}">
</script>
 
<script type="text/javascript" src="{{asset('js/custom/city.js')}}">
</script>

<script type="text/javascript">
$(document).ready(function(){

     $("#create").click(function(){
        $("#login").hide();
        $("#register").show();
 });

     $("#log").click(function(){
      $("html, body").animate({"scrollTop": "0px"}, 100);
        $("#register").hide();
        $("#login").show();
    });
});
</script>



@endpush



