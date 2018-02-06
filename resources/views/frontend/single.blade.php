@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-single">
            <h5 class="is-apple">{{ $page->title }}</h5>
        </header>

        <main class="content">
            {!! $page->body !!}
        </main>
    </div>

@endsection

@section('meta')
    <title>{{ $page->title }} | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ $page->meta_description }}">
    <meta name="keywords" content="{{ $page->meta_keywords }}">
@stop