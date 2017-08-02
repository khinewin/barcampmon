@extends('layouts.app')
@section('content')
    <style>
        @keyframes example {
            0%   {color: red;}
            25%  {color: yellow;}
            50%  {color: blue;}
            100% {color: green;}
        }

        /* The element to apply the animation to */
        .btn-reg{
            animation-name: example;
            animation-duration: 4s;
            animation-iteration-count: infinite;
        }
    </style>

    <section id="home">
        <div class="home-pattern"></div>
            <img src="Templatedemo/Thaton/bcmThatonlogo.png" class="home-logo">
    </section><!--/#home-->

    <section id="about-barcamp">
        <div class="container">
            <div class="text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">What is Barcamp?</h2>
                    <p>
                        BarCamp is an international network of user-generated conferences primarily focused around technology and the web. They are open, participatory workshop-events, the content of which is provided by participants. The first BarCamps focused on early-stage web applications, and were related to open source technologies, social software, and open data formats.

                        The format has also been used for a variety of other topics, including public transit, health care, education, and political organizing. The BarCamp format has also been adapted for specific industries like banking, education, real estate and social media.
                    </p>
                </div>
            </div>
            <div class="about-us">
                <div class="text-justify">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#history" data-toggle="tab"><i class="fa fa-chain-broken"></i> History</a></li>
                                <li><a href="#influence" data-toggle="tab"><i class="fa fa-th-large"></i> Influence</a></li>
                                <li><a href="#structure" data-toggle="tab"><i class="fa fa-users"></i> Structure and participatory</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="history">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>
                                                The name BarCamp is a playful allusion to the event's origins, with reference to the programmer slang term, foobar: BarCamp arose as an open-to-the-public alternative to Foo Camp, which is an annual invitation-only participant-driven conference hosted by Tim O'Reilly.

                                                The first BarCamp was held in Palo Alto, California, from August 19–21, 2005, in the offices of Socialtext. It was organized in less than one week, from concept to event, with 200 attendees.

                                                Since then, BarCamps have been held in over 350 cities around the world, in North America, South America, Africa, Europe, the Middle East, Australasia and Asia. Attendees have often travelled internationally to attend BarCamps.

                                                To mark the first anniversary of BarCamp, BarCampEarth was held in multiple locations worldwide on August 25–27, 2006. The second anniversary of BarCamp, BarCampBlock, was held in Palo Alto at the original location, but also over a three block radius on August 18–19, 2007, and was attended by over 800 people.

                                                The largest recorded BarCamp took place in January 2013 with over 6400 confirmed registered attendees in Yangon, Myanmar (Burma). The January 2010 BarCamp Yangon attracted over 4700 attendees (confirmed with registration forms).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="influence">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>
                                                BarCamp makes their organizational process freely available, codifying it in a publicly available wiki. In addition to the BarCamp-branded network, it is also a model for user-generated conferences in other fields and for more specialized applications such as EdCamp, IndieWebCamp, WordCamp, PodCamp, Seattle Mind Camp, crisis camps, SkeptiCamp and THATCamp. The real estate industry has adopted the Barcamp format with over 30 RE Barcamps completed and scheduled throughout the U.S. with plans underway to take the format internationally. The BarCamp format has been used to organize events in foreign countries like the French-language VinoCamps which have been held in wine regions across France. Important software innovations like JQuery have been released at BarCamp.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="structure">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>Unlike traditional conference formats, both BarCamps and FooCamps have a self-organizing character, relying on the passion and the responsibility of the participants. Attendees schedule sessions by writing on a whiteboard or putting a Post-It note on a 'grid' of sessions. Those giving sessions are discouraged from using the sessions for promotion. BarCamps are often organized largely through the web; anyone can initiate a BarCamp using the BarCamp wiki.
                                                Although the format is loosely structured, there are rules[20] at BarCamp. All attendees are encouraged to present or facilitate a session or otherwise contribute to the event.[17] Everyone is also asked to share information and experiences of the event via public web channels, including blogs, photo sharing, social bookmarking, Twitter, wikis, and IRC. This encouragement to share is a deliberate change from the "off-the-record by default" and "no recordings" rules at many invite-only participant driven conferences. It also turns a physical, face-to-face event into a 'hybrid event' which enables remote online engagement with BarCamp participants.
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
    </section><!--/#about-barcamp-->

    <section id="clients" class="parallax-section" style="margin-top: 50px;">
        <div class="container">
            <div class="clients-wrapper">
                <div class="row text-center">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2 class="title-one">Schedule</h2>
                        <h2><a class="btn-reg" href="https://www.eventnook.com/event/barcampthaton2017" target="_blank">---->REGISTER<----</a></h2>
                        <h3>AUGUST 5-6, 2017 9AM-4PM</h3>
                        <h3>COMPUTER UNIVERSITY THATON, MON STATE, MYANMAR</h3>
                    </div>
                </div>
                <div id="clients-carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#clients-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#clients-carousel" data-slide-to="1"></li>
                    </ol> <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="single-client">
                                <div class="media">
                                    <div class="media-body">
                                        <blockquote>
                                            <div class="text-center" style="color: #ffffff">
                                                <h2>5.8.2017</h2>
                                                <h3>OPENING @ 9 AM</h3>
                                                <h3>HELP US OPEN THE BARCAMP THATON 2017 IN A BIG WAY. WELCOME TO JOIN AND PARTICIPATE!</h3>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-client">
                                <div class="media">
                                    <div class="media-body">
                                        <blockquote>
                                            <div class="text-center" style="color: #ffffff">
                                                <h2>6.8.2017</h2>
                                                <h3>CLOSING @ 5PM</h3>
                                                <h3>IT SUCKS, BUT EVERYTHING'S GOT TO END. SO WE SAY TARTAR | GOODBYE | AUF WIEDERSEHEN!</h3>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!--/#schedule-->

    <section id="topicBoard">
        <div class="container">
            <div class="row text-center clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Topic Board</h2>
                </div>
            </div>
            <div class="row">
                @foreach($topic as $t)
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <img src="{{route('welcomeTopic',['photoName'=>$t->photo])}}" alt="" />
                            <h2>{{$t->title}}</h2>
                            <ul class="post-meta">
                                <li><i class="fa fa-pencil-square-o"></i><strong> Speaker :</strong> {{$t->speaker}}</li>
                            </ul>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#{{$t->id}}">View</a>
                        </div>
                        <div class="modal fade" id="{{$t->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <img src="{{route('welcomeTopic',['photoName'=>$t->photo])}}" alt="" />
                                        <h2>{{$t->title}}</h2>
                                        <p>{{$t->status}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> <!--/#topic board-->

    <section id="gallery">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Gallery</h2>
                    <p></p>
                </div>
            </div>
            <!--<ul class="gallery-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">2017</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Html</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".joomla">Joomla</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".megento">Megento</a></li>
            </ul>--><!--/#portfolio-filter-->

            <div class="portfolio-items">
                @foreach($gallery as $g)
                    <div class="col-sm-3 col-xs-12 portfolio-item">
                        <div class="view efffect" >
                            <div class="portfolio-image">
                                <img src="{{route('welcomeGallery',['photoName'=>$g->photo])}}" alt="">
                            </div>
                            <div class="mask text-center">
                                <h3 class="photoTitle">{{$g->title}}</h3>
                                <h4 class="photoStatus">{{$g->status}}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section> <!--/#gallery-->

    <section id="services" class="parallax-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Sponsor</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="our-service">
                        <div class="services row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="single-service">
                                    @if(count($spon)>0)
                                        <img class="sponsor-logo" src="{{route('welcomeSponsor',['logoName'=>$spon[0]->logo])}}">
                                        <h2 class="sponsor-name">{{$spon[0]->name}}</h2>
                                        <h3 class="sponsor-type">{{$spon[0]->type}}</h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div id="team-carousel" class="carousel slide" data-interval="false">
                    <a class="member-left" href="#team-carousel" data-slide="prev"><span class="fa fa-arrow-left fa-lg" style="font-size: large;color: #ffffff"></span> </a>
                    <a class="member-right" href="#team-carousel" data-slide="next"><span class="fa fa-arrow-right fa-lg" style="font-size: large;color: #ffffff"></span> </a>
                    <div class="carousel-inner team-members">
                        <div class="row item active">
                            @for($i=1;$i<count($spon);$i++)
                                <div class="col-sm-6 col-md-3">
                                    <div class="single-member">
                                        <img class="sponsor-logo" src="{{route('welcomeSponsor',['logoName'=>$spon[$i]->logo])}}" alt="team member" />
                                        <h3 class="sponsor-name">{{$spon[$i]->name}}</h3>
                                        <h4 class="sponsor-type">{{$spon[$i]->type}}</h4>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="row item">
                            @for($i=1;$i<count($spon);$i++)
                                <div class="col-sm-6 col-md-3">
                                    <div class="single-member">
                                        <img class="sponsor-logo" src="{{route('welcomeSponsor',['logoName'=>$spon[$i]->logo])}}" alt="team member" />
                                        <h3 class="sponsor-name">{{$spon[$i]->name}}</h3>
                                        <h4 class="sponsor-type">{{$spon[$i]->type}}</h4>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#sponsor-->

    <section id="contact">
        <div class="container">
            <div class="row text-center clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="contact-heading">
                        <h2 class="title-one">Contact With Us</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact-details">
                <div class="pattern"></div>
                <div class="row text-center clearfix">
                    <div class="col-sm-6">
                        <div class="contact-address">
                            <address>
                                <p><span>Organizer's Contact </span> Info</p><strong>Email:barcampmon@gmail.com
                                    <br>Thaton Township<br>Mon State, Myanmar</strong><br>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="contact-form-section">@if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form id="contact-form" class="contact" name="contact-form" method="post" action="{{route('sendEmail')}}">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name">
                                    </div>
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
                                    </div>
                                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                {{csrf_field()}}
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 30px">
            <div class="row">
                <div class="col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.7351618819853!2d97.3840550142457!3d16.888990588379077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c2e971af8489db%3A0x77befc77b793c6f1!2sComputer+University+(Thaton)!5e0!3m2!1sen!2smm!4v1501587371242" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>


                </div>
            </div>
        </div>
    </section> <!--/#contact-->
@endsection