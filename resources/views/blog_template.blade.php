@extends('layout')

@section('title')
    Blog Page
@endsection

@section('content')
    @if(!$required_blog)
        {!! $blogs[0]->body !!}
    @else
        {!! $required_blog->body !!}
    @endif
@endsection
