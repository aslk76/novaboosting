<header class="nk-header nk-header-opaque">
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky ">
        <div class="container" style="max-width: 1300px;">
            <div class="nk-nav-table">
                <a href="/" class="nk-nav-logo" id="index">
                    <img src="
                    @isset($layoutImages[0])
                        @if($layoutImages[0]->hasImage('logo', 'flexible'))
                            {!! $layoutImages[0]->image('logo', 'flexible', ['fm' => null]) !!}
                        @else
                            {{ asset('assets/images/logo.png') }}
                        @endif
                    @else  
                        {{ asset('assets/images/logo.png') }}      
                    @endisset
                    " alt="Nova" style="max-height: 80px">
                </a>
                <ul class="nk-nav nk-nav d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    <li class="nk-drop-item">
                        <a href="/services/flash-deals/eu"> Special Offers </a>
                        <ul class="dropdown">
                            <li>
                                <a href="/services/flash-deals/eu"><img src="https://img.icons8.com/color/48/000000/flag-of-europe.png"/> Flash Deals!</a>
                            </li>
                            <li>
                                <a href="/services/deals/eu"><img src="https://img.icons8.com/color/48/000000/flag-of-europe.png"/> Current Deals </a>
                            </li>
                            <li>
                                <a href="/services/flash-deals/na"><img src="https://img.icons8.com/color/48/000000/usa.png"/> Flash Deals!</a>
                            </li>
                            <li>
                                <a href="/services/deals/na"><img src="https://img.icons8.com/color/48/000000/usa.png"/> Current Deals </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-drop-item">
                        <a href="/services/eu"> Services </a>
                        <ul class="dropdown">
                            <li>
                                <a href="/services/eu"><img src="https://img.icons8.com/color/48/000000/flag-of-europe.png"/> Our Services </a>
                            </li>
                            <li>
                                <a href="/services/na"><img src="https://img.icons8.com/color/48/000000/usa.png"/> Our Services </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-drop-item">
                        <a> Partner Guilds </a>
                        <ul class="dropdown">
                            <li>
                                <a href="/guilds/eu" id="eu_guilds"><img src="https://img.icons8.com/color/48/000000/flag-of-europe.png"/> EU Guilds</a>
                            </li>
                            <li>
                                <a href="/guilds/na" id="na_guilds"><img src="https://img.icons8.com/color/48/000000/usa.png"/> NA Guilds </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/streamers" id="streamers"> Partner Streamers</a>
                    </li>
                    
                    <li>
                        <a href="#contact"> Contact Us </a>
                    </li>
                    <li>
                        <a href="http://applications.novaboosting.com/"> Apply to us <sup style="color: #f29109; margin-right: 0;"> New </sub> </a>
                    </li>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo" id="index">
                <img src="
                    @isset($layoutImages[0])
                        {!! $layoutImages[0]->image('logo', 'flexible', ['fm' => null]) !!}
                    @else
                        {{ asset('assets/images/logo.png') }}
                    @endisset" alt="" style="max-width: 120px">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->