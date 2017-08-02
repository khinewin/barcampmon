<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Sponsor;

class SponsorController extends Controller
{
    public function newSponsor(Request $request)
    {
        $this->validate($request, [
            'sponsorLogo' => 'required',
            'sponsorType' => 'required',
            'sponsorName' => 'required'
        ]);
        $sponsor=new Sponsor();
        $sponsor->logo=$request['sponsorName'].'.jpg';
        $sponsor->type=$request['sponsorType'];
        $sponsor->name=$request['sponsorName'];

        $sponsor->save();

        $logoName=$request['sponsorName'].'.jpg';
        $logoFile=$request->file('sponsorLogo');
        Storage::disk('local')->put($logoName,File::get($logoFile));


        return back()->with('addNewSuccess', 'Successfully Added!');

    }
    public function removeSponsor($id){

        $s=Sponsor::WHERE('id',$id)->first();
        $s->delete();
        Storage::disk('local')->delete($s->logo);
        return back();
    }


}
