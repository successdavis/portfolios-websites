<?php

namespace App\Mail;

use App\Models\Inbox;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InboxMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Inbox $inbox
    ) {}

    public function build()
    {
        return $this->subject('New Contact Message Received')
            ->view('emails.inbox-message');
    }
}
