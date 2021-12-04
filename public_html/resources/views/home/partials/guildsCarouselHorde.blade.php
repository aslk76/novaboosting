<div class="nk-carousel nk-carousel-x4" data-autoplay="3000" data-dots="false" data-cell-align="left" data-arrows="true" draggable="false">
    <div class="nk-carousel-inner">
        
        @foreach ($guilds as $key => $guild)
            <div>
                <div class="pl-5 pr-5">
                    <div class="nk-product-cat-3">
                        <a class="nk-product-image"> <img id="guildLogoh{{ $key+1 }}" src="{!! $guild->image('guild_logo', 'flexible', ['fm' => null]) !!}" alt="{!! $guild->title !!}" onclick="displayModalH({{ $key+1 }})"> </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>