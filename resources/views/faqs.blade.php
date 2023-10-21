@extends('blog::layouts.master')

@section('content')


@if ($faqs->isEmpty())
        <p>No faq posts available.</p>
    @else
        <ul>
            @foreach ($faqs as $faq)
                <li>
                    <h2>{{ $faq->question }}</h2>
                    <p>{{ $faq->answer }}</p>
                </li>
            @endforeach
        </ul>
    @endif


    <h1>Blog Posts</h1>

    @if ($blogPosts->isEmpty())
        <p>No blog posts available.</p>
    @else
        <ul>
            @foreach ($blogPosts as $post)
                <li>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>
                </li>
            @endforeach
        </ul>
    @endif


@endsection
