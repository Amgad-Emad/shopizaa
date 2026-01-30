<!-- tp-service-area-start -->
<div class="tp-service-area pt-150 pb-170 p-relative z-index-1">
   <img class="tp-service-ai-ring p-absolute" src="{{ asset('shopizaa/assets/img/about/ai/ring.png') }}" alt="">
   <div class="container-fluid container-1524">
      <div class="row align-items-end">
         <div class="col-lg-8">
            <div class="tp-service-ai-title-wrap mb-30">
               <span class="text-anim tp-ff-inter fw-500 fs-18 ls-m-4 tp-text-common-black-5 mb-10 d-inline-block">/ Our Service /</span>
               <h2 class="text-anim tp-section-ai-title fs-72 fs-xl-65 fs-lg-55 fs-sm-45 fs-xs-40 fw-600 tp-ff-jakarta tp-text-common-black-6">Building the Future with Intelligent Services</h2>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="tp-service-ai-btn mb-80 text-lg-end tp_fade_anim" data-delay=".4" data-fade-from="bottom" data-ease="bounce">
               <a href="#" class="tp-btn-ai tp-btn-switch-2-animation p-relative hover-text-white d-inline-block text-uppercase tp-text-common-black-6 lh-1 fs-16 fw-700 tp-ff-dm">
                  <span class="d-flex align-items-center justify-content-center">
                     <span class="btn-text">All Service</span>
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
      <div class="row">
         <div class="col-lg-12">
            <div class="tp-service-ai-content pt-50">
               @php
                  $services = [
                     ['number' => '001', 'title' => 'Development'],
                     ['number' => '002', 'title' => 'Powered Data Analytics'],
                     ['number' => '003', 'title' => 'Language Processing'],
                     ['number' => '004', 'title' => 'Apps & Platforms'],
                     ['number' => '005', 'title' => 'MVP Startups'],
                  ];
               @endphp
               @foreach($services as $service)
               <div class="tp-service-ai-item-main mb-35">
                  <div class="tp-service-ai-item d-inline-block">
                     <div class="d-flex align-items-center">
                        <span class="tp-service-ai-count tp-ff-jakarta fw-600 fs-24 fs-sm-18 ls-m-4 mr-30">{{ $service['number'] }}</span>
                        <h2 class="tp-service-ai-title tp-ff-jakarta fs-72 fs-xl-60 fs-lg-50 fs-sm-35 fs-xs-25 ls-m-4">
                           <a href="#">{{ $service['title'] }}</a>
                        </h2>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
   <div class="tp-service-ai-box-wrp pt-70">
      <div class="container-fluid container-1824">
         <div class="row gx-60">
            @php
               $serviceBoxes = [
                  ['image' => 'thumb.jpg', 'title' => 'Consulting', 'delay' => '.3'],
                  ['image' => 'thumb-2.jpg', 'title' => 'Data Analytics', 'delay' => '.5'],
                  ['image' => 'thumb-3.jpg', 'title' => 'AI Chatbots', 'delay' => '.7'],
                  ['image' => 'thumb-4.jpg', 'title' => 'AI Integration', 'delay' => '.9'],
               ];
            @endphp
            @foreach($serviceBoxes as $box)
            <div class="col-lg-3 col-md-6 col-sm-6 tp_fade_anim" data-delay="{{ $box['delay'] }}" data-duration="2" data-fade-from="bottom" data-ease="bounce">
               <div class="tp-service-ai-box mb-40">
                  <div class="tp-service-ai-main">
                     <div class="tp-service-ai-wrap fix p-relative">
                        <div class="tp-service-ai-thumb">
                           <img src="{{ asset('shopizaa/assets/img/service/ai/' . $box['image']) }}" alt="{{ $box['title'] }}">
                        </div>
                        <div class="tp-service-ai-content-2">
                           <a href="#" class="tp-ff-jakarta fw-700 fs-28 hover-text-white tp-text-grey-5 underline-black">{{ $box['title'] }}</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
<!-- tp-service-area-end -->
