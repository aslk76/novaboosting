
<div class="col-lg-12">
    <div style="position:relative;display:flex;align-items:center;width:100%;min-height:50px;padding:15px;border-radius:4px;flex-direction:column">
        <h3 class="text-xs-center"><a href="{!! $promo[0]->link !!}" target="_blank" rel="noopener noreferrer" style="color: white">{!! $promo[0]->title !!}</a></h3>
        <a class="nk-product-image" href="{!! $promo[0]->link !!}" target="_blank" rel="noopener noreferrer">
            <img src="{!! $promo[0]->image('promo_image', 'flexible', ['fm' => null]) !!}" alt="{!! $promo[0]->title !!}" style="max-width: 100%">
        </a>
        <p class="text-xs-center"> {!! $promo[0]->caption !!} </p>
    </div>
</div>
