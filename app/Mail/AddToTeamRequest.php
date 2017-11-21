<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;

class AddToTeamRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $u;

    public $receiver;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    /**
     * AddToTeamRequest constructor.
     * @param User $user
     * @param $to
     */
    public function __construct(User $user, $to)
    {
        $this->u = $user;//

        $this->receiver = $to;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('example@example.com')
            ->view('emails.add_request')
            ->with([
                'senderName' => $this->u->name,
                'senderEmail' => $this->u->email,
                'receiver' => $this->to,
            ]);
    }
}
