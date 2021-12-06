@extends('layouts.indexlayout')

@section('content')
<div id="index_DIV" class="col-lg-7">
    <div class="nk-gap-3"></div>
    <div class="nk-blog-grid">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="nk-decorated-h-2" style="width: 100%;"><span>Latest <span class="text-main-1">News</span></span></h2>
            <div class="nk-gap-2"></div>
            <!-- START: News post section -->
            @foreach ($news as $news_item)
                <div class="row vertical-gap text-white">
                    <div class="nk-feature-2 bg-dark-2" style="align-items:start;">
                        <div class="nk-blog-post">
                            <h2 class="nk-post-title h4"><a href="https://discord.gg/H4ZdEFgPjx"
                                target="_blank">{!! $news_item->title !!}</a></h2>
                            <a class="nk-post-img" href="https://discord.gg/H4ZdEFgPjx" target="_blank" class="nk-post-img">
                                <img style="max-width: 100%;" src="{!! $news_item->image('news_image', 'default', ['fm' => null]) !!}" alt="{!! $news_item->title !!}">
                            </a>
                            <div class="nk-gap"></div>
                            
                            <div class="nk-gap"></div>
                            <div class="nk-post-text" style="max-width: 100%; word-wrap:break-word;">
                            {!! $news_item->description !!}
                            </div>
                            <div class="nk-gap"></div>
                            <a href="{!! $news_item->link !!}" target="_blank"
                            class="nk-btn nk-btn-rounded nk-btn-color-dark-1 nk-btn-hover-color-main-1">{!! $news_item->button_text !!}</a>
                        </div>
                    </div>  
                </div>  
                <div class="nk-gap-3"></div>
            @endforeach 
            </div>
        </div>
    </div>
</div>

{{-- Twitter and social sidebar --}}
<div class="col-lg-5">
    <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
        @include('home.partials.social', ['links' => $links])
    </aside>
</div>  
<!--END: INDEX DIV-->
@endsection