<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    {{--<title>@yield('title') | {{ setting('site.title') }}</title>--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: url("{{ asset('img/bg.jpg') }}") center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
    @yield('styles')
</head>
<body>
<div id="app">

    <nav>
        <div class="nav-wrapper">
            <a href="{{ route('home') }}" class="brand-logo is-apple m-l-15">{{ setting('site.title') }}</a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="fa fa-bars"></i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="dtb-hover" href="{{ route('home') }}">Home</a></li>
                <li><a class="dropdown-button dtb-hover" href="#" data-activates="info_dropdown1" data-beloworigin="true" data-constrainwidth="false">Information<i class="fa fa-angle-down m-l-5"></i></a></li>

                <!-- Dropdown Structure -->
                <ul id='info_dropdown1' class='dropdown-content'>
                    <li><a href="{{ route('project') }}">About the project</a></li>
                    <li><a href="{{ route('whoweare') }}">Who we are</a></li>
                    <li><a href="{{ route('structure') }}">Structure</a></li>
                    <li><a href="{{ route('funding') }}">Funding</a></li>
                    <li><a href="{{ route('resources') }}">Resources</a></li>
                </ul>

                <li><a class="dtb-hover" href="{{ route('events') }}">Events</a></li>
                <li><a class="dtb-hover" href="{{ route('blog') }}">Blog</a></li>
                <li><a class="dtb-hover" href="{{ route('gallery') }}">Gallery</a></li>
                <li><a class="dtb-hover" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
                <li><div class="user-view">
                        {{--<div class="background">--}}
                            {{--<img src="{{ asset('img/tree.jpg') }}">--}}
                        {{--</div>--}}
                        <p class="m-b-15">{{ setting('site.title') }}</p>
                    </div></li>
                <li class="m-t-20"><a href="{{ route('home') }}">Home</a></li>
                <li><a class="dropdown-button" href="#" data-activates="info_dropdown2" data-beloworigin="true" data-constrainwidth="false">Information<i class="fa fa-angle-down m-l-5"></i></a></li>

                <!-- Dropdown Structure -->
                <ul id='info_dropdown2' class='dropdown-content'>
                    <li><a href="{{ route('project') }}">About the project</a></li>
                    <li><a href="{{ route('whoweare') }}">Who we are</a></li>
                    <li><a href="{{ route('structure') }}">Structure</a></li>
                    <li><a href="{{ route('funding') }}">Funding</a></li>
                    <li><a href="{{ route('resources') }}">Resources</a></li>
                </ul>

                <li><a href="{{ route('events') }}">Events</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                © 2018 {{ setting('site.title') }}
                <a class="grey-text text-lighten-4 right right" href="#"><i class="fa fa-facebook"></i></a>
                <a class="grey-text text-lighten-4 right right m-r-10" href="#"><i class="fa fa-twitter"></i></a>
                <a class="grey-text text-lighten-4 right right m-r-10" href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    </div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
<script>
    @if(Session::has('success'))
    Materialize.toast("{{ Session::get('success') }}", 4000, 'green lighten-3 blue-grey-text text-darken-4');
    @endif
</script>

</body>
</html>