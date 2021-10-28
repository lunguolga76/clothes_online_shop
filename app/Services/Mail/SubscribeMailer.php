<?php

namespace App\Services\Mail;

use Illuminate\Contracts\Mail\Mailer;
use  Illuminate\Mail\Message;


class SubscribeMailer{

    private Mailer $infrastructureMailer;

    public function __construct(Mailer $mailer)
    {

        $this->infrastructureMailer = $mailer;
    }
    public function send(array $data):void
    {

        $this->infrastructureMailer->send(
            'emails/subscribe',
            $data,
            function (Message $message) use ($data) {
                $message->to('test@test.com');
                $message->subject('Subscribe request from'. $data['email']);
                $message->replyTo($data['email']);

            }
        );
    }

}
