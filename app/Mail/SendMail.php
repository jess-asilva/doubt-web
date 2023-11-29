<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\build;


class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array $data
     */
    public array $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this
            ->from(config('mail.from.address'))
            ->subject("Nova Mensagem Doubt")
            ->view('users.message')
            ->with('data', $this->data);
    }

    /**
     * Get the message envelope.
    */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nova Mensagem Doubt',
        );
    }

    /**
     * Get the message content definition.
     */
    
    public function content(): Content
    {
        return new Content(
            view: 'users.message',
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

