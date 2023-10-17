<?php

namespace App\Mail\Bolsa;

use App\Models\config;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class bolsaMail extends Mailable
{
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function build()
    {
        $config = config::first();
        return $this->from('no-reply@efectoestrategico.com','EFECTOESTRATEGICO')
            ->subject('BOLSA DE TRABAJO')
            ->attach(('assets/files/bolsa/'.$this->items['file']), [
                'as' => $this->items['file'],
            ])
            ->markdown('mail.bolsa.formulario', ['items' => $this->items,'config' => $config ]);
    }
}
