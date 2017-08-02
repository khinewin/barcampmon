<?php

namespace App\Http\Controllers;

use App\PhotoGallery;
use App\TopicBoard;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Sponsor;
use PHPMailer;


class WelcomeController extends Controller
{
    //
    public function toWelcome()
    {
        $sponsor=Sponsor::all();
        $gallery=PhotoGallery::all();
        $topic=TopicBoard::all();
        return view('welcome')->with(['spon'=>$sponsor])->with(['gallery'=>$gallery])->with(['topic'=>$topic]);
    }
    public function toAboutBarcamp()
    {
        return view('aboutBarcamp');
    }
    public function toSponsor()
    {
        $sponsor=Sponsor::all();
        return view('sponsor')->with(['spon'=>$sponsor]);
    }
    public function getLogo($logoName){
        $file=Storage::disk('local')->get($logoName);
        return new Response($file, 200);

    }

    public function toGallery()
    {
        $gallery=PhotoGallery::all();
        return view('gallery')->with(['gallery'=>$gallery]);
    }
    public function getGallery($photoName)
    {
        $file=Storage::disk('local')->get($photoName);
        return new Response($file,200);
    }


    public function toTopicBoard()
    {
        $topic=TopicBoard::all();
        return view('topicBoard')->with(['topic'=>$topic]);
    }

    public function getTopic($photoName)
    {
        $file=Storage::disk('local')->get($photoName);
        return new Response($file,200);
    }

    public function toSchedule()
    {
        return view('schedule');
    }
    public function toContactUs()
    {
        return view('contactUs');
    }
    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'barcampmon@gmail.com';                 // SMTP username
        $mail->Password = 'rnwubhzroywkzocc';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom($request['email'], $request['email']);
        $mail->addAddress('barcampmon@gmail.com', 'Administrator');     // Add a recipient



        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Contact Email';
        $mail->Body    = $request['message'];


        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return redirect()->back()->with('success' ,'Your Message have been sent.');
        }
    }

}
