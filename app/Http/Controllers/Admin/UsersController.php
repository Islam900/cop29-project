<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = User::where('type', 'user')->get();
        return view('admin.registrations.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($request->registration_id);
        if($user)
        {
            $user->confirmed_status = $request->confirmed_status;
            if($user->save())
            {
                $message_content = $request->confirmed_status == 1 ? 'User confirmed successfully' : 'User request rejected successfully';

                return response()->json([
                    'status' => true,
                    'message' => $message_content,
                ]);
            }
            else
            {
                $message_content = 'Error while processing your request, please try again later';
                return response()->json([
                    'status' => true,
                    'message' => $message_content,
                ]);
            }
        }
        else
        {
            $message_content = 'User not found!';
            return response()->json([
                'status' => false,
                'message' => $message_content,
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
