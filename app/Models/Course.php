<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function assignCredits($grade_one, $grade_two = 0)
    {
        if ($grade_two == 0) {
            if ($grade_one >= 5.5) {
                $this->passed_at = now();
            }
        } elseif ($grade_one >= 5.5 && $grade_two >= 5.5) {
            $average = ($grade_one + $grade_two)/2;

            if ($average >= 5.5) {
                $this->passed_at = now();
            }
        }

        $this->save();
    }

    public function grade()
    {
        return $this->hasMany(Grade::class);
    }
}
