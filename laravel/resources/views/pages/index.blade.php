@extends('layouts.master')

@section('content')
<section id="home-slider">
  <div class="container">
    <div class="row">
      <div class="main-slider">
        <form>
          <div id="search_form" class="clearfix">
            <h1>Start your job search</h1>           
            @include('pages.search')
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--/#home-slider-->
<section id="team">
  <div class="container">
    <div class="row">
      <h1 class="title text-center wow fadeInDown animated" >Top Companies</h1>
      <div id="team-carousel" class="carousel slide wow fadeIn animated" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 400ms; animation-name: fadeIn;">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#team-carousel" data-slide-to="1" class=""></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item next left">
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c1.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c2.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c3.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c4.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c5.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c5.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item active left">
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c5.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c6.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c5.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c6.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c5.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-xs-6">
              <div class="team-single-wrapper">
                <div class="team-single">
                  <div class="person-thumb"> <img src="images/c6.gif" class="img-responsive" alt=""> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a> <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a> </div>
    </div>
  </div>
</section>
<section id="features">
  <div class="container">
    <div id="exTab1" class="container">
      <ul  class="nav nav-pills">
        <li class="active"> <a  href="#1a" data-toggle="tab">Top Category</a> </li>
        <li><a href="#2a" data-toggle="tab">Top Searches</a>
          <div class="loadinggif"></div>
        </li>
      </ul>
      <div class="tab-content clearfix">
        <div class="tab-pane active" id="1a">
          <div class="Top-Search scrollbar2 style-4 ">
            <ul>
              <li class=" "><a href="/jobs?ct=it-software-programming-analysis" title="IT - Software Programming / Analysis">IT - Software Programming / Analysis</a></li>
              <li class=" "><a href="/jobs?ct=sales-business-development" title="Sales / Business Development">Sales / Business Development</a></li>
              <li class=" "><a href="/jobs?ct=customer-service-call-centre-operations-data-entry" title="Customer Service / Call Centre / Operations / Data Entry">Customer Service / Call Centre / Operations / Data Entry</a></li>
              <li class=" "><a href="/jobs?ct=manufacturing-packaging-printing-industrial-jobs" title="Manufacturing / Packaging / Printing / Industrial Jobs">Manufacturing / Packaging / Printing / Industrial Jobs</a></li>
              <li class=" "><a href="/jobs?ct=hr-recruitment" title="HR / Recruitment">HR / Recruitment</a></li>
              <li class=" "><a href="/jobs?ct=accounting-auditing-tax" title="Accounting / Auditing / Tax">Accounting / Auditing / Tax</a></li>
              <li class=" "><a href="/jobs?ct=engineering-rd" title="Engineering / R&amp;D">Engineering / R&amp;D</a></li>
              <li class=" "><a href="/jobs?ct=healthcare-medical-pharmacy" title="Healthcare / Medical / Pharmacy">Healthcare / Medical / Pharmacy</a></li>
              <li class=" "><a href="/jobs?ct=banking-financial-services" title="Banking / Financial Services">Banking / Financial Services</a></li>
              <li class=" "><a href="/jobs?ct=marketing-communication-advertising-pr" title="Marketing / Communication / Advertising / PR">Marketing / Communication / Advertising / PR</a></li>
              <li class=" "><a href="/jobs?ct=administration-secretary-front-office" title="Administration / Secretary / Front Office">Administration / Secretary / Front Office</a></li>
              <li class=" "><a href="/jobs?ct=education-teaching-language" title="Education / Teaching / Language">Education / Teaching / Language</a></li>
              <li class=" "><a href="/jobs?ct=it-hardware-telecom-support" title="IT - Hardware / Telecom / Support">IT - Hardware / Telecom / Support</a></li>
              <li class=" "><a href="/jobs?ct=hotel-restaurant-catering" title="Hotel / Restaurant / Catering">Hotel / Restaurant / Catering</a></li>
              <li class=" "><a href="/jobs?ct=it-systems-networking-security" title="IT - Systems / Networking / Security">IT - Systems / Networking / Security</a></li>
              <li class=" "><a href="/jobs?ct=logistics-purchase-supply-chain-procurement" title="Logistics / Purchase / Supply Chain / Procurement">Logistics / Purchase / Supply Chain / Procurement</a></li>
              <li class=" "><a href="/jobs?ct=quality-testing-process-control" title="Quality / Testing / Process Control">Quality / Testing / Process Control</a></li>
              <li class=" "><a href="/jobs?ct=internet-technologies-web-e-commerce" title="Internet Technologies / Web / E-Commerce">Internet Technologies / Web / E-Commerce</a></li>
              <li class=" "><a href="/jobs?ct=freshers-jobs" title="Freshers Jobs">Freshers Jobs</a></li>
              <li class=" "><a title="View more categories" href="/sitemap"><strong>View more categories »</strong></a></li>
            </ul>
          </div>
        </div>
        <div class="tab-pane" id="2a">
          <div class="Top-Search scrollbar2 style-4 ">
            <ul >
              <li class=" "><a href="/jobs?q=manager+jobs+in+delhi" title="Manager jobs in Delhi">Manager jobs in Delhi</a></li>
              <li class=" "><a href="/jobs?q=railway+recruitment+board" title="Railway recruitment board">Railway recruitment board</a></li>
              <li class=" "><a href="/jobs?q=it+vacancies+in+bangalore" title="IT vacancies in Bangalore">IT vacancies in Bangalore</a></li>
              <li class=" "><a href="/jobs?q=freshers+job+mumbai" title="Freshers job Mumbai">Freshers job Mumbai</a></li>
              <li class=" "><a href="/jobs?q=bank+jobs" title="Bank jobs">Bank jobs</a></li>
              <li class=" "><a href="/jobs?q=recruitment+in+banks" title="Recruitment in banks">Recruitment in banks</a></li>
              <li class=" "><a href="/jobs?q=part+time+jobs+in+chennai" title="Part time jobs in Chennai">Part time jobs in Chennai</a></li>
              <li class=" "><a href="/jobs?q=healthcare+job" title="Healthcare jobs">Healthcare jobs</a></li>
              <li class=" "><a href="/jobs?q=bpo+jobs+in+bangalore" title="bpo jobs in bangalore">bpo jobs in bangalore</a></li>
              <li class=" "><a href="/jobs?q=computer+operator+jobs+in+delhi+ncr" title="Computer operator jobs in Delhi ncr">Computer operator jobs in Delhi ncr</a></li>
              <li class=" "><a href="/jobs?q=oil+rig+jobs" title="Oil rig jobs">Oil rig jobs</a></li>
              <li class=" "><a href="/jobs?q=data+entry+operator" title="Data entry operator">Data entry operator</a></li>
              <li class=" "><a href="/jobs?q=marketing+executive" title="Marketing Executive">Marketing Executive</a></li>
              <li class=" "><a href="/jobs?q=software+engineer+job" title="Software engineer job">Software engineer job</a></li>
              <li class=" "><a href="/jobs?q=hr+jobs" title="HR jobs">HR jobs</a></li>
              <li class=" "><a href="/jobs?q=engineer+jobs+in+chennai" title="Engineer jobs in chennai">Engineer jobs in chennai</a></li>
              <li class=" "><a href="/jobs?q=work+from+home+jobs+in+delhi" title="Home Jobs in Delhi">Home Jobs in Delhi</a></li>
              <li class=" "><a href="/jobs?q=call+center+ahmedabad" title="Call Center Ahmedabad">Call Center Ahmedabad</a></li>
              <li class=" "><a href="/jobs?q=consultants+in+gurgaon" title="Consultants in Gurgaon">Consultants in Gurgaon</a></li>
              <li class=" "><a href="/jobs?q=asp+net+developer+fresher+ahmedabad" title="ASP Net Developers Ahmedabad">ASP Net Developers Ahmedabad</a></li>
              <li class=" "><a href="/jobs?q=mba+fresher+jobs+in+delhi+ncr" title="MBA Fresher Jobs in Delhi NCR">MBA Fresher Jobs in Delhi NCR</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="advertise"> <img src="images/AD.jpg"> </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </div>
</section>
@stop