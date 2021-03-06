<?php

namespace App\Mail;

use App\order;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerInformMail extends Mailable
{
    use Queueable, SerializesModels;


    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('customer.informMail')
                    ->with([
                        'name' => $this->order->customer_name,
                        'status' => $this->order->status,
                    ]);
        
    }
}
