@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>

    <h1>Blog Posts</h1>

    @if ($posts->isEmpty())
        <p>No blog posts available.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>
                </li>
            @endforeach
        </ul>
    @endif

<h1>Faqs</h1>

@if ($faqData->isEmpty())
        <p>No faq posts available.</p>
    @else
        <ul>
            @foreach ($faqData as $faq)
                <li>
                    <h2>{{ $faq->question }}</h2>
                    <p>{{ $faq->answer }}</p>
                </li>
            @endforeach
        </ul>
    @endif


@endsection
