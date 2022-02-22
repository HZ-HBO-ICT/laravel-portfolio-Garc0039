@extends('layout')

@section('title')
    FAQ Create Page
@endsection

@section('content')
    <h2 class="underline">
        Add a new Blog to the Blog Page!
    </h2>

    <form method="POST" action="/blog">
        @csrf
        <label for="title_uri">
            Title Uri:
        </label> <br>
        <input type="text" name="title_uri" value="{{old('title_uri')}}">
        @error('title_uri')
        <p>
            {{$errors->first('title_uri')}}
        </p>
        @enderror <br> <br>

        <label for="date">
            Date:
        </label> <br>
        <input type="text" name="date" value="{{old('date')}}">
        @error('date')
        <p>
            {{$errors->first('date')}}
        </p>
        @enderror <br> <br>

        <label for="title">
            Title:
        </label> <br>
        <input type="text" name="title" value="{{old('title')}}">
        @error('title')
        <p>
            {{$errors->first('title')}}
        </p>
        @enderror <br> <br>

        <label for="sub_title">
            Sub Title:
        </label> <br>
        <input type="text" name="sub_title" value="{{old('sub_title')}}"> <br> <br>

        <label for="question">
            Question:
        </label> <br>
        <input type="text" name="question" value="{{old('question')}}">
        @error('question')
        <p>
            {{$errors->first('question')}}
        </p>
        @enderror <br> <br>

        <label for="excerpt">
            Excerpt:
        </label> <br>
        <input type="text" name="excerpt" value="{{old('excerpt')}}">
        @error('excerpt')
        <p>
            {{$errors->first('excerpt')}}
        </p>
        @enderror <br> <br>

        <label for="body">
            Body:
        </label> <br>
        <input type="text" name="body" value="{{old('body')}}">
        @error('body')
        <p>
            {{$errors->first('body')}}
        </p>
        @enderror <br> <br>

        <input type="submit">
    </form>
    <br>
@endsection
