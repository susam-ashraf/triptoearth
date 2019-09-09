@extends('find.app')
@section('content')
<div id="snippet--flashMessages"></div>
<div class="content header-banner" data-image="{{asset('/public')}}/new_trips_files/02.jpg" style="background-image: url('{{asset('/public')}}/new_trips_files/02.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-holder">
                <h1 class="header">Are you looking for some adventure?</h1>
            </div>
        </div>
    </div>
</div>

<div class="content trip-list">
    <div class="container">
        <div class="row">

            <div data-ajax-append="true" id="snippet--trips">

@foreach($data['trips'] as $trip)
    <div class="col-xs-12 trip-holder">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 image-panel">
            <div class="img-holder">
                    <img src="{{asset('/public')}}/image/person.png" alt="tripper photo">
            </div>
            <div class="flag-holder" style="padding-bottom: 5px;">
                <p>AGE:</p>
                <p class="age">25</p>
            </div>
            <div class="img-holder">
                <i class="web-icon woman gender-holder"></i>
            </div>
        </div>
        
        <div class="col-md-8 col-sm-10 col-xs-12 info-panel">
            <div class="title">
                <p>
                    <a href="">{{$trip->trip_title}} </a>
                </p>
                <p>
                    <i class="web-icon man-plus"></i>
                    0
                </p>
            </div>
            <div class="date">
                <p>
                    <span>{{$trip->from_date}}</span>
                    <span class="sep">-</span><span>{{$trip->to_date}}</span>
                    <span></span>
                </p>
            </div>
            <div class="tripper-info">
                <p>by <a href="#">ratul</a></p>
                <p>
                    Trip to : <span>{{$trip->destination}}</span>
                </p>
            </div>
            <div class="trip-detail">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <i class="web-icon peoples"></i><p>Looking for: <span>
                               @if($trip->find_gender==1) Male
                                @elseif($trip->find_gender==2) Female
                                @elseif($trip->find_gender==3) Male group
                                @elseif($trip->find_gender==4) Female group
                                @elseif($trip->find_gender==5) Mixed group
                                @elseif($trip->find_gender==6) Any
                                @endif</span></p>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <i class="web-icon land"></i>
                        <p>
                            Place want to see: 
                            <span>
                                    {{$trip->place_want_to_see}}
                            </span>
                        </p>                    
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <i class="web-icon beds"></i><p>Room share: <span>
                        @if($trip->room_sharing==0) No
                         @else Yes
                        @endif
                        </span>
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <i class="web-icon budget"></i><p>Budget: <span>
                                    @if($trip->budget==1) BDT 0 - BDT 2000
                                    @elseif($trip->budget==2) BDT 2000 - BDT 3500
                                    @elseif($trip->budget==3) BDT 3500 - BDT 5000
                                    @elseif($trip->budget==4) BDT 5000 - BDT 7000
                                    @elseif($trip->budget==5) BDT 7000 - BDT 8000
                                    @elseif($trip->budget==6) BDT 8000 - BDT 9000
                                    @elseif($trip->budget==7) BDT 9000 - BDT 10000
                                    @elseif($trip->budget==8) BDT 10000+
                                    @endif
                        </span></p>                    
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
@endsection