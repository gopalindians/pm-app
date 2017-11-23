<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth, Crypt;

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
        return $this->from($this->u->email)
            ->view('emails.add_request')
            ->with([
                'senderName' => $this->u->name,
                'senderNameEncrypted' => Crypt::encryptString($this->u->name),
                'senderEmail' => $this->u->email,
                'senderEmailEncrypted' => Crypt::encryptString($this->u->email),
                'receiver' => $this->receiver,
                'receiverEncrypted' => Crypt::encryptString($this->receiver)
            ]);
    }
}
