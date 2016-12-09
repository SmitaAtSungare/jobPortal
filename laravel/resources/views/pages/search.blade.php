<p class="main-search" id ="searchBar">
    <div class = "skillsSection">
      <input type="hidden" id = "skillsBarH"/>
      <input type="text" class="btn btn-default1"  id = "skillsBar" placeholder="Type skill, company or designation">
      <div class="white_content2">
        <div id="skillsDrop" class="scrollbar3 style-4">
          <div class="my-Companysearch">
            <ul id = "skillsResult">
            </ul>
            <div class="force-overflow"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="locationSection">
      <input type="hidden" id = "locationBarH"/>
      <input type="text" class="btn btn-default1" id = "locationBar" placeholder="Enter Your City">
      <div class="white_content2">
        <div id="locationDrop" class="scrollbar3 style-4">
          <div class="my-Companysearch">
            <ul id = "locationResult">
            </ul>
            <div class="force-overflow"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="expSection">
      <input type="hidden" id = "expBarH"/>    
      <input type="text" class="btn btn-default1" id = "expBar" placeholder="Select Experience">
      <div class="white_content2">
        <div id="expDrop" class="scrollbar3 style-4">
          <div class="my-Companysearch">
            <ul id = "expResult">
            </ul>
            <div class="force-overflow"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="searchSection">
      <button type="button" id="searchBtn" class="search-btn">SEARCH  <i class="fa fa-search" id = "searchIcon" aria-hidden="true"></i></button>
    </div>

</p>

<div class="clearfix"></div>

@push('footer')
  <script type="text/javascript" src = "{{ asset('js/custom/search.js') }}"></script>
@endpush