<!-- tp-pricing-area-start -->
<div class="tp-pricing-area bg-position pt-150 pb-130" data-background="{{ asset('shopizaa/assets/img/pricing/pricing.png') }}">
   <div class="container-fluid container-1524">
      <div class="row">
         <div class="col-xl-6 col-lg-9">
            <div class="tp-pricing-ai-title-wrap mb-40">
               <span class="tp-ff-inter fw-500 fs-18 ls-m-4 tp-text-common-black-5 mb-10 d-inline-block tp_fade_anim" data-delay=".3">/ Our Pricing /</span>
               <h2 class="tp-section-ai-title fs-72 fs-xl-65 fs-lg-55 fs-sm-45 fs-xs-40 fw-600 ls-m-4 tp-ff-jakarta mb-30 tp-text-common-black-6 tp_fade_anim" data-delay=".5">
                  Discover the <br> <span class="title-slide-gradient">Perfect Plan</span> to Power Your AI Vision
               </h2>
               <div class="tp_fade_anim" data-delay=".7">
                  <p class="tp-section-ai-para tp-ff-dm mb-55 fw-400 fs-22 ls-m-2 lh-150-per tp-text-common-black-6">
                     From strategy to deployment, we fuse cutting- technology<br>with creative thinking to craft digital.
                  </p>
               </div>
               <div class="tp_fade_anim" data-delay=".7" data-fade-from="bottom" data-ease="bounce">
                  <a href="#" class="tp-btn-ai tp-btn-ai-transparent tp-btn-switch-2-animation p-relative hover-text-white d-inline-block text-uppercase tp-text-common-black-6 lh-1 fs-16 fw-700 tp-ff-dm">
                     <span class="d-flex align-items-center justify-content-center">
                        <span class="btn-text">See All Plan</span>
                        <span class="btn-icon">
                           <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20 6.00071C16.4166 4.67142 11.9705 2.40252 9.21414 0L11.1357 5.31243H0.688756C0.552576 5.31246 0.419232 5.35209 0.305998 5.42773C0.192725 5.50341 0.104852 5.61172 0.0527125 5.73756C0.00064999 5.86334 -0.0134432 6.0016 0.0130924 6.13511C0.0396547 6.26871 0.105682 6.39175 0.201995 6.48809C0.330914 6.61703 0.505697 6.68939 0.688048 6.6897H11.135L9.21414 12C11.9701 9.59697 16.4165 7.32913 20 6.00071Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span class="btn-icon">
                           <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20 6.00071C16.4166 4.67142 11.9705 2.40252 9.21414 0L11.1357 5.31243H0.688756C0.552576 5.31246 0.419232 5.35209 0.305998 5.42773C0.192725 5.50341 0.104852 5.61172 0.0527125 5.73756C0.00064999 5.86334 -0.0134432 6.0016 0.0130924 6.13511C0.0396547 6.26871 0.105682 6.39175 0.201995 6.48809C0.330914 6.61703 0.505697 6.68939 0.688048 6.6897H11.135L9.21414 12C11.9701 9.59697 16.4165 7.32913 20 6.00071Z" fill="currentColor" />
                           </svg>
                        </span>
                     </span>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-6">
            @php
               $plans = [
                  [
                     'name' => 'Basic Plan',
                     'price' => 'Free',
                     'delay' => '.3',
                     'featured' => false,
                     'features' => ['Email Notifications', 'Access to Core AI Features', 'Limited Data Processing', 'Basic API Access']
                  ],
                  [
                     'name' => 'Standard Plan',
                     'price' => '$89',
                     'period' => 'Mo',
                     'delay' => '.5',
                     'featured' => true,
                     'features' => ['Email Notifications', 'Access to Core AI Features', 'Limited Data Processing', 'Basic API Access']
                  ],
                  [
                     'name' => 'Advanced Plan',
                     'price' => '$99',
                     'period' => 'Mo',
                     'delay' => '.7',
                     'featured' => false,
                     'features' => ['Email Notifications', 'Access to Core AI Features', 'Limited Data Processing', 'Basic API Access']
                  ],
               ];
            @endphp
            @foreach($plans as $plan)
            <div class="tp-pricing-ai-item tp-round-24 tp-bg-common-white mb-30 tp_fade_anim" data-delay="{{ $plan['delay'] }}" data-fade-from="right">
               <div class="row">
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-pricing-ai-head">
                        <h5 class="tp-ff-jakarta fs-20 ls-m-4 tp-text-common-black-5">{{ $plan['name'] }}</h5>
                        <p class="tp-ff-dm fw-500 fs-16 ls-m-2 tp-text-common-black-5">Great For Private Individuals</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-pricing-ai-list">
                        <ul>
                           @foreach($plan['features'] as $feature)
                           <li>{{ $feature }}</li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-pricing-ai-btn text-md-center">
                        <h3 class="tp-pricing-ai-price tp-ff-jakarta fs-52 ls-m-2 tp-text-common-black-5 mb-15">
                           {{ $plan['price'] }}@if(isset($plan['period']))/<span>{{ $plan['period'] }}</span>@endif
                        </h3>
                        <a href="#" class="tp-btn-ai {{ $plan['featured'] ? 'tp-btn-ai-transparent-2' : '' }} tp-btn-ai-xl tp-btn-switch-2-animation p-relative hover-text-white d-inline-block text-uppercase {{ $plan['featured'] ? 'tp-text-common-white' : 'tp-text-common-black-6' }} lh-1 fs-16 fw-700 tp-ff-dm">
                           <span class="d-flex align-items-center justify-content-center">
                              <span class="btn-text">Get Started</span>
                              <span class="btn-icon">
                                 <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6.00071C16.4166 4.67142 11.9705 2.40252 9.21414 0L11.1357 5.31243H0.688756C0.552576 5.31246 0.419232 5.35209 0.305998 5.42773C0.192725 5.50341 0.104852 5.61172 0.0527125 5.73756C0.00064999 5.86334 -0.0134432 6.0016 0.0130924 6.13511C0.0396547 6.26871 0.105682 6.39175 0.201995 6.48809C0.330914 6.61703 0.505697 6.68939 0.688048 6.6897H11.135L9.21414 12C11.9701 9.59697 16.4165 7.32913 20 6.00071Z" fill="currentColor" />
                                 </svg>
                              </span>
                              <span class="btn-icon">
                                 <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6.00071C16.4166 4.67142 11.9705 2.40252 9.21414 0L11.1357 5.31243H0.688756C0.552576 5.31246 0.419232 5.35209 0.305998 5.42773C0.192725 5.50341 0.104852 5.61172 0.0527125 5.73756C0.00064999 5.86334 -0.0134432 6.0016 0.0130924 6.13511C0.0396547 6.26871 0.105682 6.39175 0.201995 6.48809C0.330914 6.61703 0.505697 6.68939 0.688048 6.6897H11.135L9.21414 12C11.9701 9.59697 16.4165 7.32913 20 6.00071Z" fill="currentColor" />
                                 </svg>
                              </span>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
<!-- tp-pricing-area-end -->
