@extends('find.app')
@section('content')

<div id="snippet--flashMessages"></div>
<div class="content header-banner blog" data-image="{{ asset('/public') }}/search_meetUp_files/02.jpg" style="background-image: url('{{ asset('/public') }}/search_meetUp_files/02.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-holder">
                <h1 class="header">Travel Blog</h1>
                <p>Articles and stories to get your travel juices flowing</p>
            </div>
        </div>
    </div>
</div>

<div class="content blog categories">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 title">
                <h2><b>GET READY FOR YOUR NEXT ADVENTURE</b></h2>
                <p>Almost every great trip starts at a computer by gathering information about your destination, the local food, the sights, the people, and pretty much anything you can think of. Although the internet is an exhaustive collection of knowledge, it is difficult to find all the information you desire and in a coherent form. Gathering information about traveling is no exception.</p>
                <p>TripGiraffe travel blog aims to help you find all the information you need easily, just as to provide you with useful travel tips and inspirational stories so you know it is possible.
				Find information you need in categories below and get your planning going!</p>
            </div>
        </div>
        <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a class="item-holder" href="#">
                        <img src="{{ asset('/public') }}/blog_files/0pe2h0dyjz2crqw9xs5nsmqxstqnqvi76tzy7jhpcxjebxgdwk9sl5nes8mqtyruya5py4lwv0s9io0j.jpg" alt="GET INSPIRED">
                        <div class="overlay">
                            <img src="{{ asset('/public') }}/blog_files/cat-ico01.png" alt="category ico">
                            <p>GET INSPIRED</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a class="item-holder" href="#">
                        <img src="{{ asset('/public') }}/blog_files/rqigza4n6y7oklk302w1zz5cdl546wx20b7p54wcdhe5k8d1lhvwkdbanqp8wrbv609i2u7gx4cyez88.png" alt="TRAVEL ON BUDGET">
                        <div class="overlay">
                            <img src="{{ asset('/public') }}/blog_files/cat-ico05.png" alt="category ico">
                            <p>TRAVEL ON BUDGET</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a class="item-holder" href="#">
                        <img src="{{ asset('/public') }}/blog_files/8ktz8uw3trna436z8thv8pcar0tcv1nmr5am7y9m7fj668gbxtri68hxlo3jgs4hn3bdndk3wd3g9kvs.jpg" alt="LIFE ON THE ROAD">
                        <div class="overlay">
                            <img src="{{ asset('/public') }}//blog_files/cat-ico03.png" alt="category ico">
                            <p>LIFE ON THE ROAD</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a class="item-holder" href="https://www.tripgiraffe.com/travel-blog/travel-tips">
                        <img src="{{ asset('/public') }}/blog_files/duzt5sn431zkr9ffvuie3xgwd2orczbmayfmgdv9nf8lwlc3xlnzdtxvwkvhbsxby7c1mzn8lrw6dexs.jpg" alt="TRAVEL TIPS">
                        <div class="overlay">
                            <img src="{{ asset('/public') }}/blog_files/cat-ico02.png" alt="category ico">
                            <p>TRAVEL TIPS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a class="item-holder" href="#">
                        <img src="{{ asset('/public') }}/blog_files/v3empr0ns22kge0491q1fzs45dr4wt5wcy84if6wngf1id190hv895ageevnhdsfhv3po6cs71utawxh.jpg" alt="WORK &amp; TRAVEL">
                        <div class="overlay">
                            <img src="{{ asset('/public') }}//blog_files/cat-ico04.png" alt="category ico">
                            <p>WORK &amp; TRAVEL</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a class="item-holder" href="https://www.tripgiraffe.com/travel-blog/travel-stories">
                        <img src="{{ asset('/public') }}/blog_files/7409p4zmfcqc3en7d3nw1di3xz9viwwsty9oax2awju3awsbqxh46v9jtygidvdxiowopcit27xst9pp.jpg" alt="TRAVEL STORIES">
                        <div class="overlay">
                            <img src="{{ asset('/public') }}/blog_files/cat-ico06.png" alt="category ico">
                            <p>TRAVEL STORIES</p>
                        </div>
                    </a>
                </div>
        </div>
    </div>
</div>

<div class="content blog latest">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 title">
                <h2><b>LATEST ARTICLES</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
				<div id="snippet--paginator">               
				 <div class="row">
				 	@foreach($data['blog'] as $blog ) 
                        <div class="col-xs-12 item">
                            <div class="blog-wrapp">
                                <div class="img-holder">
                                    <a href="#">
                                    	<img src="{{ asset('/public') }}/blog_files/gl37z3sam121ftrqb0bubpf5saewr5b0rnzixsgf5cfam0sk7d16xmkzh6nxmqnybxme68lgxua4tm3x.jpg" alt="4 Reasons to Add Marsa Al Seef to Your Travel Bucket List Next Year"></a>
                                </div>
                                <p><a href="#">{{ $blog->blog_title }}</a></p>
                                <p style="margin: 0px 0px 15px 0px; height: 75px; font-weight: normal;">{{ $blog->short_description }}</p>
                                <div class="inline">
                                    <p><span>23</span> <span>MARCH</span> 2018 by Habib Khan</p>
                                    <p><a class="btn btn-yellow" href="#">Read More</a></p>
                                </div>
                            </div>
                        </div>
      				@endforeach
                        
                </div>
                <div class="text-center">
    <ul class="pagination">
            <li class="disabled"><a>« Previous</a></li>

                <li class="active"><a href="">1</a></li>
            
        
            

            <li><a href="" rel="next" class="ajax">Next »</a></li>
    </ul>
                </div>
</div>            </div>
        </div>
    </div>
</div>


<div class="social-panel">
    <ol>
        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
    </ol>
</div>
@endsection