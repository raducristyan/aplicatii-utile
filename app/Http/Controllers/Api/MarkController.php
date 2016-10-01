<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Mark;
use App\Http\Requests\MarkRequest;
use App\Http\Controllers\Controller;

class MarkController extends Controller
{
    protected $user;

    public function __construct (User $user)
    {
        $this->user = Auth::user();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Api\MarkRequest  $request
     * @return array
     */
    public function store(MarkRequest $request)
    {
        $mark = new Mark([
            'mark' => $request->input('mark'),
        ]);

        $this->user->marks()->save($mark);

        return redirect(route('myapps.rc.create'))->withSuccess("Marca ".$mark->mark." a fost adăugată cu succes!");

    }
}
