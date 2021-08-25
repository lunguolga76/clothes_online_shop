<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
    

        return view ('front.contact-us'); 
    }

    public function storeContactInfo(ContactUsRequest $request)
    {
     //dd($request->all());
    $contactUsRequest = $request->validated();
   //dd($request->validated());
    return redirect(route('contactUs.show'))->with('message', 'The message was sent successfully!');;
}
}
