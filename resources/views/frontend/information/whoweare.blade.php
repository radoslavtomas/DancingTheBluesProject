@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-single">
            <h5 class="is-apple">Who we are</h5>
        </header>

        <main class="dtb-whoweare">

            @foreach($users as $user)
                <div class="row dtb-test">
                <div class="col s12">
                    <h4 class="dtb-teammember-name">{{ $user->name }}</h4>
                    <div class="card">
                        <div class="card-content dtb-card-content">
                            <div class="dtb-card-header">
                                <div class="dtb-avatar" style="background: url({{ Voyager::image($user->avatar) }}) center center; background-size: cover;"></div>
                            </div>

                            <div class="dtb-card-text">
                                {!! $user->about !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </main>
    </div>

@endsection

@section('styles')

@endsection

@section('meta')
    <title>Who we are | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="keywords" content="@foreach($users as $user){{ $user->name }},@endforeach">
@stop

