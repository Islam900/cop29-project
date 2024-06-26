<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OTPMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($otp_data)
    {
        $this->otp_data = $otp_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.otp')
            ->subject('Your OTP Code')
            ->with([
                'otp_data' => $this->otp_data,
            ]);
    }
}
