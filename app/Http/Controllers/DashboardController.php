<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController {
    public function index() {
        $grades = Grade::all();

        $Ecs = 0;

        foreach ($grades as $grade) {
            $Ecs += $grade->EC;
        }

        return view('dashboard', [
            'grades' => $grades,
            'Ecs' => $Ecs
        ]);
    }
}
