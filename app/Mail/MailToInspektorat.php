<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailToInspektorat extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $objEmail;

    public function __construct($objEmail)
    {
        //
        $this->objEmail = $objEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('LAYANAN PENGADUAN - BPS PROVINSI NTB')
                    ->view('mail.toinspektorat');
    }
}
