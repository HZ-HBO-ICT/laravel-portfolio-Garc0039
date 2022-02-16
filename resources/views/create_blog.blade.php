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
        <input type="text" name="title_uri"> <br> <br>
        <label for="date">
            Date:
        </label> <br>
        <input type="text" name="date"> <br> <br>
        <label for="title">
            Title:
        </label> <br>
        <input type="text" name="title"> <br> <br>
        <label for="sub_title">
            Sub Title:
        </label> <br>
        <input type="text" name="sub_title"> <br> <br>
        <label for="question">
            Question:
        </label> <br>
        <input type="text" name="question"> <br> <br>
        <label for="excerpt">
            Excerpt:
        </label> <br>
        <input type="text" name="excerpt"> <br> <br>
        <label for="body">
            Body:
        </label> <br>
        <input type="text" name="body"> <br> <br>
        <input type="submit">
    </form>
    <br>
@endsection
