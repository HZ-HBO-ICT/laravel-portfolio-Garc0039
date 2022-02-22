@extends('layout')

@section('title')
    Faq Edit Page
@endsection

@section('content')
    <h2 class="underline">
        Update a FAQ of the FAQ Page!
    </h2>

    <form method="POST" action="/faq/{{$faq->id}}">
        @csrf
        @method('PUT')

        <label for="question">
            Question:
        </label> <br>
        <input type="text" name="question" class="inputText" value="{{$faq->question}}">
        @error('question')
        <p>
            {{$errors->first('question')}}
        </p>
        @enderror <br> <br>

        <label for="answer">
            Answer:
        </label> <br>
        <input type="text" name="answer" class="inputText" value="{{$faq->answer}}">
        @error('answer')
        <p>
            {{$errors->first('answer')}}
        </p>
        @enderror <br> <br>

        <input type="submit">
    </form>
    <br>
    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <br>
@endsection


