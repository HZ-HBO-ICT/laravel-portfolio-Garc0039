@extends('layout')

@section('title')
    Blog Page
@endsection

@section('content')
    @foreach($blogs as $blog)
    <section>

        <article>

            <p>

                {{$blog->date}}

            </p>

            <h2 class="underline">

                {{$blog->title}}

            </h2>

            @if($blog->sub_title)
                <h3 id="blog-h3">

                    {{$blog->sub_title}}

                </h3>
            @endif

            <p>

                <span class="underline"> {{$blog->question}} </span>

                <br>
                <br>

                {{$blog->excerpt}}

                <a href="/blog/{{$blog->title_uri}}"> read more </a>

            </p>

        </article>

    </section>
    @endforeach
@endsection
