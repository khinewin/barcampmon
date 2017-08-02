@extends('layouts.app')
@section('content')
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
                        <div id="contact-form-section">
                            @if(Session::has('success'))
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
@stop

