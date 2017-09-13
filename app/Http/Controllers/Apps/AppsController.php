<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppsController extends Controller
{
    public function index()
    {
        // $institution = Auth::user()->institution()->with('applications')->get();
        // return view('apps.index', compact('institution'));
    }
}
