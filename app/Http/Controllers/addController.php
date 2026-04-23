<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addController extends Controller
{
    public function show ()
    {
        return view ('student.add');
    }
}