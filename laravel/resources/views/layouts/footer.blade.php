<!--/#footer-->
<div class="clearfix"> </div>
<footer id="footer">
  <div class="container">
    <div class="col-md-3 grid_3">
      <h4>About Us</h4>
      <ul class="f_list f_list1">
        <li><a href="" title="ABOUT WISDOM JOBS">ABOUT hire me JOBS</a></li>
        <li><a href="" title="CONTACT US">CONTACT US</a></li>
        <li><a href="" title="PRIVACY POLICY">PRIVACY POLICY</a></li>
        <li><a href="" title="TERMS OF USE">TERMS OF USE</a></li>
        <li><a href="" title="SITE MAP">SITE MAP</a></li>
      </ul>
      <div class="clearfix"> </div>
    </div>
    <div class="col-md-3  grid_3">
      <h4><img src="/images/logo.png"></h4>
      <p>Hire Me is a brand new career website for the job market in India that specifically caters to the needs of employers and aspiring jobseekers. </p>
    </div>
    <div class="col-md-3 hidden-xs grid_3">
      <h4>Sign up for our newsletter</h4>
      <form>
        <input type="text" class="form-control" placeholder="Enter your email">
      </form>
    </div>
    <div class="clearfix"> </div>
  </div>
</footer>

{{-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> --}}
<!--/#footer-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{asset('js/index.js')}}"></script>
<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-tag.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js')}}"></script>

@stack('footer')

	<script type="text/javascript">
            $(function () {       
    $.ajaxSetup({
      headers : {
        'X-CSRF-Token' : $('meta[name="_token"]').attr('content')
      }      
    });  
                $('#datetimepicker1').datepicker();
				$('#datetimepicker2').datepicker();
				$('#datetimepicker3').datepicker();
				//$('#demo12').select2({});
				$(".demo12").select2();
            });
     </script>
<script>
  $(document).ready(function () {
    var windowsize = $(window).width();
    if (windowsize <= 1000) {

      $("#cbp-spmenu-s1").addClass("cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left");

    }
    else{
      $("#cbp-spmenu-s1").removeClass("cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left");
    }
  $(window).resize(function() {
    windowsize = $(window).width();
  console.log(windowsize);
    if (windowsize <= 1000) {

      $("#cbp-spmenu-s1").addClass("cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left");

    }
    else{
      $("#cbp-spmenu-s1").removeClass("cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left");
    }
  });

  });
</script>


<script>
$(document).ready(function(){
  
  $("#PerDiv").show();
  
  $("#PerBtn").click(function(){
    $(".abc").hide();
    $("#ExpDiv").show();
    
  });
  
  $("#ExpBtn").click(function(){
    $(".abc").hide();
    $("#EduDiv").show();
    
  });
  
});

</script>
</body>
</html>
