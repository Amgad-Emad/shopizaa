<!-- tp-text-ai-slider-area-start -->
<div class="tp-text-ai-slider-wrap pb-50">
   <div class="tp-text-ai-slider-single tp-bg-common-angry">
      <div class="swiper-container tp-text-ai-slider-active">
         <div class="swiper-wrapper slide-transtion">
            @for($i = 1; $i <= 3; $i++)
            <div class="swiper-slide">
               <div class="tp-text-ai-slider-content text-center tp-bg-common-angry">
                  <p class="mb-0 tp-ff-jakarta fw-500 fs-52 fs-md-40 ls-m-4 tp-text-common-white">
                     AI Solutions Tailored to Your Business - Automation that Saves Time & Boosts Growth
                  </p>
               </div>
            </div>
            @endfor
         </div>
      </div>
   </div>
   <div class="tp-text-ai-slider-single tp-text-ai-slider-single-2 tp-bg-common-black-5" dir="rtl">
      <div class="swiper-container tp-text-ai-slider-active">
         <div class="swiper-wrapper slide-transtion">
            @php
               $slides = [
                  'Natural Language AI That Understands You -',
                  'Secure, Ethical & Transparent AI - Creative Meets Cognitive Technology',
               ];
            @endphp
            @foreach(array_merge($slides, $slides) as $text)
            <div class="swiper-slide">
               <div class="tp-text-ai-slider-content text-center tp-bg-common-black-5">
                  <p class="mb-0 tp-ff-jakarta fw-500 fs-52 fs-md-40 ls-m-4 tp-text-grey-5">{{ $text }}</p>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
<!-- tp-text-ai-slider-area-end -->
