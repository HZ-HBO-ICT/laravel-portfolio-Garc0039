@extends('layout')

@section('title')
    Blog Page
@endsection

@section('content')
    @if(!$titleUri)
        <?= $blogs[0]->body ?>
    @else
        <?= $titleUri->body ?>
    @endif
@endsection
