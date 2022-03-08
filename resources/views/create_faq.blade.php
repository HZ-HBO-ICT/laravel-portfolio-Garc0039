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
        <textarea type="text" name="question" class="inputText">
            {{ old('question') }}
        </textarea>
        @error('question')
        <p>
            {{ $errors->first('question') }}
        </p>
        @enderror <br> <br>

        <label for="answer">
            Answer:
        </label> <br>
        <textarea type="text" name="answer" class="inputText">
            {{ old('answer') }}
        </textarea>
        @error('answer')
        <p>
            {{ $errors->first('answer') }}
        </p>
        @enderror <br> <br>
        <input type="submit">
    </form>
    <br>
@endsection
