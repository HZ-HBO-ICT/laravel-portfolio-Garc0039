@extends('layout')

@section('title')
    Grades Page
@endsection

@section('content')
    <h2>
        Grade from {{$grade->course_name}}
    </h2>
        <p>
            Course Name: {{$grade->course_name}} <br>
            Test Name: {{$grade->test_name}} <br>
            EC: {{$grade->EC}} <br>
            Lowest Passing Grade: {{$grade->lowest_passing_grade}} <br>
            Best Grade: {{$grade->best_grade}} <br>
            Passed at: {{$grade->passed_at}} <br>
        </p>
@endsection
