@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="caption-main" style="font-family: sans-serif; font-size: 82px; font-weight: 700; line-height: 96px; text-align: left;">Meet your</div>
                <div class="caption-main" style="font-family: sans-serif; font-size: 82px; font-weight: 700; line-height: 96px; text-align: left;"><span class="brand-caption" style="color: #009387;">favorite </span>new (old)</div>
                <div class="text" style="font-family: sans-serif; font-size: 82px; font-weight: 700; line-height: 96px; text-align: left;">marketing channel.</div>
                <p>Remarkable results. Easier than email. Postcard marketing reinvented for modern ecommerce.</p>
                <div class="d-flex gap-3 align-items-center">
                    <a href="#" class="btn btn-create-account ms-lg-3">Try it Risk-free</a>
                    <div class="text-center">
                        <div class="rating d-flex justify-content-center">
                            <img src="{{ asset('assets/image/star.svg') }}" alt="Star">
                            <img src="{{ asset('assets/image/star.svg') }}" alt="Star">
                            <img src="{{ asset('assets/image/star.svg') }}" alt="Star">
                            <img src="{{ asset('assets/image/star.svg') }}" alt="Star">
                            <img src="{{ asset('assets/image/star.svg') }}" alt="Star">
                        </div>
                        <p class="mt-1"><span>5.0 Shopify Rating</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/image/div.png') }}" class="img-fluid" alt="Hero Image">
            </div>
        </div>
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

<section class="PostPilot">
    <div class="container my-5">
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-md-10 text-center">
                <h1 class="main-title">PostPilot makes it a <span class="highlight">cinch</span> to send personalized, profit-generating postcards.</h1>
            </div>
        </div>
        <div class="row justify-content-start align-items-start mb-5">
            <div class="col-md-4 text-left">
                <h2 class="sub-title"><span class="highlight1">Powerful</span><br> acquisition <br>& retention</h2>
                <p class="description">Send one-off or triggered campaigns to customers & prospects. Target email leads with MailMatch™.</p>
                <div class="testimonial3">
                    <p class="quote">It's like Klaviyo for direct mail. The results are absolutely insane.</p>
                    <p class="author">Ash Melwani, CMO</p>
                    <img src="{{ asset('assets/image/obvi.png') }}" alt="" class="testimonial-logo">
                </div>
            </div>
        </div>
        <div class="row justify-content-end align-items-start mb-5">
            <div class="col-md-4 text-left">
                <h2 class="sub-title"><span class="highlight1">Fight back</span> against iOS updates, jacked-up CPCs & spam folders</h2>
                <p class="description">Deliver your message to all of your customers — for less than the cost of a click.</p>
                <div class="testimonial3">
                    <p class="quote">PostPilot is our new weapon against sinking email engagement and rising PPC costs. The results and ROI have been outstanding. It’s now one of our core marketing channels to increase acquisition & LTV.</p>
                    <p class="author">Leah Keith, GM</p>
                    <img src="{{ asset('assets/image/paragon.png') }}" alt="" class="testimonial-logo">
                </div>
            </div>
        </div>
        <div class="row justify-content-start align-items-start mb-5">
            <div class="col-md-4 text-left">
                <h2 class="sub-title">Done for <span class="highlight1">you</span></h2>
                <p class="description">From design & strategy to stamp-licking, our ecom experts help you every step of the way.</p>
                <div class="testimonial3">
                    <p class="quote">The team is so knowledgeable and beyond helpful. I'm blown away by their communication, detail, and attentiveness and always feel like they have our best interest in mind. Definitely worth a try.</p>
                    <p class="author">Holly Davies, Marketing Director</p>
                    <img src="{{ asset('assets/image/paragon1.png') }}" alt="" class="testimonial-logo1">
                </div>
                <div class="d-flex justify-content-start">
                    <a href="#" class="btn btn-create-account ms-lg-3">TRY IT RISK-FREE</a>
                </div>
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

<section class="seven-section">
    <div class="container my-5">
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-md-10 text-center">
                <h1 class="main-title">Fast launch. Fast results. <br> <span class="highlight">Here's how</span></h1>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item col-md-4 text-left">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="highlight-seven">01</div>
                  <div class="step-title ms-2">Segment</div>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="step-description">One-off announcements or automatically triggered flows. Customers receive their personalized cards within a week.</div>
                </div>
              </div>
            </div>
        
            <div class="accordion-item col-md-4 text-left">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="highlight-seven">02</div>
                  <div class="step-title ms-2">Design</div> 
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="step-description">One-off announcements or automatically triggered flows. Customers receive their personalized cards within a week.</div>
                </div>
              </div>
            </div>
        
            <div class="accordion-item col-md-4 text-left">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <div class="highlight-seven">03</div>
                  <div class="step-title ms-2">Send</div>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="step-description">One-off announcements or automatically triggered flows. Customers receive their personalized cards within a week.</div>
                </div>
              </div>
            </div>
        
            <div class="accordion-item col-md-4 text-left">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <div class="highlight-seven">04</div>
                  <div class="step-title ms-2">Convert</div>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="step-description">One-off announcements or automatically triggered flows. Customers receive their personalized cards within a week.</div>
                </div>
              </div>
            </div>
          </div>
    </div>
</section>


<section class="eight-section text-center">
    <div class="container third-section">
        <div class="text-center mb-5">
            <p class="text-center mt-0" style="font-size: 63px; font-weight: 700; inline-height: 76px;nletter-spacing: -2px; text-align: center;">PostPilot is 🔥 for <span class="brand-caption" style="color: #009387;">DTC</span></p>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="testimonial-card">
                    <img src="{{ asset('assets/image/helen_guo.png') }}" alt="Author Image" class="testimonial-image">
                    <p class="testimonial-author">Author Name</p>
                    <p class="testimonial-handle">@AuthorHandle</p>
                  <div class="d-flex">
                    <div class="testimonial-content justify-content-left">
                      <p>+1 for PostPilot. Have only done some, but it's been wonderful. Their support is top-notch. Super helpful every time I needed to set something up.</p>
                    </div>
                  </div>
                  <img src="{{ asset('assets/image/twitter.svg') }}" alt="Twitter Icon" class="twitter-icon">
                </div>
              </div>
              <div class="col-md-3">
                <div class="testimonial-card">
                    <img src="{{ asset('assets/image/helen_guo.png') }}" alt="Author Image" class="testimonial-image">
                    <p class="testimonial-author">Helan Guo</p>
                    <p class="testimonial-handle">@HelanGuo_</p>
                  <div class="d-flex">
                    <div class="testimonial-content justify-content-left">
                      <p>Mentioning PostPilot for years. Good for retargeting and you can get creative with the messaging.</p>
                    </div>
                  </div>
                  <img src="{{ asset('assets/image/twitter.svg') }}" alt="Twitter Icon" class="twitter-icon">
                </div>
              </div>
              <div class="col-md-3">
                <div class="testimonial-card">
                    <img src="{{ asset('assets/image/nathan_woods.png') }}" alt="Author Image" class="testimonial-image">
                    <p class="testimonial-author">Nathan Woods</p>
                    <p class="testimonial-handle">@HeisNathan</p>
                  <div class="d-flex">
                    <div class="testimonial-content justify-content-left">
                      <p>I've done some rad winbacks to 60 days since purchase that have been great.</p>
                    </div>
                  </div>
                  <img src="{{ asset('assets/image/twitter.svg') }}" alt="Twitter Icon" class="twitter-icon">
                </div>
              </div>
              <div class="col-md-3">
                <div class="testimonial-card">
                    <img src="{{ asset('assets/image/chris_lander.png') }}" alt="Author Image" class="testimonial-image">
                    <p class="testimonial-author">Chris Lander</p>
                    <p class="testimonial-handle">@chris_basis</p>
                  <div class="d-flex">
                    <div class="testimonial-content justify-content-left">
                      <p>+1 for PostPilot. Have only done some, but it's been wonderful. Their support is top-notch. Super helpful every time I needed to set something up.</p>
                    </div>
                  </div>
                  <img src="{{ asset('assets/image/twitter.svg') }}" alt="Twitter Icon" class="twitter-icon">
                </div>
              </div>
            </div>
          </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-create-account ms-lg-3">TRY IT RISK-FREE</a>
        </div>
    </div>
</section>


<section class="nine-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/image/obvi-pink.png') }}" class="img-fluid" alt="Hero Image">
            </div>
            <div class="col-md-6 mt-5">
                <div class="text">How <span class="caption" style="color: #009387;">obvi </span>Drives</div>
                <div class="text">Profits with Hands-</div>
                <div class="text">Off Postcard</div>
                <div class="text">Campigns</div>
                <p>The 🚀 supplements brand wanted to offset high ad costs and reach dormant customers. They scored 1000%+ ROIs.</p>
                <div class="row">
                    <div class="col-md-3 col-3 mb-4">
                        <div class="mt-3"><h2>1468%</h2></div>
                    </div>
                    <div class="col-md-3 col-3 mb-4">
                        <div class="mt-3"><h2>8.59%</h2></div>
                    </div>
                    <div class="col-md-3 col-3 mb-4">
                        <div class="mt-3"><h2>$73,457</h2></div>
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-center mb-5">
                    <a href="#" class="btn btn-login ms-lg-3"><b>READ CASE STUDY</b></a>
                </div>
                <div class="row mb-5">
                    <div class="col-md-3 col-3 mb-4">
                        <div class="mt-3"><img src="{{ asset('assets/image/image4.png') }}" class="brand-img" alt="Scotch Porter"></div>
                    </div>
                    <div class="col-md-3 col-3 mb-4">
                        <div class="mt-3"><img src="{{ asset('assets/image/image2.png') }}" class="brand-img" alt="Scotch Porter"></div>
                    </div>
                    <div class="col-md-3 col-3 mb-4">
                        <div class="mt-3"><img src="{{ asset('assets/image/image1.png') }}" class="brand-img" alt="Scotch Porter"></div>
                    </div>
                    <div class="col-md-3 col-3 mb-4">
                        <div class="mt-3"><img src="{{ asset('assets/image/image3.png') }}" class="brand-img" alt="Scotch Porter"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ten-section" style="background-color: #FF6D2C">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="caption-main" style="font-family: sans-serif; font-size: 65px; font-weight: 700; line-height: 96px; text-align: left; color: #FFFFFF;">Try postPilot</div>
                <div class="text" style="font-family: sans-serif; font-size: 65px; font-weight: 700; line-height: 96px; text-align: left; color: #FFFFFF;">Risk-Free</div>
                <p style="color: #FFFFFF;">No contracts. No commitments Guranteed results.*</p>
                <div class="d-flex gap-3 align-items-center">
                    <a href="#" class="btn btn-login ms-lg-3">GET STARTED</a>
                    <div class="text-center">
                        <div class="rating d-flex justify-content-center">
                            <img src="{{ asset('assets/image/star-white.svg') }}" alt="Star">
                            <img src="{{ asset('assets/image/star-white.svg') }}" alt="Star">
                            <img src="{{ asset('assets/image/star-white.svg') }}" alt="Star">
                            <img src="{{ asset('assets/image/star-white.svg') }}" alt="Star">
                            <img src="{{ asset('assets/image/star-white.svg') }}" alt="Star">
                        </div>
                        <p class="mt-1" style="color: #FFFFFF;"><span>5.0 Shopify Rating</span></p>
                        
                    </div>
                </div>
                <p class="mt-1" style="color: #FFFFFF;"><span>* for qualified brands with over $1m annual Shopify revenue.</span></p>
            </div>
            <div class="col-md-6">
                <img class="justify-content-right" style="max-width: 100%;
            height: 400px;" src="{{ asset('assets/image/gallery-img.png') }}" class="img-fluid" alt="Hero Image">
            </div>
        </div>
    </div>
</section>


<section class="eight-section text-center">
    <div class="container third-section">
        <div class="text-center mb-5">
            <p class="text-center mb-0" style="font-size: 63px; font-weight: 700; inline-height: 76px;nletter-spacing: -2px; text-align: center;">Latest trends & <span class="brand-caption" style="color: #009387;">insights</span></p>
        </div>
        <div class="row">
            <div class="col-md-4 col-6 mb-4">
                <img src="{{ asset('assets/image/div (1).png') }}" class="brand-img" alt="RunGum">
                <div class="mt-3"><p style="font-family: sans-serif; font-size: 26px; font-weight: 700; line-height: 36px; text-align: left;">3 Low-Cost Campaigns You Must Run to Win BFCM</p></div>
            </div>
            <div class="col-md-4 col-6 mb-4">
                <img src="{{ asset('assets/image/div (2).png') }}" class="brand-img" alt="Beardbrand">
                <div class="mt-3"><p style="font-family: sans-serif; font-size: 26px; font-weight: 700; line-height: 36px; text-align: left;">Postcard Marketing: The Definitive Guide to High ROI [2022]</p></div>
            </div>
            <div class="col-md-4 col-6 mb-4">
                <img src="{{ asset('assets/image/div (3).png') }}" class="brand-img" alt="Promix">
                <div class="mt-3"><p style="font-family: sans-serif; font-size: 26px; font-weight: 700; line-height: 36px; text-align: left;">The Ultimate Guide to Thank You Notes for Ecommerce</p></div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-box">
                    <img src="{{ asset('assets/image/eco-label.svg') }}" alt="Icon" class="feature-icon" style="width: 112px; height: 109.69px; left: 0px;">
                <p>Our paper is sourced from FSC-certified mills. We plant enough trees to more than double our paper usage.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-box">
                    <h2>COMPANY</h2>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Partner program</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                </div>                    
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-box">
                    <h2></h2>
                <ul>
                    <li><a href="#">pricing</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Direct Mail Academy</a></li>
                    <li><a href="#">Success stories</a></li>
                    <li><a href="#">Terms & conditions</a></li>
                </ul>
                </div>                    
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-box">
                    <h2>CONTACT</h2>
                    <div class="input-group mb-3">
                        <i><img src="{{ asset('assets/image/Email.png') }}" alt="Icon" class="feature-icon" style="width: 24px; height: 24px;">support@postpilot.com</i>
                    </div>
                    <p>Printed with ❤️️️ at our facility in South Carolina.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/image/logo.svg') }}" alt="Logo" width="162.31px" height="30px">
            <p class="mt-1" style="font-family: Inter; font-size: 14px; font-weight: 500; line-height: 22px; text-align: left; color: #58595D;"><span>© 2022 PostPilot, Inc. All rights reserved.</span></p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                <li class="nav-item">
                    <a class="btn btn-login ms-lg-3" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-create-account ms-lg-3" href="#">Create Free Account</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@endsection
