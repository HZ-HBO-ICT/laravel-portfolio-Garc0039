<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function addResult($newResult)
    {
        if ($newResult <= $this->best_grade) {
            $this->save();
        } else {
            $this->best_grade = $newResult;
            $this->save();
        }

        if ($this->best_grade >= $this->lowest_passing_grade) {
            $this->passed_at = now();
            $this->save();
        }

        Course::assignCredits();
    }
}
