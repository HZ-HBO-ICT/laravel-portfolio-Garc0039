<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;

class DashboardController
{
    public function index()
    {
        return view('dashboard', ['courses' => Course::all()]);
    }
}
