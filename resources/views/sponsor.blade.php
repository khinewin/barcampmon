@extends('layouts.app')
@section('content')
    <section id="services" class="parallax-section" style="margin-bottom: 50px">
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


@endsection