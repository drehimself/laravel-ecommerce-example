<?php

namespace App\Mail;

use App\User;
use App\Coupon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CouponMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $couponCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $couponCode)
    {
        $this->user = $user;
        $this->couponCode = $couponCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.coupon');
    }
}
