@extends('layout')

@section('title')
    FAQ Page
@endsection

@section('content')
@foreach ($faqs as $faq)
    <p class="{{$faq == $faqs[0] ? '' : 'faq-top-border'}}">
        <span class="post-p-header">
            {!! $faq->question !!}
        </span>
        <br>
        <br>

        <span class="bold"> A </span>:
            {!! $faq->answer !!}
        <br>
    </p>
@endforeach
@endsection
