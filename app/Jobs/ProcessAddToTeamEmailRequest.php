<?php

namespace App\Jobs;

use App\Mail\AddToTeamRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;

/**
 * Jobs to send emails to "new members" for adding to a particular team
 * Class ProcessAddToTeamEmailRequest
 * @package App\Jobs
 */
class ProcessAddToTeamEmailRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $userEmail;
    public $user;

    /**
     * Create a new job instance.
     * ProcessAddToTeamEmailRequest constructor.
     * @param $userEmail
     * @param $user
     */
    public function __construct($userEmail,$user)
    {
        //
        $this->userEmail = $userEmail;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->userEmail)->queue(new AddToTeamRequest($this->user, $this->userEmail));
    }
}
