
@extends('layouts.indexlayout')

@section('content')
    {{-- <section>
        <div class="nk-blog-post">
            <div class="row vertical-gap">
                <div class="col-lg-3 col-md-5">
                    <a class="nk-post-img">
                        <img src="{!! $item->image('news_image', 'default') !!}">
                        <span class="nk-post-categories">
                        </span>
                    </a>
                </div>
                <div class="col-lg-9 col-md-7">
                    <h2 class="nk-post-title h4"><a>{!! $item->title !!}</a></h2>
                    <div class="nk-post-text">
                        {!! $item->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>     --}}
    <section>
    <div id="index_DIV" class="col-lg-7">
        <h3 class="nk-decorated-h-2"><span>Latest <span class="text-main-1">News</span></span></h3>
        <div class="nk-gap"></div>
        <div class="nk-blog-grid">
            <div class="row">
                <div class="col-lg-12">
    
                <!-- START: News post section -->
                {{-- @foreach ($news as $news_item)
                    <div class="row vertical-gap text-white">
                        <div class=nk-feature-2 bg-dark-2>
                            <div class="nk-blog-post">
                                <h2 class="nk-post-title h4"><a href="https://discord.gg/H4ZdEFgPjx"
                                    target="_blank">{{ $news_item->title }}</a></h2>
                                <a class="nk-post-img" href="https://discord.gg/H4ZdEFgPjx" target="_blank" class="nk-post-img">
                                    <img style="max-width: 100%;" src="{{ $news_item->image('news_photo') }}" alt="{{ $news_item->title }}">
                                </a>
                                <div class="nk-gap"></div>
                                
                                <div class="nk-gap"></div>
                                <div class="nk-post-text" style="max-width: 100%; word-wrap:break-word;">
                                {!! $news_item->description !!}
                                </div>
                                <div class="nk-gap"></div>
                                <a href="https://discord.gg/H4ZdEFgPjx" target="_blank"
                                class="nk-btn nk-btn-rounded nk-btn-color-dark-1 nk-btn-hover-color-main-1">{{$news_item->button_text}}</a>
                            </div>
                        </div>  
                    </div>  
                    <div class="nk-gap-3"></div>
                    {{-- @if ($news_item != $news->last())
                    <div class="nk-gap"></div>
                    <h3 class="nk-decorated-h-2"></h3>
                    <div class="nk-gap"></div>
                    @endif --}}
                    <!-- END: Post -->
    
                {{-- @endforeach  --}} 

                <div class="row vertical-gap text-white px-3 px-md-0">
                    <div class=nk-feature-2 bg-dark-2>
                        <div class="nk-blog-post">
                            <h2 class="nk-post-title h4"><a href="https://discord.gg/H4ZdEFgPjx"
                                target="_blank">{!! $item->title !!}</a></h2>
                            <a class="nk-post-img" href="https://discord.gg/H4ZdEFgPjx" target="_blank" class="nk-post-img">
                                <img style="max-width: 100%;" src="{!! $item->image('news_image', 'default') !!}" alt="{!! $item->title !!}">
                            </a>
                            <div class="nk-gap"></div>
                            
                            <div class="nk-gap"></div>
                            <div class="nk-post-text" style="max-width: 100%; word-wrap:break-word;">
                            {!! $item->description !!}
                            </div>
                            <div class="nk-gap"></div>
                            <a href="https://discord.gg/H4ZdEFgPjx" target="_blank"
                            class="nk-btn nk-btn-rounded nk-btn-color-dark-1 nk-btn-hover-color-main-1">{!! $item->button_text !!}</a>
                        </div>
                    </div>  
                </div>  
                <div class="nk-gap-3"></div>
    
                             
                </div>
                
            </div>
        </div>
    </div>
    
    {{-- Twitter and social sidebar --}}
    <div class="col-lg-5">
        <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
        @include('home.partials.social')
        </aside>
    </div>  
</section>
@endsection
