@extends('layout')

@section('title')
    Grades Page
@endsection

@section('content')
    <h2>
        All Grades
    </h2>

    @foreach($grades as $grade)
        <p>
            Course Name: {{$grade->course->name}} <br>
            Test Name: {{$grade->test_name}} <br>
            EC: {{$grade->EC}} <br>
            Lowest Passing Grade: {{$grade->lowest_passing_grade}} <br>
            Best Grade: {{$grade->best_grade}} <br>
        </p>
        <form method="POST" action="/grades/{{$grade->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <br>
        <button>
            <a href="/grades/{{$grade->id}}/edit">Edit</a>
        </button>
    @endforeach
@endsection

