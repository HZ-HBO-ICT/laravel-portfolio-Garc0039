@extends('layout')

@section('title')
    Blog Edit Page
@endsection

@section('content')
    <h2 class="underline">
        Update a Blog of the Blog Page!
    </h2>

    <form method="POST" action="/blog/{{$blog->title_uri}}">
        @csrf
        @method('PUT')
        <label for="title_uri">
            Title Uri:
        </label> <br>
        <input type="text" name="title_uri" class="inputText" value="{{$blog->title_uri}}">
        @error('title_uri')
        <p>
            {{$errors->first('title_uri')}}
        </p>
        @enderror <br> <br>

        <label for="date">
            Date:
        </label> <br>
        <input type="text" name="date" class="inputText" value="{{$blog->date}}">
        @error('date')
        <p>
            {{$errors->first('date')}}
        </p>
        @enderror <br> <br>

        <label for="title">
            Title:
        </label> <br>
        <input type="text" name="title" class="inputText" value="{{$blog->title}}">
        @error('title')
        <p>
            {{$errors->first('title')}}
        </p>
        @enderror <br> <br>

        <label for="sub_title">
            Sub Title:
        </label> <br>
        <input type="text" name="sub_title" class="inputText" value="{{$blog->sub_title}}"> <br> <br>

        <label for="question">
            Question:
        </label> <br>
        <input type="text" name="question" class="inputText" value="{{$blog->question}}">
        @error('question')
        <p>
            {{$errors->first('question')}}
        </p>
        @enderror <br> <br>

        <label for="excerpt">
            Excerpt:
        </label> <br>
        <input type="text" name="excerpt" class="inputText" value="{{$blog->excerpt}}">
        @error('excerpt')
        <p>
            {{$errors->first('excerpt')}}
        </p>
        @enderror <br> <br>

        <label for="body">
            Body:
        </label> <br>
        <input type="text" name="body" class="inputText" value="{{$blog->body}}">
        @error('body')
        <p>
            {{$errors->first('body')}}
        </p>
        @enderror <br> <br>
        <input type="submit">
    </form>
    <br>
    <form method="POST" action="/blog/{{ $blog->title_uri }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <br>
@endsection

