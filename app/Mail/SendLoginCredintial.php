<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendLoginCredintial extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $sub;
    public $mess;
    public function __construct($subject,$msg)
    {
        $this->sub=$subject;
        $this->mess=$msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject=$this->sub;
        $mess=$this->mess;
        return $this->view('mail.send-login-credential')->with(['subject'=>$subject,'mess'=>$mess]);
        //return $this->view('mail.send-login-credential',compact())->subject($subject);
    }
}
