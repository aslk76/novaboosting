@extends('layouts.indexlayout')

@section('content')
    <div id="streamers_DIV" class="col-lg-8">
        <div class="nk-feature-3 bg-dark-2">
        
        @foreach ($streamers as $streamer)
            <!-- START: Now Playing -->
            <a href="https://www.twitch.tv/{!! $streamer->username !!}"><h3 class="nk-decorated-h-22"><span><span class="text-main-1">{!! $streamer->title !!}</span></h3></a>
            <div class="twitch">
                <div class="twitch-video">
                    <iframe frameborder="0" scrolling="no"
                        src="https://player.twitch.tv/?channel={!! $streamer->username !!}&parent=novaboosting.com&autoplay=false"
                        allowfullscreen="true" parent="novaboosting.com" height="100%" width="100%">
                    </iframe>
                </div>
            </div>
            <!-- END: Now Playing -->
            <!-- START: Description -->
            <div class="nk-gap-2"></div>
            {!! $streamer->description !!}
            <!-- END: Description -->
            <!-- START: Share -->
            <div class="nk-gap"></div>
            <div class="nk-post-share">
                <span class="h5" style="color: #f29109">Share Stream:</span>
                <ul class="nk-social-links-2">
                    <li>
                        <a class="nk-social-facebook" 
                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.twitch.tv%2F{!! $streamer->username !!}&amp;src=sdkpreparse"
                            data-layout="button_count" data-size="large" target="_blank">
                            <svg class="svg-inline--fa fa-facebook fa-w-16" aria-hidden="true" focusable="false" 
                            data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 
                            8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 
                            93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 
                            71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a class="nk-social-twitter" 
                            href="https://twitter.com/intent/tweet?text=https%3A%2F%2Fwww.twitch.tv%2F{!! $streamer->username !!}"
                            data-layout="button_count" data-size="large" target="_blank">
                            <svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" 
                            data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" 
                            data-fa-i2svg="">
                                <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 
                                298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 
                                49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 
                                1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 
                                7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 
                                14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 
                                0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 
                                66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 
                                20.791-32.161 39.308-52.628 54.253z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="nk-social-twitch" href="https://www.twitch.tv/{!! $streamer->username !!}"
                            data-layout="button_count" data-size="large">
                            <svg class="svg-inline--fa fa-twitch fa-w-16" aria-hidden="true" focusable="false" 
                            data-prefix="fab" data-icon="twitch" role="img" xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" 
                            d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,
                            24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,
                            73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        @endforeach
        </div>
    </div>

    {{-- Twitter and social sidebar --}}
    <div class="col-lg-4">
        <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
            @include('home.partials.social')
        </aside>
    </div>  

@endsection