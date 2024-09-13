<?php

namespace App\Listeners;

use App\Events\SendOTP;
use App\Mail\OTPMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOTPCode
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendOTP $event): void
    {
       $user = $event->user;
        Mail::to($user->email)->send(new OTPMail($user->OTP));
    }
}
