<div class="nk-image-slider" data-autoplay="6000">
    @if(!$sliderImages->isempty())
        @foreach ($sliderImages as $image)
            <div class="nk-image-slider-item">
                <img src="{!! $image->image('slider_image', 'default', ['fm' => null]) !!}" style="max-height: 100%" alt="" class="nk-image-slider-img">
            </div>
        @endforeach
    @else
        <div class="nk-image-slider-item">
            <img src="{{ asset('assets/images/Nova-animated-gif-1-cropped.gif') }}" style="max-height: 100%" alt="" class="nk-image-slider-img">
        </div>
        <div class="nk-image-slider-item">
            <img src="{{ asset('assets/images/Welcome_Slider_1-03.png') }}" alt="" class="nk-image-slider-img">
        </div>
        <div class="nk-image-slider-item">
            <img src="{{ asset('assets/images/Recruitment_2-02.png') }}" alt="" class="nk-image-slider-img">
        </div>
    @endisset
</div>
