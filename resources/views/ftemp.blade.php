@extends('layout')

@section('title')
    FAQ Page
@endsection

@section('content')
@foreach ($faqs as $faq)
{{--    The strip_tags can be found under: https://stackoverflow.com/questions/5732758/detect-html-tags-in-a-string--}}
{{--    I have not come up with it myself--}}
    <p class="{{$faq == $faqs[0] ? '' : 'faq-top-border'}}">
        <span class="post-p-header">
            <?= strip_tags($faq->question); ?>
        </span>
        <br>
        <br>

        <span class="bold"> A </span>:
             <?= strip_tags($faq->answer); ?>
        <br>
    </p>
{{--    @endif--}}
 @endforeach
@endsection
