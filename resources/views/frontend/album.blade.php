@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-gallery">
            <h5 class="is-apple">{{ $album->name }}</h5>
        </header>

        @if($images === null && count($videos) === 0)
            <div style="padding: 100px 0; text-align: center;">There are no pictures or videos yet...</div>
        @else

            <div class="dtb-gallery-description m-t-30">
                {!! $album->description !!}
            </div>

            @if($images !== null)

                <h4 class="centre-align dtb-album-title">Pictures</h4>

                <div class="dtb-single-album">

                    @foreach($images as $image)
                        <figure class="dtb-album-img">
                            <div class="card grey lighten-3">
                                <div class="card">
                                    <div class="card-content">
                                        <a href="{{ Voyager::image($image) }}" data-lightbox="gallery">
                                            <img src="{{ Voyager::image($image) }}" alt="{{ $album->description }}" />
                                            {{--<figcaption>{{ $album->description }}</figcaption>--}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    @endforeach

                </div>

            @endif

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
        @endif
    </div>

@endsection

@section('styles')
    <link href="{{ asset('js/lightbox2/dist/css/lightbox.min.css') }}" rel="stylesheet">
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