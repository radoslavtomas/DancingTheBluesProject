@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-contact">
            <h5 class="is-apple">{{ $page->title }}</h5>
        </header>

        <main class="dtb-contact">
            <p class="center-align m-b-20">Please, leave us a message. We will be in touch as soon as possible</p>

            @if ($errors->any())
                <div class="row">
                    <div class="col s12 red darken-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="dtb-contact-form">
                <div class="row">
                    <form class="col s12" action="{{ route('postContact') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="name" name="name" type="text" class="validate" required>
                                <label for="name">Your name</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="email" name="email" type="email" class="validate" required>
                                <label for="email">Your email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="message" name="message" class="materialize-textarea validate" required></textarea>
                                <label for="message">Your message</label>
                            </div>
                        </div>

                        <div class="submit">
                            <button class="btn waves-effect waves-light" type="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="contact-info center-align m-t-50">

                {!! $page->body !!}

                <div class="row m-t-40">
                    <div class="col s6 offset-s3">
                        <div class="row">
                            @if(setting('social.facebook') !== null)
                            <a href="{{ setting('social.facebook') }}"><i class="fa fa-facebook"></i></a>
                            @endif
                            @if(setting('social.twitter') !== null)
                            <a class="m-l-10" href="{{ setting('social.twitter') }}"><i class="fa fa-twitter"></i></a>
                            @endif
                            @if(setting('social.instagram') !== null)
                            <a class="m-l-10" href="{{ setting('social.instagram') }}"><i class="fa fa-instagram"></i></a>
                            @endif
                        </div>
                    </div>
                </div>

                {{--MAP--}}
                <div class="video-container">
                    {!! setting('site.contact_map') !!}
                </div>

            </div>
        </main>
    </div>

@endsection

@section('meta')
    <title>{{ $page->title }} | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ $page->meta_description }}">
    <meta name="keywords" content="{{ $page->meta_keywords }}">
@stop