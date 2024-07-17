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

@endsection
