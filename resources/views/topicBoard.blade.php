@extends('layouts.app');
@section('content')
    <section id="blog">
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
    </section> <!--/#blog-->
@endsection