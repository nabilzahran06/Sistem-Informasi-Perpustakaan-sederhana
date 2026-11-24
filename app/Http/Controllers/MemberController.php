<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController
{
    public function index()
    {
        return view('members.index');
    }
}
