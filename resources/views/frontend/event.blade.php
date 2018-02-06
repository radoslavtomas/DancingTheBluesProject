@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-events">
            <h5 class="is-apple">{{ $event->title }}</h5>
        </header>

        <main class="dtb-event">
            <div class="center-align">
                <h6>{{ $event->start_date }} @if($event->end_date) - {{ $event->end_date }}@endif</h6>
                <p>Venue: <strong><em>{{ $event->venue }}</em></strong></p>
            </div>

            <div class="content">
                {!! $event->body !!}
            </div>

            {{--MAPS--}}
            <div class="video-container">
                {!! $event->map !!}
            </div>
        </main>
    </div>

@endsection

@section('meta')
    <title>{{ $event->title }} | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ $event->meta_description }}">
    <meta name="keywords" content="{{ $event->meta_keywords }}">
@stop