@extends('layouts.app');
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
    </section><!--/#clients-->
    @endsection