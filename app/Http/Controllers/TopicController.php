<?php

namespace App\Http\Controllers;

use App\TopicBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TopicController extends Controller
{
    //
    public function newTopic(Request $request)
    {
        $this->validate($request,[
           'photo'=>'required',
            'title'=>'required|unique:topic_boards',
            'speaker'=>'required',
            'status'=>'required'
        ]);

        $topic=new TopicBoard();
        $topic->photo=$request['title'].'.jpg';
        $topic->title=$request['title'];
        $topic->speaker=$request['speaker'];
        $topic->status=$request['status'];

        $topicPhoto=$request['title'].'.jpg';
        $topicPhotoFile=$request->file('photo');
        Storage::disk('local')->put($topicPhoto,File::get($topicPhotoFile));

        $topic->save();

        return back()->with('addNewSuccess','Successfully added!');
    }

    public function removeTopic($id){

        $t=TopicBoard::WHERE('id',$id)->first();
        $t->delete();
        Storage::disk('local')->delete($t->photo);

        return back();
    }
}
