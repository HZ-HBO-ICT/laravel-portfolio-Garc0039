@extends('layout')

@section('title')
    Grades Edit Page
@endsection

@section('content')
    <h2>
        Edit a Grade!
    </h2>

    <form method="POST" action="/grades/{{$grade->id}}">
        @csrf
        @method('PUT')
        <label for="course_name">
            Course Name:
        </label> <br>
        <input type="text" name="course_name" value="{{$grade->course_name}}">
        @error('course_name')
        <p>
            {{$errors->first('course_name')}}
        </p>
        @enderror <br> <br>

        <label for="test_name">
            Test Name:
        </label> <br>
        <input type="text" name="test_name" value="{{$grade->test_name}}">
        @error('test_name')
        <p>
            {{$errors->first('test_name')}}
        </p>
        @enderror <br> <br>

        <label for="EC">
            EC:
        </label> <br>
        <input type="text" name="EC" value="{{$grade->EC}}">
        @error('EC')
        <p>
            {{'The EC field is required'}}
        </p>
        @enderror <br> <br>

        <label for="lowest_passing_grade">
            Lowest Passing Grade:
        </label> <br>
        <input type="text" name="lowest_passing_grade" value="{{$grade->lowest_passing_grade}}">
        @error('lowest_passing_grade')
        <p>
            {{$errors->first('lowest_passing_grade')}}
        </p>
        @enderror <br> <br>

        <label for="best_grade">
            Best Grade:
        </label> <br>
        <input type="text" name="best_grade" value="{{$grade->best_grade}}">
        @error('best_grade')
        <p>
            {{$errors->first('best_grade')}}
        </p>
        @enderror <br> <br>

        <label for="passed_at">
            Passed at:
        </label> <br>
        <input type="text" name="passed_at" value="{{$grade->passed_at}}">
        @error('passed_at')
        <p>
            {{$errors->first('passed_at')}}
        </p>
        @enderror <br> <br>

        <input type="submit">
        </form>
        <br>
        <form method="POST" action="/grades/{{ $grade->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    <br>
@endsection
