@extends('layouts.indexlayout')

@section('content')
    <section>
        <div id="index_DIV" class="col-lg-7">
            <h3 class="nk-decorated-h-2"><span>Check Out Our <span class="text-main-1">Services</span></h3>
            <div class="nk-gap"></div>
            <div class=nk-feature-2 bg-dark-2>
                <div class="nk-tabs">
                    <ul class="nav nav-tabs nav-tabs-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tabs-1-1" role="tab" data-toggle="tab">Raids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab">M+</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab">Torghast</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-4" role="tab" data-toggle="tab">Legacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-5" role="tab" data-toggle="tab">Mounts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-6" role="tab" data-toggle="tab">PVP</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
                            <div class="nk-gap"></div>
                            <!-- START: Raids Tab -->
                            <div class="nk-blog-post">
                                <a class="nk-post-img">
                                    <img src="{{ asset('assets/images/post-2-fw.jpg') }}" alt="Raids">
                                    <span class="nk-post-categories">
                                    </span>
                                </a>
                                <div class="nk-gap-1"></div>
                            </div>
                            @yield('content')
                            <div class="nk-blog-post">
                                <div class="row vertical-gap">
                                    <div class="col-lg-3 col-md-5">
                                        <a class="nk-post-img">
                                            <img src="{!! $item->image('service_image', 'default') !!}" alt="CURVE runs">
                                            <span class="nk-post-categories">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-lg-9 col-md-7">
                                        <h2 class="nk-post-title h4"><a>{!! $item->title !!}</a></h2>
                                        <div class="nk-post-text">
                                            <p>{!! $item->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-blog-post">
                                <div class="row vertical-gap">
                                    <div class="col-lg-3 col-md-5">
                                        <a class="nk-post-img">
                                            <img src="{{ asset('assets/images/armor-stack-2.png') }}"
                                                alt="Armor stacking">
                                            <span class="nk-post-categories">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-lg-9 col-md-7">
                                        <h2 class="nk-post-title h4"><a>Armor Stacking</a></h2>
                                        <div class="nk-post-text">
                                            <p>Looking to gear as quickly as possible? We offer VIP loot traders
                                            of your armor type to trade any gear they receive directly to you!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Raid Tab -->
                            <div class="nk-gap"></div>
                        </div>
                        <div class="nk-gap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span>Our <span class="text-main-1">Prices</span></h4>
                    <div class="nk-widget-content">
                        {!! $item->pricelist !!}
                    </div>
                </div>
            </aside>
        </div> 
    </section>
@endsection

