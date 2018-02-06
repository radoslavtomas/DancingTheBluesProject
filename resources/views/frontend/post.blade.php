@extends('layouts.app')

@section('content')

    <div class="container dtb-single center-align">
        <header class="dtb-header-blog" style="background-image: url('{{ Voyager::image($post->image) }}'); background-position: center; background-size: cover; height: 250px;">
            <h5 class="is-apple" style="background-color: rgba(0,0,0,.5); border-radius: 5px; border-top: none">{{ $post->title }}</h5>
        </header>

        <main class="dtb-blog">
            <div class="center-align">
                <h6>{{ $post->created_at }}</h6>
                <p>by <strong><em>{{ $post->author['name'] }}</em></strong></p>
            </div>

            <div class="content">
                {!! $post->body !!}
            </div>

            <div class="comments">
                <div id="disqus_thread"></div>
                <script>

                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    var disqus_config = function () {
                        this.page.url = "{{ route('post', $post->slug) }}";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = "post_{{ $post->slug }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
    <title>{{ $post->title }} | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ $post->meta_description }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
@stop

@section('scripts')
    <!--AddThis widget-->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a79ccfc1ecbefbd"></script>
@endsection