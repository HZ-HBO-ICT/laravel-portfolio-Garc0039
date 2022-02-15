@extends('layout')

@section('title')
    FAQ Page
@endsection

@section('content')
@foreach ($faqs as $faq)
     <?= $faq->question; ?>
     <?= $faq->answer; ?>
 @endforeach
@endsection
