<?php

namespace Manuj\Sender\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Manuj\Sender\Models\Send;
use Mail;
class LoadController extends Controller
{
    public function index()
    {
        return "inside the controller index";
        //return view('send::Email.testmail'); die();
    }

    public function send(Request $request)
    {
        $send_to = config('send.default.send_email_to');
        $this->newSend();
        return redirect(route('loader'));
    }

    public function newSend()
    {
        $send_to = config('send.default.send_email_to');
        $data = [
            'name' => "Manu Joseph",
            'note' => "Noting to say"
        ];
        Mail::send('send::Email.testmail',$data,function($message) use($send_to)
        {  
            $message->subject("Welcome to Send Package");
            $message->cc(['jomon.antony@cubettech.ccom','arun.p@cubettech.com']);
            $message->to($send_to)->subject("Test Mail");
            $message->from('manu.joseph@cubettech','Manu Joseph');
        });
        //Send::create($request->all());
        return true;
    }
}
