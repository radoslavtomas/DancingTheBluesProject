@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-blog" style="background-image: url('{{ Voyager::image($post->image) }}'); background-position: center; background-size: cover; height: 250px;">
            <h5 class="is-apple" style="background-color: rgba(0,0,0,.5); border-radius: 5px; border-top: none">{{ $post->title }}</h5>
        </header>

        <main class="dtb-blog">
            <div class="center-align">
                <h6>{{ $post->created_at }}</h6>
                <p>by <strong><em>{{ $post->author['name'] }}</em></strong></p>
            </div>

            <div class="content">
                {!! $post->body !!}
            </div>
        </main>
    </div>

@endsection

@section('meta')
    <title>{{ $post->title }} | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ $post->meta_description }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
@stop