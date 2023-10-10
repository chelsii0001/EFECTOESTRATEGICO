<?php

namespace App\Mail\Contact;

use App\Models\config;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function build()
    {
        $config = config::first();
        return $this->from('no-reply@efectoestrategico.com','EFECTOESTRATEGICO')
            ->subject('CONTACTO')
            ->markdown('mail.contact.formulario', ['items' => $this->items,'config' => $config ]);
    }
}
