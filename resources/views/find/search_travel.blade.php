@extends('find.app')
@section('content')

<div id="snippet--flashMessages"></div>
<div class="content header-banner" data-image="{{ asset('/public') }}/search_travel_files/02.jpg" style="background-image: url('{{ asset('/public') }}/search_travel_files/02.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-holder">
                <h1 class="header">FIND YOUR PERFECT TRAVEL BUDDY</h1>
            </div>
        </div>
    </div>
</div>
<div class="content find-buddy">
    <div class="container">
        <div class="row">
            <div class="cd-tabs is-ended">
                <div class="nav pull-up">
                    <ul class="cd-tabs-navigation">
                        <li><a class="selected" data-content="tab01" href="{{ url('/find-a-travel-buddy') }}/">Find a travel buddy</a></li>
                        <li><a data-content="tab01" href="{{ url('/meet-up') }}/">Meet up</a></li>
                        <li><a  data-content="tab01" href="{{ url('/all-travelers') }}/">All travelers</a></li>
                    </ul>
                </div>

                <div class="cd-tabs-content" style="height: auto;">

<div class="cd-item selected" data-content="tab01">

    <form action="{{ url('/find-a-travel-buddy-search') }}" method="post" id="frm-tripFilterForm" novalidate=""  enctype="multipart/form-data" >
                        {{ csrf_field() }}
        <div class="form-holder">
            <p class="col-xs-12 form-title">Main</p>

            <div class="col-md-4 col-md-offset-right-0 col-sm-6 col-sm-offset-right-6 col-xs-12 form-group">
                <div class="inner-wrapper select-holder">
                    <label class="hidden" for="findbuddy-gented">Destination</label>
                     <select name="district" class="selectpicker bs-select-hidden" id="frm-meetUpFilterForm-state_id">
                        <option value="">Destination</option>
                            @foreach($data['district'] as $district)
                        <option value="{{$district->full_name}}">{{$district->full_name}}</option>
                            @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                <div class="datepicker-holder">              
                    <label for="findbuddy-from">Date from</label>
                    <div class="input-wrapper">
                        <input type="text" name="from_date" class="form-control datepicker" readonly="readonly" placeholder="dd/mm/rr" id="frm-tripFilterForm-from">
                        <button class="btn datepicker" type="button"><i class="web-icon calendar"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                <div class="inner-wrapper datepicker-holder"> 
                    <label for="findbuddy-to" class="center">to</label>
                    <div class="input-wrapper">
                        <input type="text" name="to_date" class="form-control datepicker" readonly="readonly" placeholder="dd/mm/rr" id="frm-tripFilterForm-to">
                        <button class="btn btn-default datepicker" type="button"><i class="web-icon calendar"></i></button>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                <div class="inner-wrapper select-holder">
                    <label class="hidden" for="findbuddy-gented">Preferred with</label>
                    <select name="user_gender" class="selectpicker bs-select-hidden" id="frm-tripFilterForm-user_gender_id">
                        <option value="">Preferred with</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Male group</option>
                        <option value="4">Female group</option>
                        <option value="5">Mixed group</option>
                        <option value="6">Any</option>
                    </select>
                </div>
            </div>
            

            <p class="col-xs-12 form-title">Trip</p>
            <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                <div class="inner-wrapper select-holder">
                    <label class="hidden" for="findbuddy-journey">Type of journey</label>
                            <select name="type_of_journey" class="selectpicker bs-select-hidden"  id="frm-tripForm-type_ids">
                                <option value="" >Type of Journey</option>
                                <option value="1">Backpacking</option>
                                <option value="3">Beach</option>
                                <option value="2">City break</option>
                                <option value="4">Other</option>
                            </select>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-right-4 col-sm-6 col-xs-12 form-group">
                <div class="inner-wrapper select-holder">
                    <label class="hidden" for="findbuddy-budget">Budget</label>
                        <select name="budget_id" class="selectpicker bs-select-hidden" id="frm-tripForm-budget_id"  >
                                <option value="">Budget</option>
                                <option value="1">BDT 0 - BDT 2000</option>
                                <option value="2">BDT 2000 - BDT 3500</option>
                                <option value="3">BDT 3500 - BDT 5000</option>
                                <option value="4">BDT 5000 - BDT 7000</option>
                                <option value="5">BDT 7000 - BDT 8000</option>
                                <option value="6">BDT 8000 - BDT 9000</option>
                                <option value="7">BDT 9000 - BDT 10000</option>
                                <option value="8">BDT 10000 +</option>
                        </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                <div class="inner-wrapper select-holder">
                    <label class="hidden" for="findbuddy-sharing">Room sharing</label>
                    <select name="room_share" class="selectpicker bs-select-hidden" id="frm-tripFilterForm-room_share">
                        <option value="">Room sharing</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                <div class="inner-wrapper select-holder">
                    <label class="hidden" for="findbuddy-worktravel">Work &amp; Travel</label>

                    <select name="work_and_travel" class="selectpicker bs-select-hidden" id="frm-tripFilterForm-work_and_travel">
                        <option value="">Work &amp; Travel</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 submit-holder">
                <button type="_submit" name="submit-findbuddy" class="btn btn-yellow submit"><i class="fa fa-search"></i>Search</button>
            </div>                  
        </div>
    <input type="hidden" name="do" value="tripFilterForm-submit">
</form>

</div>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="content trip-list cd-tabs-content-outer">

<div class="container cd-item-outer selected" data-content="tab01">
    
    <div class="search-result">
        <p>Search result - <span>{{  $data['trips']->count() }}</span></p>            
    </div>
    
    <div class="row">
        <div data-ajax-append="true" id="snippet--tab01">
             @foreach($data['trips'] as $trip)     

    <div class="col-xs-12 trip-holder">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 image-panel">
            <div class="img-holder">
                    <img src="{{ asset('/public') }}/images/person.png" alt="tripper photo">
            </div>
            <div class="flag-holder" style="padding-bottom: 5px;">
               {{--  <p>Age:</p>
                <p class="age">25</p> --}}
            </div>
            <div class="img-holder">
                <i class="web-icon woman gender-holder"></i>
            </div>
        </div>
        <div class="col-md-8 col-sm-10 col-xs-12 info-panel">
            <div class="title">
                <p>
                    <a href="#">{{ $trip->trip_title }}</a>
                </p>
                <p>
                    <i class="web-icon man-plus"></i>
                    0
                </p>
            </div>
            <div class="date">
                <p>
                    <span>{{ $trip->from_date }}</span>
                    <span class="sep">-</span><span>{{ $trip->to_date }}</span>
                    <span></span>
                </p>
            </div>
            <div class="tripper-info">
                <p>by <a href="">ratul</a></p>
                <p>
                    Trip to : <span>{{ $trip->destination }}</span>
                </p>
            </div>
            <div class="trip-detail">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <i class="web-icon peoples"></i>
                        <p>Looking for:
                             <span>
                               
                                @if($trip->find_gender==1) Male
                                @elseif($trip->find_gender==2) Female
                                @elseif($trip->find_gender==3) Male group
                                @elseif($trip->find_gender==4) Female group
                                @elseif($trip->find_gender==5) Mixed group
                                @elseif($trip->find_gender==6) Any
                                @endif


                            </span>
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <i class="web-icon land"></i>
                        <p>
                            Type of journey: 
                            <span> 
                                    @if($trip->type_of_journey==1) Backpacking
                                    @elseif($trip->type_of_journey==2) Beach
                                    @elseif($trip->type_of_journey==3) City break
                                    @elseif($trip->type_of_journey==4) Other
                                    @endif
                            </span>
                        </p>                    
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <i class="web-icon beds"></i><p>Room share: <span>
                         @if($trip->room_sharing==0) No
                         @else Yes
                        @endif


                                 
                        </span></p>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <i class="web-icon budget"></i>
                        <p>Budget: 
                            <span>
                         
                                    @if($trip->budget==1) BDT 0 - BDT 2000
                                    @elseif($trip->budget==2) BDT 2000 - BDT 3500
                                    @elseif($trip->budget==3) BDT 3500 - BDT 5000
                                    @elseif($trip->budget==4) BDT 5000 - BDT 7000
                                    @elseif($trip->budget==5) BDT 7000 - BDT 8000
                                    @elseif($trip->budget==6) BDT 8000 - BDT 9000
                                    @elseif($trip->budget==7) BDT 9000 - BDT 10000
                                    @elseif($trip->budget==8) BDT 10000+
                                    @endif
                            </span>
                        </p>                    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-xs-12 button-panel">
            <a class="btn btn-yellow" href="#">Detail</a>
        </div>
    </div>
    
           @endforeach     
        </div>
    </div>
</div>

</div> 
<script>
    $(document).ready(function () {

        $("#city").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "\/find-a-travel-buddy?do=getUsersCities",
                    data: {
                        string: request.term
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            }
        });

        $("#city2").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "\/find-a-travel-buddy?do=getUsersCities2",
                    data: {
                        string: request.term
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            }
        });
    });
</script>

<div id="snippet--jsInfiniteScroll">    
    <script>
        //ALL TRAVELERS PAGINATOR
        $(document).ready(function () {
            $('.cd-tabs').each(function () {
                var tabItems = $(this).find('ul.cd-tabs-navigation a');
                tabItems.unbind();
            });
            var win = $(window);
            // Each time the user scrolls
            win.scroll(function () {
                // End of the document reached?
                if ($(document).height() - win.height()*2 <= win.scrollTop()) {
                    $.nette.ajax({
                        url: "\/find-a-travel-buddy?offset=0&do=nextPage"
                    });
                }
            });
        });
   </script>
</div>
@endsection