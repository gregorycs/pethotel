<?php

namespace App\Jobs;

use App\Mail\EmailForQueue;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $name_customer;
    protected $name_pet;
    protected $entry_date;
    protected $release_date;
    protected $mobility;
    protected $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name_customer, $name_pet, $entry_date, $release_date, $mobility, $email)
    {
        $this->name_customer = $name_customer;
        $this->name_pet = $name_pet;
        $this->entry_date = $entry_date;
        $this->release_date = $release_date;
        $this->mobility = $mobility;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new EmailForQueue($this->name_customer, $this->name_pet, $this->entry_date, $this->release_date, $this->mobility, $this->email);

        Mail::to($this->email)->send($email);
    }
}
