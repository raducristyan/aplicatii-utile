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
        $institution = Auth::user()->institution()->with('applications')->get();
        flash('You are now a Laracasts ember!');
        return view('apps.index', ['institution' => $institution]);
    }
}
