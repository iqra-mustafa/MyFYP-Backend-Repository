<?php

namespace App\Mail;

use App\Models\StationaryRequest;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StationaryEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public function __construct(StationaryRequest $user)
    {
        $this->user = $user;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $subject = "New Stationary Request";
            return $this->from('non-reply@foodhutti.com')
                    ->subject($subject)
                    ->view('mail.stationary');

                    $this->withSwiftMessage(function ($message) {
                        $message->getHeaders()
                                ->addTextHeader('Content-Type', 'text/html; charset=iso-8859-1');
                    });
    }
}
