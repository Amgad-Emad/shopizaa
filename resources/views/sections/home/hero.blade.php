<!-- tp-hero-area-start -->
<div class="tp-hero-area pre-header tp-hero-ai-spacing bg-position p-relative z-index-1" data-background="{{ asset('shopizaa/assets/img/hero/ai/bg.png') }}">
   <img class="tp-hero-ai-shape" src="{{ asset('shopizaa/assets/img/hero/ai/shape.png') }}" alt="">
   <div class="container-fluid container-1824 containers">
      <div class="row align-items-end">
         <div class="col-xl-6 order-2 order-xl-1">
            <div class="row align-items-end">
               <div class="col-lg-7 col-md-7">
                  <div class="tp-hero-ai-thumb tp-round-32 tp--hover-item fix p-relative mb-30 mr-60">
                     <div class="tp--hover-img " data-displacement="{{ asset('shopizaa/assets/img/hero/ai/thumb.jpg') }}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                        <img class="tp-round-32 w-100" src="{{ asset('shopizaa/assets/img/hero/ai/thumb.jpg') }}" alt="">
                     </div>
                     <h4 class="tp-hero-ai-thumb-text tp-ff-jakarta ls-m-2 tp-text-common-white lh-1">SHOPIZAA</h4>
                  </div>
               </div>
               <div class="col-lg-5 col-md-5">
                  <div class="tp-hero-ai-dec tp-bg-common-white tp-round-32 mb-30">
                     <h3 class="tp-hero-ai-dec-title ls-m-3 tp-ff-playfair fw-400 ls-m-4 tp-text-common-black-5 mb-25">ai</h3>
                     <p class="opacity-8 mb-50 tp-ff-dm fw-500 lh-140-per fs-22 ls-m-2 tp-text-common-black-5">Startup agency providing ai services in world - wide since 2016</p>
                     <a href="#" class="tp-btn-cst tp-btn-switch-2-animation d-inline-block text-uppercase tp-text-common-white hover-text-white tp-round-36 lh-1 fs-16 fw-700 tp-ff-dm tp-bg-common-black-5">
                        <span class="d-flex align-items-center justify-content-center">
                           <span class="btn-text">Get started</span>
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
         <div class="col-xl-6 order-1 order-xl-2">
            <div class="tp-hero-ai-right-content mb-100 text-end">
               <h3 class="tp-hero-ai-title mb-75 tp-ff-jakarta fw-600 ls-m-4 text-capitalize tp-text-common-black-5">
                  Fuel Your<br>
                  <span class="title-slide-gradient">
                     <img class="mr-20 tp-live-anim-spin hero-shape" src="{{ asset('shopizaa/assets/img/hero/ai/shape-2.png') }}" alt="">Vision with
                  </span><br>
                  AI Intelligence
                  <span class="d-flex align-items-center justify-content-end">
                     <img class="rounded-circle mr-15 authors" src="{{ asset('shopizaa/assets/img/hero/ai/author.png') }}" alt="">Empower
                  </span>
               </h3>
               <p class="opacity-8 tp-ff-dm fw-400 fs-24 fs-xs-17 ls-m-2 tp-text-common-black-5 lh-140-per">
                  We follow a streamlined, intelligent workflow<br>designed to eliminate friction
               </p>
            </div>
         </div>
         <div class="col-12 order-3">
            <div class="tp-brand-wrap tp-hero-ai-brand pt-125">
               <div class="swiper tp-brand-slide-active">
                  <div class="swiper-wrapper slide-transtion">
                     @for($i = 1; $i <= 9; $i++)
                     <div class="swiper-slide">
                        <div class="tp-brand-item">
                           <a href="#"><img src="{{ asset('shopizaa/assets/img/brands/logo'.($i > 5 ? '-'.($i-5) : ($i == 1 ? '' : '-'.$i)).'.png') }}" alt=""></a>
                        </div>
                     </div>
                     @endfor
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- tp-hero-area-end -->
