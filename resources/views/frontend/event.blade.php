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

            <div class="comments">
                <div id="disqus_thread"></div>
                <script>

                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    var disqus_config = function () {
                        this.page.url = "{{ route('event', $event->slug) }}";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = "event_{{ $event->slug }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };

                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://dancing-the-blues.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>
        </main>
    </div>

@endsection

@section('meta')
    <title>{{ $event->title }} | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ $event->meta_description }}">
    <meta name="keywords" content="{{ $event->meta_keywords }}">
@stop