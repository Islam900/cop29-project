<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
        $emailExists = User::where('email', $request->email)->exists();
        if(!$emailExists){
            return response()->json([
                'status' => false,
                'icon' => 'error',
                'message' => 'User not found. Please check your email and try again...',
            ]);
        }
        return response()->json([
            'status' => true,
            'icon' => 'success',
            'message' => 'New password sent. Please check your email address',
            'redirect_to' => route('login')
        ]);
    }

}
