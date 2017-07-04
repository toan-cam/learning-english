@extends('layouts.admin')

@section('content')

<div id="admin-homepage">
	<div class="row border-bottom">
	    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
	        <div class="navbar-header">
	            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
	            <form role="search" class="navbar-form-custom" action="search_results.html">
	                <div class="form-group">
	                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
	                </div>
	            </form>
	        </div>
	        <ul class="nav navbar-top-links navbar-right">
	            <li>
	                <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
	            </li>
	            <li class="dropdown">
	                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
	                    <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
	                </a>
	                <ul class="dropdown-menu dropdown-messages">
	                    <li>
	                        <div class="dropdown-messages-box">
	                            <a href="profile.html" class="pull-left">
	                                <img alt="image" class="img-circle" src="{{URL::asset('assets/images/a7.jpg')}}">
	                            </a>
	                            <div class="media-body">
	                                <small class="pull-right">46h ago</small>
	                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>.
	                                <br>
	                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
	                            </div>
	                        </div>
	                    </li>
	                    <li class="divider"></li>
	                    <li>
	                        <div class="dropdown-messages-box">
	                            <a href="profile.html" class="pull-left">
	                                <img alt="image" class="img-circle" src="{{URL::asset('assets/images/a4.jpg')}}">
	                            </a>
	                            <div class="media-body ">
	                                <small class="pull-right text-navy">5h ago</small>
	                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>.
	                                <br>
	                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
	                            </div>
	                        </div>
	                    </li>
	                    <li class="divider"></li>
	                    <li>
	                        <div class="dropdown-messages-box">
	                            <a href="profile.html" class="pull-left">
	                                <img alt="image" class="img-circle" src="{{URL::asset('assets/images/profile.jpg')}}">
	                            </a>
	                            <div class="media-body ">
	                                <small class="pull-right">23h ago</small>
	                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>.
	                                <br>
	                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
	                            </div>
	                        </div>
	                    </li>
	                    <li class="divider"></li>
	                    <li>
	                        <div class="text-center link-block">
	                            <a href="mailbox.html">
	                                <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
	                            </a>
	                        </div>
	                    </li>
	                </ul>
	            </li>
	            <li class="dropdown">
	                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
	                    <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
	                </a>
	                <ul class="dropdown-menu dropdown-alerts">
	                    <li>
	                        <a href="mailbox.html">
	                            <div>
	                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
	                                <span class="pull-right text-muted small">4 minutes ago</span>
	                            </div>
	                        </a>
	                    </li>
	                    <li class="divider"></li>
	                    <li>
	                        <a href="profile.html">
	                            <div>
	                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
	                                <span class="pull-right text-muted small">12 minutes ago</span>
	                            </div>
	                        </a>
	                    </li>
	                    <li class="divider"></li>
	                    <li>
	                        <a href="grid_options.html">
	                            <div>
	                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
	                                <span class="pull-right text-muted small">4 minutes ago</span>
	                            </div>
	                        </a>
	                    </li>
	                    <li class="divider"></li>
	                    <li>
	                        <div class="text-center link-block">
	                            <a href="notifications.html">
	                                <strong>See All Alerts</strong>
	                                <i class="fa fa-angle-right"></i>
	                            </a>
	                        </div>
	                    </li>
	                </ul>
	            </li>
	            <li>
	                <a href="login.html">
	                    <i class="fa fa-sign-out"></i> Log out
	                </a>
	            </li>
	        </ul>
	    </nav>
	</div>
	<div class="row wrapper border-bottom white-bg page-heading">
	    <div class="col-lg-10">
	        <h2>Article</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="index.html">Home</a>
	            </li>
	            <li>
	                <a>Miscellaneous</a>
	            </li>
	            <li class="active">
	                <strong>Article</strong>
	            </li>
	        </ol>
	    </div>
	    <div class="col-lg-2">
	    </div>
	</div>
	<div class="wrapper wrapper-content  animated fadeInRight article">
	    <div class="row">
	        <div class="col-lg-10 col-lg-offset-1">
	            <div class="ibox">
	                <div class="ibox-content">
	                    <div class="pull-right">
	                        <button class="btn btn-white btn-xs" type="button">Model</button>
	                        <button class="btn btn-white btn-xs" type="button">Publishing</button>
	                        <button class="btn btn-white btn-xs" type="button">Modern</button>
	                    </div>
	                    <div class="text-center article-title">
	                        <span class="text-muted"><i class="fa fa-clock-o"></i> 28th Oct 2015</span>
	                        <h1>
	                        Behind the word mountains
	                    </h1>
	                    </div>
	                    <p>
	                        Many desktop publishing packages and web page editors now use <strong>Lorem Ipsum as their default model text</strong>, and a search for 'lorem ipsum' will uncover many web
	                    </p>
	                    <p>
	                        One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops
	                    </p>
	                    <p>
	                        <i>
	                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
	                    </i>
	                    </p>
	                    <p>
	                        The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek,
	                    </p>
	                    <p>
	                        Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch "Jeopardy!", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just
	                    </p>
	                    <p>
	                        Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex.
	                    </p>
	                    <hr>
	                    <div class="row">
	                        <div class="col-md-6">
	                            <h5>Tags:</h5>
	                            <button class="btn btn-primary btn-xs" type="button">Model</button>
	                            <button class="btn btn-white btn-xs" type="button">Publishing</button>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="small text-right">
	                                <h5>Stats:</h5>
	                                <div> <i class="fa fa-comments-o"> </i> 56 comments </div>
	                                <i class="fa fa-eye"> </i> 144 views
	                            </div>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-lg-12">
	                            <h2>Comments:</h2>
	                            <div class="social-feed-box">
	                                <div class="social-avatar">
	                                    <a href="" class="pull-left">
	                                        <img alt="image" src="{{URL::asset('assets/images/a1.jpg')}}">
	                                    </a>
	                                    <div class="media-body">
	                                        <a href="#">
	                                        Andrew Williams
	                                    </a>
	                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
	                                    </div>
	                                </div>
	                                <div class="social-body">
	                                    <p>
	                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still default model text.
	                                    </p>
	                                </div>
	                            </div>
	                            <div class="social-feed-box">
	                                <div class="social-avatar">
	                                    <a href="" class="pull-left">
	                                        <img alt="image" src="{{URL::asset('assets/images/a2.jpg')}}">
	                                    </a>
	                                    <div class="media-body">
	                                        <a href="#">
	                                        Michael Novek
	                                    </a>
	                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
	                                    </div>
	                                </div>
	                                <div class="social-body">
	                                    <p>
	                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Packages and web page editors now use Lorem Ipsum as their default model text.
	                                    </p>
	                                </div>
	                            </div>
	                            <div class="social-feed-box">
	                                <div class="social-avatar">
	                                    <a href="" class="pull-left">
	                                        <img alt="image" src="{{URL::asset('assets/images/a3.jpg')}}">
	                                    </a>
	                                    <div class="media-body">
	                                        <a href="#">
	                                        Alice Mediater
	                                    </a>
	                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
	                                    </div>
	                                </div>
	                                <div class="social-body">
	                                    <p>
	                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Packages and web page editors now use Lorem Ipsum as their default model text.
	                                    </p>
	                                </div>
	                            </div>
	                            <div class="social-feed-box">
	                                <div class="social-avatar">
	                                    <a href="" class="pull-left">
	                                        <img alt="image" src="{{URL::asset('assets/images/a5.jpg')}}">
	                                    </a>
	                                    <div class="media-body">
	                                        <a href="#">
	                                        Monica Flex
	                                    </a>
	                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
	                                    </div>
	                                </div>
	                                <div class="social-body">
	                                    <p>
	                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Packages and web page editors now use Lorem Ipsum as their default model text.
	                                    </p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="footer">
	    <div class="pull-right">
	        10GB of <strong>250GB</strong> Free.
	    </div>
	    <div>
	        <strong>Copyright</strong> Example Company &copy; 2014-2015
	    </div>
	</div>
</div>

@endsection