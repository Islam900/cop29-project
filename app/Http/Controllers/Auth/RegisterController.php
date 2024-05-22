<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $prefixes = config('data.phonePrefixes');
        $represents = config('data.represents');
        return view('auth.register',compact('prefixes', 'represents'));
    }

    public function register(Request $request)
    {
        $emailExists = User::where('email_address', $request->email)->exists();
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        if ($data['represent'] == "Other") {
            $data['represent'] = $data['represent_specify'];
        }
        $data['type'] = 'user';
        if (!$emailExists) {
            $user = User::create($data);

            return response()->json([
                'message' => 'Registration completed successfully',
                'icon' => 'success',
                'redirect_to' => route('login'),
                'status' => true
            ]);
        } else {
            return response()->json([
                'message' => 'This email is already in use',
                'icon' => 'error',
                'status' => false
            ]);
        }

    }

}
