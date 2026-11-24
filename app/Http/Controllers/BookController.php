<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController
{
    public function index()
    {
        return view('books.index');
    }
}
