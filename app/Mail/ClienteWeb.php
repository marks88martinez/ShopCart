<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class ClienteWeb extends Mailable
{
    use Queueable, SerializesModels;

    public $last_order;
    public $last_order_products;
    public function __construct($last_order, $last_order_products )
    {
        $this->last_order = $last_order;
        $this->last_order_products = $last_order_products;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $cartCollection = \Cart::getContent();
        $nombre =  $cartCollection;
        $user = Auth::user();


        return $this->view('mails.clientWeb', ['nombre' => $nombre, 'user'=>$user]);
    }
}
