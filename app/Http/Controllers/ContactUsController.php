<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;


class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
    

        return view ('front.contact-us'); 
    }

    public function storeContactInfo(ContactUsRequest $request)
    {
        $data=$request->validated();
        $data['messageText']=$data['message'];
       /* $callback=function ($input= ''){
            return $input . 'text'; 
        };*/

     //dd($request->all());
    // \Log::debug('all data', $request->all());
   //  \Log::info('validated date',$request->validated());
   \Mail::send(
         'emails/contactUs',
         $data,
        function (Message $message) use ($data) {
         $message->to('test@test.com');
         $message->subject('Contact Us request from'. $data['name']. '  '.$data['email']);
       $message->replyTo($data['email']);

     }
     );
   //dd($request->validated());

    return redirect(route('contactUs.show'))->with('message', 'The message was sent successfully!');
}
}
