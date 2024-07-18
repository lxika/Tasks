@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="container">
    
    </div>
</section>

<section class="third-section text-center">
    <div class="container third-section">
        <div class="text-center mb-5">
            <p class="text-center mb-0" style="font-size: 63px; font-weight: 700; inline-height: 76px;nletter-spacing: -2px; text-align: center;">Trusted by thousands</p>
            <p class="text-center mt-0" style="font-size: 63px; font-weight: 700; line-height: 76px; letter-spacing: -2px; text-align: center;">of top DTC <span class="brand-caption" style="color: #009387;">brands</span>.</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('assets/image/front_image.png') }}" class="brand-img" alt="RunGum">
                <div class="mt-3"><img src="{{ asset('assets/image/rungum.png') }}" class="brand-img" alt="Scotch Porter"></div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('assets/image/BeardBrand_design_image.png') }}" class="brand-img" alt="Beardbrand">
                <div class="mt-3"><img src="{{ asset('assets/image/beardbrand.png') }}" class="brand-img" alt="Scotch Porter"></div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('assets/image/BeardBrand_design.png') }}" class="brand-img" alt="Promix">
                <div class="mt-3"><img src="{{ asset('assets/image/promix.png') }}" class="brand-img" alt="Scotch Porter"></div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('assets/image/scotch.png') }}" class="brand-img" alt="Scotch Porter">
                <div class="mt-3"><img src="{{ asset('assets/image/scotch-porter.png') }}" class="brand-img" alt="Scotch Porter"></div>
            </div>
        </div>
    </div>
</section>

<section class="fourth-section text-center">
    <div class="container third-section">
        <div class="text-center mb-5">
            <p class="text-center mb-0" style="font-size: 63px; font-weight: 700; inline-height: 76px;nletter-spacing: -2px; text-align: center;">Why use direct mail?</p>
            <p class="text-center mt-0" style="font-size: 63px; font-weight: 700; line-height: 76px; letter-spacing: -2px; text-align: center;">It <span class="brand-caption" style="color: #009387;">works </span>like crazy.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-6 mb-4">
                <div class="caption-main">28X</div>
                <div class="caption-sub">Higher response rate than email & digital</div>
            </div>
            <div class="col-md-4 col-6 mb-4">
                <img src="{{ asset('assets/image/home-number-chart.png') }}" class="brand-img" alt="Beardbrand">
                <div class="caption-sub">Your messages get read</div>
            </div>
            <div class="col-md-4 col-6 mb-4">
                <div class="caption-main">17 Days</div>
                <div class="caption-sub">Lifespan of a postcard vs. seconds for email or SMS</div>
            </div>
        </div>
    </div>
</section>

<section class="five-section text-center">
    <div class="container third-section">
        <div class="text-center mb-5">
            <p class="text text-center mb-0">PostPilot makes it a <span class="cinch-text">cinch </span>to </p>
            <p class="text text-center mb-0 mt-0">send personalized, profit- </p>
            <p class="text text-center mt-0">generating postcards.</p>
        </div>
    </div>
    <div class="container third-section">
        <div class="row">
            <div class="col-md-4 col-6 mb-4">
            </div>
            <div class="col-md-4 col-6 mb-4">
            </div>
            <div class="col-md-4 col-6 mb-4">
            </div>
        </div>
    </div>
</section>

<section class="six-section text-center">
    <div class="container py-5">
        <h2 class="feature-text text-center mb-4">Everything your brand needs to <br> <span class="caption" style="color: #009387;">make your brand unforgettable</span></h2>
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="feature-card" style="background-color: #FDF3EA;">
                    
                        <img src="{{ asset('assets/image/feature-img_1.png') }}" alt="Icon" class="feature-icon">
                    
                    <div class="d-flex align-items-center justify-content-center">
                        <h3 class="feature-title mt-2">Plug-and-play with your stack</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="feature-description">Native integrations provide seamless segmentation, automation & tracking. No clunky spreadsheets.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card" style="background-color: #E0F8F2;">
                    
                        <img src="{{ asset('assets/image/feature-img_2.png') }}" alt="Icon" class="feature-icon">
                   
                    <div class="d-flex align-items-center justify-content-center">
                        <h3 class="feature-title">Run campaigns on autopilot</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="feature-description">Ink profits while you sleep. Just set it and forget it.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card " style="background-color: #EEECFF;">
                    <img src="{{ asset('assets/image/feature-img_3.png') }}" alt="Icon" class="feature-icon heading-small text-align-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <h3 class="feature-title">Real-time ROI dashboard</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="feature-description">Track performance of every postcard by customer or discount code. Your CFO will be happy.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card" style="background-color: #D9F2F7;">
                    <img src="{{ asset('assets/image/feature-img_4.png') }}" alt="Icon" class="feature-icon">
                    <div class="d-flex align-items-center justify-content-center">
                        <h3 class="feature-title">Deliver WOW with *real* handwritten cards</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="feature-description">Our proprietary robots write and mail cards for an unforgettable WOW touch.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card" style="background-color: #FAEDED;">
                    <img src="{{ asset('assets/image/feature-img_5.png') }}" alt="Icon" class="feature-icon">
                    <div class="d-flex align-items-center justify-content-center">
                        <h3 class="feature-title">Predictable pricing</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="feature-description">Unlike CPCs, postcard rates don't change based on competition or when you're targeting.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card" style="background-color: #F1F1F1;">
                    <img src="{{ asset('assets/image/feature-img_6.png') }}" alt="Icon" class="feature-icon">
                    <div class="d-flex align-items-center justify-content-center">
                        <h3 class="feature-title">Complimentary concierge service</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="feature-description">DTC is in our DNA. Our experts will help your brand maximize its potential using battle-tested best practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
