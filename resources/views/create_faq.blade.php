@extends('layout')

@section('title')
    FAQ Create Page
@endsection

@section('content')
    <h2 class="underline">
        Add a new Question to the FAQ Page!
    </h2>

    <form method="POST" action="/faq">
        @csrf
        <label for="question">
            Question:
        </label> <br>
        <input type="text" name="question"> <br> <br>
        <label for="answer">
            Answer:
        </label> <br>
        <input type="text" name="answer"> <br> <br>
        <input type="submit">
    </form>
    <br>
@endsection
