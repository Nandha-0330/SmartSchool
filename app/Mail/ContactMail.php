<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable
{
    public $data;
    public $type;

    public function __construct($data,$type)
    {
        $this->data = $data;
        $this->type = $type;

    }

    public function build()
    {
        if ($this->type == 1){
            return $this->subject('New enquiry Form Submission')
                    ->view('emails.enquiry', ['data' => $this->data]);
        }
        elseif ($this->type == 2){
            return $this->subject('New Contact Form Submission')
            ->view('emails.contact', ['data' => $this->data]);

        }
        else{
            return null;
        }



    }
}
