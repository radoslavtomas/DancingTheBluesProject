@extends('layouts.app')

@section('content')

    <div class="dtb-home center-align">
        <div class="dtb-home-landing">
            <h2 class="is-apple text-blue-grey text-lighten-5">{{ setting('site.title') }}</h2>
            <p>{{ setting('home.motto') }}</p>
            <div class="home-cta m-b-30">
                <a class="btn" href="{{ setting('home.button1link') }}">{{ setting('home.button1text') }}</a>
                <a class="btn" href="{{ setting('home.button2link') }}">{{ setting('home.button2text') }}</a>
                <a class="btn" href="{{ setting('home.button3link') }}">{{ setting('home.button3text') }}</a>
            </div>
        </div>
    </div>

@endsection

@section('meta')
    <title>Home | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="keywords" content="{{ setting('site.keywords') }}">
@stop