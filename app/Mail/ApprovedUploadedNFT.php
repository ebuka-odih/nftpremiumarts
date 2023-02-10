<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApprovedUploadedNFT extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $nft;
    public function __construct($nft)
    {
        $this->nft = $nft;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.approve-upload')
            ->subject(env('APP_ NAME'))
            ->from(env('MAIL_FROM_ADDRESS', env('APP_NAME')));
    }
}
