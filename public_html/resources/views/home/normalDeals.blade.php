@extends('layouts.indexlayout')

@section('content')


    <div id="index_DIV" class="col-lg-8">
        <h3 class="nk-decorated-h-2"><span>Check Out Our <span class="text-main-1">Current Deals</span></h3>
        <div class="nk-gap"></div>
        <div class=nk-feature-2 bg-dark-2>
            <div class="nk-tabs" style="width:100%;">
                <div class="nk-blog-post">
                    <a class="nk-post-img">
                        <img src="{!! $normal_deals[0]->image('deal_banner', 'default') !!}" alt="">
                        <span class="nk-post-categories">
                        </span>
                    </a>

                </div>
            </div>
        </div>
        @foreach ($normal_deals[0]->normalDeals as $deal)
            @if ($deal->hasImage('deal_image', 'default'))
                <div class="nk-gap"></div>
                <div class="nk-feature-2">
                    <div class="nk-tabs" style="width:100%;">
                        <div class="nk-gap"></div>
                        <div class="nk-blog-post">
                            <div class="row vertical-gap">
                                <div class="col-lg-4 col-md-5">
                                    <a class="nk-post-img">
                                        <img src="{!! $deal->image('deal_image', 'default') !!}" alt="{!! $deal->title !!}">
                                        <span class="nk-post-categories">
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <h2 class="nk-post-title h4"><a>{!! $deal->title !!}</a></h2>
                                    <div class="nk-post-text">
                                        {!! $deal->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @else
                <div class="nk-gap"></div>
                <div class="nk-feature-2"  style="padding-left:25px;">
                    <div class="nk-tabs" style="width:100%;">
                        <div class="nk-gap"></div>
                        <div class="nk-blog-post">
                            <div class="row vertical-gap">
                                <div class="col-md-12">
                                    <h2 class="nk-post-title h4"><a>{!! $deal->title !!}</a></h2>
                                    <div class="nk-post-text">
                                        {!! $deal->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <div class="col-lg-4">
        <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
            <div class="nk-gap"></div>
            <div class="nk-widget nk-widget-highlighted">
                <h4 class="nk-widget-title"><span>Request a <span class="text-main-1">Boost!</span></h4>
                <div class="nk-widget-content">
                    <a href="{!! $links[0]->discord !!}" target="_blank"
                        class="nk-btn nk-btn-rounded nk-btn-color-dark-1 nk-btn-hover-color-main-1">Book Now</a>
                </div>
            </div>
        </aside>
    </div>
@endsection
