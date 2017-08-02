<?php

namespace App\Http\Controllers;

use App\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    //
    public function newGallery(Request $request)
    {
        $this->validate($request,[
            'photo'=>'required',
            'title'=>'required|unique:photo_galleries',
            'photoStatus'=>'required'
            ]);
        $gallery=new PhotoGallery();
        $gallery->photo=$request['title'].'.jpg';
        $gallery->title=$request['title'];
        $gallery->status=$request['photoStatus'];

        $gallery->save();

        $photoName=$request['title'].'.jpg';
        $photoFile=$request->file('photo');
        Storage::disk('local')->put($photoName,File::get($photoFile));


        return back()->with('addNewSuccess', 'Successfully Added!');
    }

    public function removeGallery($id){

        $g=PhotoGallery::WHERE('id',$id)->first();
        $g->delete();
        Storage::disk('local')->delete($g->photo);

        return back();
    }
}
