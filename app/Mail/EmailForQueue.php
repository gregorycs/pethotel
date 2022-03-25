<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailForQueue extends Mailable
{
    use Queueable, SerializesModels;

    protected $name_customer;
    protected $name_pet;
    protected $entry_date;
    protected $release_date;
    protected $mobility;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name_customer, $name_pet, $entry_date, $release_date, $mobility)
    {
        $this->name_customer = $name_customer;
        $this->name_pet = $name_pet;
        $this->entry_date = $entry_date;
        $this->release_date = $release_date;
        $this->mobility = $mobility;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('gregorio.chisan@gmail.com', 'Gregorio')
                ->subject('Información reserva Hotel de mascotas')
                ->view('email.email_reservation')
                ->with([
                    'name_customer' => $this->name_customer,
                    'name_pet' => $this->name_customer,
                    'entry_date' => $this->entry_date,
                    'release_date' => $this->release_date,
                    'mobility' => $this->mobility,
                ]);
    }
}
