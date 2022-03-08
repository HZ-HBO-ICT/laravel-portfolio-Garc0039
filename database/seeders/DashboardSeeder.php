<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'course_name' => 'Program and Career Orientation',
            'test_name' => 'Assessment',
            'best_grade' => 8,4,
            'passed_at' => Carbon::create('2021', '10', '15')
        ]);
        DB::table('grades')->insert([
            'course_name' => 'Computer Science Basics',
            'test_name' => 'Written Exam',
            'best_grade' => 8,6,
            'passed_at' => Carbon::create('2021', '11', '08')
        ]);
        DB::table('grades')->insert([
            'course_name' => 'Programming Basics',
            'test_name' => 'Case Study',
            'best_grade' => 10,
            'passed_at' => Carbon::create('2021', '11', '19')
        ]);
        DB::table('grades')->insert([
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Case Study',
            'best_grade' => 10,
            'passed_at' => Carbon::create('2021', '12', '22')
        ]);
        DB::table('grades')->insert([
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Project',
            'best_grade' => 8,8,
            'passed_at' => Carbon::create('2022', '01', '27')
        ]);
    }
}
