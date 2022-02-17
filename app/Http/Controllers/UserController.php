<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $fullname;

    public function fullName(Request $request)
    {
        $this->fullname = $request->first_name.' '.$request->last_name;
        return view('demo',['result' => $this->fullname]);
    }
}
