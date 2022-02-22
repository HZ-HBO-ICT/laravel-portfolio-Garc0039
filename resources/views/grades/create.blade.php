@extends('layout')

@section('title')
    Grades Create Page
@endsection

@section('content')
    <h2>
        Add a new Grade!
    </h2>

    <form method="POST" action="/grades">
        @csrf
        <label for="course_name">
            Course Name:
        </label> <br>
        <input type="text" name="course_name" value="{{old('course_name')}}">
        @error('course_name')
        <p>
            {{$errors->first('course_name')}}
        </p>
        @enderror <br> <br>

        <label for="test_name">
            Test Name:
        </label> <br>
        <input type="text" name="test_name" value="{{old('test_name')}}">
        @error('test_name')
        <p>
            {{$errors->first('test_name')}}
        </p>
        @enderror <br> <br>

        <label for="EC">
            EC:
        </label> <br>
        <input type="text" name="EC" value="{{old('EC')}}">
        @error('EC')
        <p>
            {{'The EC field is required'}}
        </p>
        @enderror <br> <br>

        <label for="lowest_passing_grade">
            Lowest Passing Grade:
        </label> <br>
        <input type="text" name="lowest_passing_grade" value="{{old('lowest_passing_grade')}}">
        @error('lowest_passing_grade')
        <p>
            {{$errors->first('lowest_passing_grade')}}
        </p>
        @enderror <br> <br>

        <label for="best_grade">
            Best Grade:
        </label> <br>
        <input type="text" name="best_grade" value="{{old('best_grade')}}">
        @error('best_grade')
        <p>
            {{$errors->first('best_grade')}}
        </p>
        @enderror <br> <br>

        <label for="passed_at">
            Passed at:
        </label> <br>
        <input type="text" name="passed_at" value="{{old('passed_at')}}">
        @error('passed_at')
        <p>
            {{$errors->first('passed_at')}}
        </p>
        @enderror <br> <br>

        <input type="submit">
    </form>
    <br>
@endsection
