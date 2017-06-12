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
        flash('Info');
        flash('Succes')->success();
        flash('Eroare')->error();
        flash('Danger')->warning();
        flash('Important')->important();
        return view('apps.index', ['institution' => $institution]);
    }
}
