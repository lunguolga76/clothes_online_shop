<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Services\Mail\ContactUsMailer;
use App\Services\Mail\SubscribeMailer;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
   public  function subscribe(Request $request){

        return view('layouts.front_footer');
    }
    public  function storeSubscribers(SubscribeRequest $request, SubscribeMailer $mailer){

        $data=$request->validated();


        $mailer->send($data);

        return redirect(route('home'))->with('message', 'You was subscribed successfully to our newsletters!');
    }

}
