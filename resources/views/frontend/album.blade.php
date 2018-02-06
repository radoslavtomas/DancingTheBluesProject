@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-gallery">
            <h5 class="is-apple">{{ $album->name }}</h5>
        </header>

        <div class="dtb-gallery-description m-t-30">
            {!! $album->description !!}
        </div>

        <h4 class="centre-align dtb-album-title">Pictures</h4>

        <div class="dtb-single-album">

            @foreach($pictures as $picture)
                <figure class="dtb-album-img">
                    <div class="card grey lighten-3">
                        <div class="card">
                            <div class="card-content">
                                <a href="{{ Voyager::image($picture->image) }}" data-lightbox="gallery" data-title="{{ $picture->description }}">
                                    <img src="{{ Voyager::image($picture->image) }}" alt="{{ $picture->description }}" />
                                    <figcaption>{{ $picture->description }}</figcaption>
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
            @endforeach

        </div>

        @if(!count($videos) == 0)
            <h4 class="centre-align dtb-album-title">Videos</h4>

            <div class="dtb-album-video">

                @foreach($videos as $video)
                    <div class="row">
                        <div class="col s12">
                            <div class="card grey lighten-3">
                                <div class="card-content">
                                    <div class="video-container">
                                        {!! $video->embed !!}
                                    </div>
                                </div>

                                <div class="card-action left-align">
                                    {!! $video->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

@endsection

@section('styles')
    <link href="{{ asset('js/lightbox2/dist/css/lightbox.min.css') }}" rel="stylesheet">
    <style>

    </style>
@endsection

@section('scripts')
    <script src="{{ asset('js/lightbox2/dist/js/lightbox.js') }}"></script>
    <!--AddThis widget-->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a79ccfc1ecbefbd"></script>
@stop

@section('meta')
    <title>{{ $album->name }} | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ $album->description }}">
@stop