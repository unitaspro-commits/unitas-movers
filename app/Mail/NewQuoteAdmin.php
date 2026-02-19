<?php

namespace App\Mail;

use App\Models\Quote;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewQuoteAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Quote $quote)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "New Quote Request — {$this->quote->full_name}",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.new-quote-admin',
            with: [
                'quote' => $this->quote,
                'adminUrl' => url("/admin/quotes/{$this->quote->id}/edit"),
            ],
        );
    }
}
