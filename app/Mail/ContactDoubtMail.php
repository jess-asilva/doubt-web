<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactDoubtMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    //public $data;
                            //array $data
    public function __construct()
    {
        //
        // $this->$data = $data;
    }

    /**
     * Get the message envelope.
     */
                        //$data
    public function envelope(): Envelope
    {
        return new Envelope(
           //from: new Address ('donatojoaopaulo67@gmail.com', 'Jeffrey Way'),
            subject: 'Contact Doubt Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown:'emails.MessageDoubtMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
