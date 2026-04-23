<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editControler extends Controller
{
    public function show ()
    {
        return view ('student.edit');
    }
}
