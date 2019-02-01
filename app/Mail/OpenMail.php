<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;

use Config;

class OpenMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $subject = "口座開設の利用申請を承りました。";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
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
        return $this
            ->from(Config::get('mail.from.address'))
            ->subject($this->subject)
            ->text('mail.accountopen')
            ->with([
                'user' => $this->user,
            ]);
    }
}
