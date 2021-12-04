@php
    $pricelist_array = array();
@endphp

@extends('layouts.indexlayout')

@section('content')
    <div id="index_DIV" class="col-lg-7">
            <h3 class="nk-decorated-h-2"><span>Check Out Our <span class="text-main-1">Services</span></h3>
            <div class="nk-gap"></div>
            <div class=nk-feature-2 bg-dark-2>
                <div class="nk-tabs">
                    <ul class="nav nav-tabs nav-tabs-fill" role="tablist">
                        @foreach ($tabs as $key => $tab)
                            <li class="nav-item">
                                <a class="nav-link @if ($key === 0) active @endif"  href="#tabs-1-{{ $key+1 }}" role="tab" data-toggle="tab" onclick="refreshPricelists({{ $key+1 }});">{!! $tab->title !!}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach ($tabs as $key => $tab)
                            <div role="tabpanel" class="tab-pane fade @if ($loop->first) show active @endif " id="tabs-1-{{ $key+1 }}" onclick="@php $pricelist_id = $key+1 @endphp ">
                                <div class="nk-gap"></div>
                                <div class="nk-blog-post">
                                    <a class="nk-post-img">
                                        <img src="{!! $tab->image('service_banner', 'default') !!}" alt="{!! $tab->title !!}">
                                        <span class="nk-post-categories">
                                        </span>
                                    </a>
                                    <div class="nk-gap-1"></div>
                                </div>
                                @foreach ($details as $detail)
                                    @if ($detail->service_tabs_id == $tab->id)
                                        <div class="nk-blog-post">
                                            <div class="row vertical-gap">
                                                <div class="col-lg-3 col-md-5">
                                                    <a class="nk-post-img">
                                                        <img src="{!! $detail->image('service_image', 'default') !!}" alt="{!! $detail->title !!}">
                                                        <span class="nk-post-categories">
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-9 col-md-7">
                                                    <h2 class="nk-post-title h4"><a>{!! $detail->title !!}</a></h2>
                                                    <div class="nk-post-text">
                                                        {!! $detail->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        @foreach ($tabs as $key => $tab)
            <div class="col-lg-4" id="#pricelist{{ $key+1 }}" style="display: @if ($key !== 0) none @endif">
                @php
                    array_push($pricelist_array, $key+1);
                @endphp
                <div class="nk-gap-4"></div>
                <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                    <div class="nk-widget nk-widget-highlighted">
                        <h4 class="nk-widget-title"><span>Our <span class="text-main-1">Prices</span></h4>
                        <div class="nk-widget-content">
                            {!! $tab->pricelist !!}
                        </div>
                    </div>
                </aside>
            </div>     
        @endforeach
            
        @php
            $json_pricelist_array = json_encode($pricelist_array);
        @endphp
        <script>
            var arr = <?php echo $json_pricelist_array ?>;
            
            function refreshPricelists($id) {
                for (let i = 0; i < arr.length; i++) {
                    elem = document.getElementById("#pricelist" + String(arr[i]));
                    if(elem.id == "#pricelist" + String($id)){
                        elem.style.display = "inline";
                    } else {
                        elem.style.display = "none";
                    }
                }
            }
        </script>
@endsection

