<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class RoutineController extends Controller
{
    //
    public function index() : View
    {
        return view('dashboard');
    }
}
