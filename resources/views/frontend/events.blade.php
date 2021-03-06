@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-events">
            <h5 class="is-apple">Events</h5>
        </header>

        <main>
            @if(count($events) > 0)
                @foreach($events as $event)
                    <div class="event-list-item">
                        <a href="{{ route('event', $event->slug) }}"><h5>{{ $event->title }}</h5></a>
                        <h6>{{ $event->start_date }} @if($event->end_date) - {{ $event->end_date }}@endif</h6>
                        <p><em>{{ $event->venue }}</em></p>
                        <p>{{ $event->excerpt }}</p>
                        <a class="btn" href="{{ route('event', $event->slug) }}">more<i class="fa fa-hand-o-right m-l-10"></i></a>
                    </div>
                @endforeach
            @else
                <div class="center-align">
                    <p>There are no events yet, coming soon...</p>
                </div>
            @endif
        </main>

        <footer>
            {{ $events->links() }}
        </footer>
    </div>



@endsection

@section('meta')
    <title>Events | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="keywords" content="{{ setting('site.keywords') }}">
@stop