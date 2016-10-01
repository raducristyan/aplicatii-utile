<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppsController extends Controller
{
    public function index()
    {
        $apps = config('apps');
        return view('apps.allApps', compact('apps'));
    }
}
