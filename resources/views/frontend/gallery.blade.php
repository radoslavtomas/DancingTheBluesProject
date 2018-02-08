@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-gallery">
            <h5 class="is-apple">gallery</h5>
        </header>

        <main>
            @foreach($albums as $album)
                <div class="gallery-list-item">
                    <a href="{{ route('album', $album->slug) }}"><h5>{{ $album->name }}</h5></a>
                    <p>{!! $album->description !!}</p>
                    <div class="dtb-cover-album" style="background: url('{{ Voyager::image($album->cover_image) }}') center center no-repeat;
                    background-size: cover;"></div>
                    <a class="btn" href="{{ route('album', $album->slug) }}">more<i class="fa fa-hand-o-right m-l-10"></i></a>
                </div>
            @endforeach
        </main>

        <footer>
            {{ $albums->links() }}
        </footer>

    </div>



@endsection

@section('styles')
    <style>
        .dtb-cover-album {
            height: 200px;
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('meta')
    <title>Gallery | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="keywords" content="{{ setting('site.keywords') }}">
@stop