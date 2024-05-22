<?php

namespace App\Http\Controllers;

use App\Models\Dsngs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DsngsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dsngs = Auth::user()->dsngs;
        return view('appeals.dsngs.index', compact('dsngs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appeals.dsngs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['customs_clearance'] = isset($data['customs_clearance']) && $data['customs_clearance'] == "on" ? "Yes" : "No";
        if($request->hasFile('data_sheet'))
        {
            $file = $request->file('data_sheet');
            $destinationPath = public_path('assets/files/dsngs');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);
            $data['data_sheet'] = $fileName;
        }
        $save = Dsngs::create($data);

        if($save) {
            return redirect()->route('user.dsngs.index')->with('success', 'Data inserted successfully');
        } else {
            return redirect()->route('user.dsngs.index')->with('error', 'Error! Please try again later or contact our support team');
        }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
