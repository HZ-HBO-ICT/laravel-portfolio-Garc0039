<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController
{
    public function index()
    {
//        $grades = Grade::all();
//
//        $ecs = 0;
//
//        foreach ($grades as $grade) {
//            $ecs += $grade->EC;
//        }

        return view('dashboard', [
//            'grades' => $grades,
//            'ecs' => $ecs
        ]);
    }
}
