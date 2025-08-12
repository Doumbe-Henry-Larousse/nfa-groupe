<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Données du formulaire
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Contact Mail - ' . ($this->data['subject'] ?? 'Sans sujet'),
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    /*public function content()
    {
        return new Content(
            markdown: 'emails.contact', // emails/contact.blade.php
            
            with: [
                'data' => $this->data, // 👈 ceci rend disponible $data dans la vue
            ],
        );

    }*/

    public function build()
    {
        return $this->subject("sujet")
            ->view('emails.template-email')
            ->with(['datas' => $this->data]);
    }


    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }



}
