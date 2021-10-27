<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;
use App\Services\Mail\ContactUsMailer;




class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
    

        return view ('front.info.contact-us');
    }

    public function storeContactInfo(ContactUsRequest $request, ContactUsMailer $mailer)
    {
        $data=$request->validated();

        $mailer->send($data);
       

    return redirect(route('contactUs.show'))->with('message', 'The message was sent successfully!');
}
}
