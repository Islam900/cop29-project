<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

//    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    public function resetPassword(Request $request)
    {
        $emailExists = User::where('email_address', $request->email_address)->exists();
        if(!$emailExists){
            return response()->json([
                'status' => false,
                'icon' => 'error',
                'message' => 'User not found. Please check your email and try again...',
            ]);
        }

        Session::forget('otp_code');
        $otp_data['code'] = rand(1000, 9999);
        $otp_data['email'] = $request->email_address;
        Session::put('otp_data', $otp_data);

        Mail::to($request->email_address)->send(new OTPMail($otp_data));

        return response()->json([
            'status' => true,
            'icon' => 'success',
            'message' => 'OPT Code sent. Please check your email address',
            'redirect_to' => route('check-otp')
        ]);
    }

    public function check_otp()
    {
        return view('auth.passwords.confirm');
    }

    public function new_password(Request $request)
    {
        $real_otp_code = (int) $request->otp1.$request->otp2.$request->otp3.$request->otp4;
        if($real_otp_code == Session::get('otp_data')['code'])
        {
            return response()->json([
                'status' => true,
                'redirect_to' => route('set-new-password')
            ]);
        }
        else
        {
            return response()->json([
                'message' => "OTP Code is false, please check and retype again..",
                'status' => false,
                'icon' => 'error'
            ]);
        }
    }

    public function set_new_password()
    {
        return view('auth.passwords.new-password');
    }

    public function update_password(Request $request)
    {
        $email = Session::get('otp_data')['email'];
        $user = User::where('email_address', $email)->first();
        $user->password = Hash::make($request->password);
        if($user->save())
        {
            Session::forget('otp_data');
            return response()->json([
                'message' => "Password updated successfully",
                'status' => true,
                'icon' => 'success',
                'redirect_to' => route('login')
            ]);
        }
        else {
            return response()->json([
                'message' => "Error! Please try again later",
                'status' => false,
                'icon' => 'error',
            ]);
        }
    }

}
