@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-blog">
            <h5 class="is-apple">Blog</h5>
        </header>

        <main>
            @foreach($posts as $post)
                <div class="blog-list-item">
                    <h5><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h5>
                    <h6>{{ $post->created_at }}</h6>
                    <p>by <em>{{ $post->author['name'] }}</em></p>
                    <p>{{ $post->excerpt }}</p>
                    <a class="btn" href="{{ route('post', $post->slug) }}">read more</a>
                </div>
            @endforeach
        </main>
    </div>
@endsection

@section('meta')
    <title>Blog | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="keywords" content="{{ setting('site.keywords') }}">
@stop