@extends('layouts.app');
@section('content')
    <section id="gallery">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Gallery</h2>
                    <p></p>
                </div>
            </div>


            <div class="portfolio-items">
            @foreach($gallery as $g)
                <div class="col-sm-3 col-xs-12 portfolio-item">
                    <div class="view efffect" >
                        <div class="portfolio-image">
                            <img  src="{{route('welcomeGallery',['photoName'=>$g->photo])}}" alt="">
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


    @endsection