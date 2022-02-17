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
        <input type="text" name="title_uri" value="{{$blog->title_uri}}" class="inputText"> <br> <br>

        <label for="date">
            Date:
        </label> <br>
        <input type="text" name="date" value="{{$blog->date}}" class="inputText"> <br> <br>

        <label for="title">
            Title:
        </label> <br>
        <input type="text" name="title" value="{{$blog->title}}" class="inputText"> <br> <br>

        <label for="sub_title">
            Sub Title:
        </label> <br>
        <input type="text" name="sub_title" value="{{$blog->sub_title}}" class="inputText"> <br> <br>

        <label for="question">
            Question:
        </label> <br>
        <input type="text" name="question" value="{{$blog->question}}" class="inputText"> <br> <br>

        <label for="excerpt">
            Excerpt:
        </label> <br>
        <input type="text" name="excerpt" value="{{$blog->excerpt}}" class="inputText"> <br> <br>

        <label for="body">
            Body:
        </label> <br>
        <input type="text" name="body" value="{{$blog->body}}" class="inputText"> <br> <br>
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

