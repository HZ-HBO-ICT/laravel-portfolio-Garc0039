@extends('layout')

@section('title')
    Blog Page
@endsection

@section('content')
    @if(!$required_blog)
        <?= $blogs[0]->body ?>
    @else
        <?= $required_blog->body ?>
    @endif

{{--    @for($i = 0 ; $i <= count($blogs); $i++)--}}
{{--        @if($blogs[$i]->title_uri == $required_blog->title_uri)--}}
{{--            <?= $blogs[$i]->body ?>--}}
{{--        @endif--}}
{{--    @endfor--}}
@endsection
