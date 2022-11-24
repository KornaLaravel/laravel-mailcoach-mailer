<?php

namespace Spatie\MailcoachMailer\Mails;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class TestMail extends Mailable
{
    public function __construct(
        public $testFrom,
        public $testTo
    ) {
    }

    public function envelope()
    {
        return new Envelope(
            from: $this->testFrom,
            to: $this->testTo,
            subject: 'This is a test mail from Mailcoach',
        );
    }

    public function content()
    {
        return new Content(
            markdown: 'mail.test',
        );
    }
}
