<?php

namespace App\Http\Controllers;

use App\TopicBoard;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Sponsor;
use App\PhotoGallery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function manageSponsor()
    {
        $sponsor=Sponsor::all();
        return view('manageSponsor')->with(['spon'=>$sponsor]);
    }

    public function getLogo($logoName){
        $file=Storage::disk('local')->get($logoName);
        return new Response($file, 200);

    }

    public function manageGallery()
    {
        $gallery=PhotoGallery::all();
        return view('manageGallery')->with(['gallery'=>$gallery]);
    }

    public function getGallery($photoName)
    {
        $file=Storage::disk('local')->get($photoName);
        return new Response($file,200);
    }
    public function manageTopicBoard()
    {
        $topic=TopicBoard::all();
        return view('manageTopicBoard')->with(['topic'=>$topic]);
    }
    public function getTopic($photoName)
    {
        $file=Storage::disk('local')->get($photoName);
        return new Response($file,200);
    }
}
