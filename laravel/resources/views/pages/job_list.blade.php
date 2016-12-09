@extends('layouts.master')

@section('title')
  All Job
@stop

@section('seo')
  <meta charset="utf-8">
@stop

@push('header')
  {{-- expr --}}
@endpush

@section('content')
  <div class="container">
    <div class="wrap2">
      <div class="col-md-9 col-sm-7">
        @include('pages.search')
          {{-- SideBar --}}
          <div class="job-side-bar">
            <div class="col-md-3 col-sm-5">
              <div id="cbp-spmenu-s1" class="sidebar blog-sidebar style-4">
                <div class="panel-group" id="accordion">
                  {{-- For Duration --}}
                  <div class="panel panel-default"> 
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      <div class="panel-heading">
                        <h4 class="panel-title"> <i class="fa fa-clock-o" aria-hidden="true"></i> Duration <span class="caret" id = "caretDu"></span> </h4>
                      </div>
                    </a>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <!-- .squaredFour -->
                        <ul class="filters" id = "durations">
                          @php
                            $a = 0;
                          @endphp
                          @for($i = 1; $i<=5; $i++)
                            @php $c = $a+$a+1; @endphp
                            <li>
                              <label>
                                <input type="checkbox" id = "day-{{ $c }}" checked="false" value = "day-{{ $c }}">
                                <span class="icon"><i class="fa fa-check"></i></span> {{ $c }} days 
                              </label>
                            </li>                            
                            @php $a = $c; @endphp
                          @endfor                        
                        </ul>  
                        <a href="javascript:void(0);" class = "more">More..</a>
                      </div>
                    </div>
                  </div>                  
                  {{-- For Job Type --}}
                  <div class="panel panel-default"> 
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      <div class="panel-heading">
                        <h4 class="panel-title"> <i class="fa fa-server" aria-hidden="true"></i> Job Type<span class="caret"></span> </h4>
                      </div>
                    </a>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="filters">
                          @foreach($types as $type)
                          <li>
                            <label>
                              <input type="checkbox" checked="false" id = "type-{{ $type->job_cat_id }}" value = "type-{{ $type->job_cat_id }}">
                              <span class="icon"><i class="fa fa-check"></i></span> {{ $type->cat_title }} Jobs </label>
                          </li>
                          @endforeach                          
                        </ul>
                        <a href="javascript:void(0);" class = "more">More..</a>                        
                      </div>
                    </div>
                  </div>                  
                  {{-- For Salary --}}
                  <div class="panel panel-default"> 
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      <div class="panel-heading">
                        <h4 class="panel-title"> <i class="fa fa-money" aria-hidden="true"></i> Salary<span class="caret"></span> </h4>
                      </div>
                    </a>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="filters" id = "salary">
                          @php
                            $a = 1;
                          @endphp
                          @for($i = 1; $i<=5; $i++)
                            @php $c = $a*12/10;$d = ($a+1)*12/10; @endphp
                            <li>
                              <label>
                                <input type="checkbox" id = "salary-{{ $a }}" checked="false" value = "salary-{{ $c.','.$d }}">
                                <span class="icon"><i class="fa fa-check"></i></span> {{ $c. ' - ' .$d }} lakhs </label>
                            </li>
                            
                            @php $a++; @endphp
                          @endfor                           
                        </ul>
                        <a href="javascript:void(0);" class = "more">More..</a>                        
                      </div>
                    </div>
                  </div>                  
                  {{-- For Location --}}
                  <div class="panel panel-default"> 
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                      <div class="panel-heading">
                        <h4 class="panel-title"> <i class="fa fa-map-marker" aria-hidden="true"></i> Location<span class="caret"></span> </h4>
                      </div>
                    </a>
                    <div id="collapseFour" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="filters" id = "locations">   
                          @foreach($sideCities as $city)
                            <li>
                              <label>
                                <input type="checkbox" checked="false" id = "location-{{ $city->city_id }}" value = "location-{{ $city->city_id }}">
                                <span class="icon"><i class="fa fa-check"></i></span> {{ $city->city_name }} </label>
                            </li>
                          @endforeach                          
                        </ul>
                        <a href="javascript:void(0);" class = "more">More..</a>
                      </div>
                    </div>
                  </div>
                  {{-- For Education --}}
                  <div class="panel panel-default"> 
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                      <div class="panel-heading">
                        <h4 class="panel-title"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Education<span class="caret"></span> </h4>
                      </div>
                    </a>
                    <div id="collapseFive" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="filters" id = "educations">
                          @foreach($courses as $course)
                            <li>
                              <label>
                                <input type="checkbox" checked="false" id = "education-{{ $course->course_id }}" value = "education-{{ $course->course_id }}">
                                <span class="icon"><i class="fa fa-check"></i></span> {{ $course->course_title }} </label>
                            </li>
                          @endforeach                          
                        </ul>
                      </div>
                    </div>
                  </div>
                  {{-- For Industry--}}
                  <div class="panel panel-default"> 
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
                      <div class="panel-heading">
                        <h4 class="panel-title"> <i class="fa fa-bar-chart" aria-hidden="true"></i> Industry<span class="caret"></span> </h4>
                      </div>
                    </a>
                    <div id="collapsesix" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="filters" id = "industries">
                          @foreach($industries as $industry)
                            <li>
                              <label>
                                <input type="checkbox" checked="false" id = "industry-{{ $industry->jt_id }}" value= "industry-{{ $industry->jt_id }}">
                                <span class="icon"><i class="fa fa-check"></i></span> {{ $industry->jt_title }} Jobs </label>
                            </li>
                          @endforeach                          
                        </ul>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div id="fade3" class="black_overlay3"></div>
            <!--</nav>-->
          </div>          
          {{-- End of SideBar --}}

          {{-- Job Post --}}
          <div class="col-md-9" id = "jobs">
          @if(!$jobs->isEmpty())
            @foreach($jobs as $job)
              <div class="location_box1">
                <h6>
                  <a href="location_single.html">{{$job->job_title}}</a>
                  <i class="fa fa-bookmark gray" id = "bookMark"></i>
                  <span class="m_1">Posted on {{Carbon\Carbon::parse($job->job_created_on)->format('D,d M Y')}}</span>
                </h6>
                <div class="clearfix"></div>
                <h4>
                  <a href="#">{{$job->employer->company->cmp_name}}</a> |
                  <b><i class="fa fa-map-marker" aria-hidden="true"></i>
                    @php
                      $cityD = array();
                      $cities = App\Models\City::where('city_id','=',$job->city_id)->get(); 
                    @endphp
                    @foreach($cities as $city)
                      @php array_push($cityD,$city->city_name); @endphp
                    @endforeach
                    {{ implode(',', $cityD) }}
                  </b>
                </h4>
                <div class="clearfix"></div>
                <div class="job-detail">
                  <p>{{$job->description}}</p>          
                  <div class="job-skills"> 
                    <span class="skil"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Skills :</span>
                    <p>                  
                      @php
                        $skillsD = array();
                        $skills = App\Models\Skill::whereIn('skill_id', explode(",",$job->job_skills))->get();
                      @endphp
                      @foreach ($skills as $skill)
                        @php array_push($skillsD , $skill->skill_title); @endphp
                      @endforeach                  
                      {{ implode(",", $skillsD) }}
                    </p>
                  </div>
                </div>
                <button class="apply">Apply</button>
                <div class="job-salary" style="margin-top:-10px; margin-bottom:0px;"> 
                  <span>
                    <i class="fa fa-inr" aria-hidden="true"></i> :
                  </span> {{$job->job_salary}} 
                  <span class="exp">
                    <b>Experience : </b>{{$job->exp_years}} years
                  </span> 
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="clearfix"> </div>
            @endforeach  
          @else
            {{ 'No Jobs Found' }}
          @endif  
          </div>
          {{-- End of Job Post --}}
        </div>
      </div>
      <!--middle-->
      <!--right-->
      <div class="col-md-3 col-sm-5">
        <div class="sidebar blog-sidebar">
          <div class="job-advertise">
            <img src="/images/AD.jpg">
          </div>
          <div class="sidebar-item tag-cloud">
            <h3>Recommented Jobs</h3>
            <h5>By Skills</h5>
            <ul class="nav nav-pills">
              <li><a href="#">Corporate</a></li>
              <li><a href="#">Joomla</a></li>
              <li><a href="#">Abstract</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">Corporate</a></li>
              <li><a href="#">Joomla</a></li>
              <li><a href="#">Abstract</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Product</a></li>
            </ul>

            <h5>By Companies</h5>
            <ul class="nav nav-pills">
              <li><a href="#">Corporate</a></li>
              <li><a href="#">Joomla</a></li>
              <li><a href="#">Abstract</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">Corporate</a></li>
              <li><a href="#">Joomla</a></li>
              <li><a href="#">Abstract</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Product</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="job-fix">
    <button id="showLeft" class="filterBtn btn">Filter<i class="fa fa-filter" aria-hidden="true"></i></button>
    <div id = "otherFilter" style="display: none;">
      <button id="doneFilter" class="filterBtn2 btn">Done<i class="fa fa-filter" aria-hidden="true"></i></button>
      <button id="ResetFilter" class="filterBtn2 btn">Reset<i class="fa fa-filter" aria-hidden="true"></i></button>
    </div>
  </div>
  <!--/#footer-->
@stop

@push('footer')
  <script type="text/javascript" src = "{{ asset('js/custom/jobs.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
  
  <script>  
  </script>
@endpush
