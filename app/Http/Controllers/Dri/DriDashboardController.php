<?php

namespace App\Http\Controllers\Dri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriDashboardController extends Controller
{
    public function index()
    {
        return view('dri.dashboard');
    }
}
