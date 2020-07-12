<?php

namespace App\Http\Controllers\Apps;

use App\Application;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppsController extends Controller
{
    public function index()
    {
        $apps = Application::all();
        return view('apps.index', compact('apps'));
    }
}
