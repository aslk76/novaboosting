@extends('layouts.indexlayout')

@section('content')
    <h3 class="nk-decorated-h-2"><span>Check Out Our <span class="text-main-1">Partnered Guilds</span></h3>
    <div class="nk-gap"></div>
        <div id="eu_Guilds_DIV" class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="nk-feature-4" >
                        <div class="nk-feature-icon">
                            <img src="{{ asset('assets/images/alliance.png') }}" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a>Alliance</a></h3>
                            <h3 class="nk-feature-title text-main-1"><a>Partner Guilds</a></h3>
                        </div>
                    </div>
                    
                    <div class="nk-feature-2 bg-dark-2" style="flex-direction: row; display: block;">
                        @include('home.partials.guildsCarouselAlliance', ['guilds' => $allianceGuilds])
                    </div>
                    @include('home.partials.guildModalAlliance', ['guilds' => $allianceGuilds])
                
                    <div class="nk-gap-4"></div>

                    <div class="nk-feature-5">
                        <div class="nk-feature-icon">
                            <img src="{{ asset('assets/images/horde.png') }}" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a>Horde</a></h3>
                            <h3 class="nk-feature-title text-main-1"><a>Partner Guilds</a></h3>
                        </div>
                    </div>

                    <div class="nk-feature-2 bg-dark-2" style="flex-direction: row; display: block;">
                        @include('home.partials.guildsCarouselHorde', ['guilds' => $hordeGuilds])
                    </div>
                    @include('home.partials.guildModalHorde', ['guilds' => $hordeGuilds])
                </div>
            </div>
        {{-- In theory there should be another </div> here, but the aside formatting breaks if you 
            add it.. --}}
    </div>

    {{-- Guild application guide sidebar --}}
    @isset($guide[0])
       <div class="col-lg-4">
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span>{!! $guide[0]->titleWhite !!} <span class="text-main-1">{!! $guide[0]->titleOrange !!}</span></h4>
                    <div class="nk-widget-content">
                        {!! $guide[0]->description !!}
                    </div>
                </div>
            </aside>
        </div> 
    @endisset
    <!--END: INDEX DIV-->
@endsection