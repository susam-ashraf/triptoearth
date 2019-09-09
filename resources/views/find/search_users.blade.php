 @extends('find.app')
@section('content')
<div id="snippet--flashMessages"></div>
<div class="content header-banner" data-image="{{ asset('/public') }}/search_meetUp_files/02.jpg" style="background-image: url('{{ asset('/public') }}/search_meetUp_files/02.jpg');">
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
                        <li><a data-content="tab01" href="{{ url('/find-a-travel-buddy') }}/">Find a travel buddy</a></li>
                        <li><a data-content="tab01" href="{{ url('/meet-up') }}/">Meet up</a></li>
                        <li><a class="selected" data-content="tab01" href="{{ url('/all-travelers') }}/">All travelers</a></li>
                    </ul>
                </div>

                <div class="cd-tabs-content">

<div class="cd-item selected" data-content="tab02">
    <form action="{{ url('/search-all')}}" method="post" id="frm-meetUpFilterForm" novalidate="" enctype="multipart/form-data" >
                        {{ csrf_field() }}

        <div class="form-holder">
            <p class="col-md-8 col-md-offset-2 col-sm-12 form-title">Explore all travelers</p>
            <div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-12 form-group">
                <div class="inner-wrapper select-holder">
                    <label class="hidden" for="travelers-country">Travelers country</label>                        
                    <select name="district" class="selectpicker bs-select-hidden" id="frm-meetUpFilterForm-state_id">
                        <option value="">district</option>
                            @foreach($data['trips'] as $district)
                        <option value="{{$district->full_name}}">{{$district->full_name}}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  form-group">
                <label class="hidden" for="travelers-city">Name</label>
                <input type="text" name="name" class="form-control ui-autocomplete-input" placeholder="Name" id="city" autocomplete="off">
            </div>
            <div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-12 form-group">
                <div class="inner-wrapper select-holder">
                    <label class="hidden" for="travelers-gented">Preferred gented</label>
                    <select name="user_gender" class="selectpicker bs-select-hidden" id="frm-meetUpFilterForm-user_gender_id">
                        <option value="">Sex</option>
                        <option value="2">Female</option>
                        <option value="1">Male</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                <div class="inner-wrapper select-holder">
                    <label class="hidden" for="travelers-age">Travelers age</label>
                    <select name="age" class="selectpicker bs-select-hidden" id="frm-meetUpFilterForm-age_id">
                        <option value="">Age</option>
                        <option value="18">0-18</option>
                        <option value="24">19-24</option>
                        <option value="34">25-34</option>
                        <option value="44">35-44</option>
                        <option value="54">45-54</option>
                        <option value="100">55+</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 submit-holder">
                <button type="_submit" name="submit-meet" class="btn btn-yellow submit"><i class="fa fa-search"></i>Search</button>
            </div>                  
        </div>
    <input type="hidden" name="subit" value="find user">
</form>

    
</div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="content trip-list cd-tabs-content-outer">

<div class="container cd-item-outer selected" data-content="tab02">
   
    <div class="search-result">
        <p>Search result - <span>{{  $data['users']->count() }}</span></p>
    </div>
    
    <div data-ajax-append="true" id="snippet--tab02">

<div id="tab03" class="row">

    <div class="row">
    
        @foreach($data['users'] as $user)

        <div class="col-sm-6 col-xs-12 trip-holder meet-up">
            <div class="wrapper">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 image-panel">
                    <div class="img-holder">
                        <i class="web-icon man"></i>
                            <img src="{{ asset('/public') }}/search_meetUp_files/bywjdkl7nb5deoiwbaanfyh88mk2tgsre25unkrilaaoq2xnvro6nynd8iapdgw7wpi4iq0qwb0pv6q0.jpg" alt="tripper photo">
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 info-panel">
                    <div class="tripper-info">
                        <p><a href="#">{{ $user->name }}<span class="age">,{{ $user->age }}</span></a></p>
                        <p>
                            <i>
                                    <img src="{{ asset('/public') }}/search_meetUp_files/AE.png" alt="AE flag icon">
                            </i>
                            {{ $user->district }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 button-panel">
                    <a class="btn btn-yellow" href="#">Detail</a>
                </div>
            </div>
        </div>

     @endforeach
   
        

    </div>

</div> 

    

</div>  

</div>

</div> 
<script>
    $(document).ready(function () {

        $("#city").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "\/meet-up\/?do=getUsersCities",
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
                    url: "\/meet-up\/?do=getUsersCities2",
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

<div id="snippet--jsInfiniteScroll">    <script>
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
                        url: "\search-all\/?offset=10&do=nextPage"
                    });
                }
            });
        });
    </script>
</div>
@endsection