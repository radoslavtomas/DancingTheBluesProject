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
                                <img src="{{ Voyager::image($user->avatar) }}" alt="Profile picture of {{ $user->name }}">
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
    <style>
        .dtb-card-content {
            display: flex;
        }

        .dtb-card-header {
            width: 35%;
        }

        .dtb-card-text {
            width: 65%;
            padding-left: 24px;
        }

        .dtb-card-header img {
            border-radius: 50%;
            max-width: 100%;
            margin: 0 auto;
        }

        .dtb-test:nth-child(even) .dtb-card-text {
            order: 1;
            padding-left: 0;
            padding-right: 24px;
        }
        .dtb-test:nth-child(even) .dtb-card-header {
            order: 2;
        }

        .dtb-test:nth-child(even) h4 {
            text-align: right;
        }



        @media (max-width: 450px) {
            .dtb-card-header {
                width: 100%;
            }
        }


        @media (max-width: 600px) {
            .dtb-card-content {
                flex-direction: column;
            }

            .dtb-teammember-name {
                text-align: center;
            }

            .dtb-card-header {
                width: 70%;
                margin: 0 auto 20px auto;
                text-align: center;
            }

            .dtb-card-text {
                width: 100%;
                padding: 0;
            }

            .dtb-test:nth-child(even) .dtb-card-text {
                order: 2;
                padding-left: 0;
                padding-right: 0;
            }
            .dtb-test:nth-child(even) .dtb-card-header {
                order: 1;
            }

            .dtb-test:nth-child(even) h4 {
                text-align: center;
            }
        }
    </style>
@endsection

@section('meta')
    <title>Who we are | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="keywords" content="@foreach($users as $user){{ $user->name }},@endforeach">
@stop

