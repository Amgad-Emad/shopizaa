<!-- tp-blog-area-start -->
<div class="tp-blog-area pt-155 tp-bg-common-black-5 section-m-spacing p-relative z-index-1 pb-130">
   <img class="tp-faq-ai-noise" src="{{ asset('shopizaa/assets/img/body/noise.png') }}" alt="">
   <div class="container-fluid container-1524">
      <div class="row align-items-end mb-40">
         <div class="col-lg-8">
            <div class="tp-testimonial-ai-title-wrap mb-30">
               <span class="text-anim tp-ff-inter fw-500 fs-18 ls-m-4 tp-text-grey-5 mb-10 d-inline-block">/ Our Blog /</span>
               <h2 class="text-anim tp-section-ai-title fs-72 fs-xl-65 fs-lg-55 fs-sm-45 fs-xs-40 fw-600 ls-m-4 tp-ff-jakarta tp-text-grey-5">
                  Your Guide to All Things Artificial Intelligence.
               </h2>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="tp-service-ai-btn mb-40 text-lg-end tp_fade_anim" data-delay=".5" data-fade-from="top" data-ease="bounce">
               <a href="#" class="tp-btn-ai tp-btn-ai-black tp-btn-switch-2-animation p-relative hover-text-white d-inline-block text-uppercase tp-text-grey-5 lh-1 fs-16 fw-700 tp-ff-dm">
                  <span class="d-flex align-items-center justify-content-center">
                     <span class="btn-text">See All Blog</span>
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
         @php
            $blogs = [
               [
                  'image' => 'thumb.jpg',
                  'date' => '05 July 2026',
                  'title' => 'Explore curated insights trend and expert.',
                  'delay' => '.4',
                  'from' => 'left'
               ],
               [
                  'image' => 'thumb-2.jpg',
                  'date' => '05 July 2026',
                  'title' => 'All the greatest ideas come unexpectedly',
                  'delay' => '.4',
                  'from' => 'bottom'
               ],
               [
                  'image' => 'thumb-3.jpg',
                  'date' => '05 July 2026',
                  'title' => 'Why is the next-level art called intelligent?',
                  'delay' => '.4',
                  'from' => 'right'
               ],
            ];
         @endphp
         @foreach($blogs as $blog)
         <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="tp-blog-ai-item tp-round-24 mb-30 tp_fade_anim" data-delay="{{ $blog['delay'] }}" data-fade-from="{{ $blog['from'] }}" data-ease="bounce">
               <a href="#" class="tp-round-24 w-100 tp--hover-item fix p-relative d-inline-block">
                  <div class="tp-blog-ai-thumb w-100 tp--hover-img tp-round-24" data-displacement="{{ asset('shopizaa/assets/img/blog/ai/' . $blog['image']) }}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                     <img class="tp-round-24 w-100" src="{{ asset('shopizaa/assets/img/blog/ai/' . $blog['image']) }}" alt="">
                  </div>
               </a>
               <div class="tp-blog-ai-content">
                  <span class="tp-blog-ai-dates tp-round-32 tp-ff-dm mb-15 fw-500 fs-16 tp-text-grey-5 d-inline-block">
                     <svg class="mr-5" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12.0683C0.000926244 12.8416 0.308512 13.5829 0.855289 14.1297C1.40207 14.6765 2.14339 14.984 2.91665 14.985H11.0833C11.8565 14.984 12.5978 14.6765 13.1446 14.1297C13.6914 13.5829 13.999 12.8416 13.9999 12.0683V6.81836H0V12.0683ZM9.9166 9.44334C10.0897 9.44334 10.2588 9.49466 10.4027 9.5908C10.5466 9.68695 10.6588 9.82361 10.725 9.98349C10.7912 10.1434 10.8085 10.3193 10.7748 10.489C10.741 10.6588 10.6577 10.8147 10.5353 10.937C10.4129 11.0594 10.257 11.1428 10.0873 11.1765C9.91757 11.2103 9.74164 11.193 9.58175 11.1267C9.42187 11.0605 9.28521 10.9483 9.18907 10.8045C9.09292 10.6606 9.0416 10.4914 9.0416 10.3183C9.0416 10.0863 9.13379 9.86371 9.29788 9.69962C9.46198 9.53553 9.68454 9.44334 9.9166 9.44334ZM6.99995 9.44334C7.17301 9.44334 7.34218 9.49466 7.48607 9.5908C7.62996 9.68695 7.74211 9.82361 7.80834 9.98349C7.87457 10.1434 7.89189 10.3193 7.85813 10.489C7.82437 10.6588 7.74104 10.8147 7.61867 10.937C7.4963 11.0594 7.34039 11.1428 7.17065 11.1765C7.00092 11.2103 6.82499 11.193 6.66511 11.1267C6.50522 11.0605 6.36857 10.9483 6.27242 10.8045C6.17627 10.6606 6.12496 10.4914 6.12496 10.3183C6.12496 10.0863 6.21714 9.86371 6.38124 9.69962C6.54533 9.53553 6.76789 9.44334 6.99995 9.44334ZM4.0833 9.44334C4.25636 9.44334 4.42553 9.49466 4.56943 9.5908C4.71332 9.68695 4.82547 9.82361 4.89169 9.98349C4.95792 10.1434 4.97525 10.3193 4.94149 10.489C4.90772 10.6588 4.82439 10.8147 4.70202 10.937C4.57965 11.0594 4.42374 11.1428 4.25401 11.1765C4.08428 11.2103 3.90834 11.193 3.74846 11.1267C3.58857 11.0605 3.45192 10.9483 3.35577 10.8045C3.25963 10.6606 3.20831 10.4914 3.20831 10.3183C3.20831 10.0863 3.3005 9.86371 3.46459 9.69962C3.62868 9.53553 3.85124 9.44334 4.0833 9.44334Z" fill="currentColor" />
                        <path d="M11.0833 2.15201H10.4999V1.56868C10.4999 1.41397 10.4385 1.2656 10.3291 1.1562C10.2197 1.04681 10.0713 0.985352 9.9166 0.985352C9.76189 0.985352 9.61352 1.04681 9.50412 1.1562C9.39473 1.2656 9.33327 1.41397 9.33327 1.56868V2.15201H4.66663V1.56868C4.66663 1.41397 4.60518 1.2656 4.49578 1.1562C4.38639 1.04681 4.23801 0.985352 4.0833 0.985352C3.9286 0.985352 3.78022 1.04681 3.67083 1.1562C3.56143 1.2656 3.49998 1.41397 3.49998 1.56868V2.15201H2.91665C2.14339 2.15294 1.40207 2.46052 0.855289 3.0073C0.308512 3.55408 0.000926244 4.2954 0 5.06866L0 5.65199H13.9999V5.06866C13.999 4.2954 13.6914 3.55408 13.1446 3.0073C12.5978 2.46052 11.8565 2.15294 11.0833 2.15201Z" fill="currentColor" />
                     </svg>
                     {{ $blog['date'] }}
                  </span>
                  <h4 class="tp-blog-ai-title tp-ff-jakarta fs-24 fs-md-22 lh-140-per ls-m-4 tp-text-grey-5">
                     <a href="#" class="underline-white">{{ $blog['title'] }}</a>
                  </h4>
               </div>
               <div class="tp-blog-ai-btn d-flex justify-content-between">
                  <a href="#" class="tp-btn-switch-2-animation p-relative hover-text-white d-inline-block text-uppercase tp-text-grey-5 lh-1 fs-16 fw-700 tp-ff-dm">
                     <span class="d-flex align-items-center justify-content-center">
                        <span class="btn-text">Read More</span>
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
                  <span class="tp-blog-ai-comments text-uppercase tp-text-grey-5 lh-1 fs-16 fw-700 tp-ff-dm">
                     <svg class="mr-5" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80051 1.31525C4.50313 1.0937 6.23857 0.980469 8.00027 0.980469C9.76197 0.980469 11.4974 1.09452 13.2 1.31525C14.7771 1.52038 15.9004 2.84228 15.994 4.3734C15.7197 4.28202 15.4354 4.22389 15.1472 4.20027C12.8481 4.00942 10.5373 4.00942 8.23823 4.20027C6.30339 4.3611 4.92324 5.99725 4.92324 7.83855V11.3554C4.92247 12.0313 5.1085 12.6943 5.46079 13.2712C5.81309 13.8481 6.31794 14.3164 6.91962 14.6244L4.74272 16.8005C4.65666 16.8864 4.54705 16.945 4.42775 16.9687C4.30844 16.9924 4.18479 16.9802 4.07241 16.9337C3.96002 16.8871 3.86395 16.8083 3.79632 16.7072C3.72869 16.6061 3.69254 16.4872 3.69243 16.3656V13.0588C3.39474 13.0272 3.09741 12.9922 2.80051 12.9538C1.15286 12.7388 0 11.3053 0 9.68805V4.581C0 2.96454 1.15286 1.52941 2.80051 1.31525Z" fill="currentColor" />
                        <path d="M11.6929 5.28809C10.5639 5.28809 9.44548 5.33486 8.34022 5.42676C7.07658 5.53179 6.1543 6.60341 6.1543 7.83915V11.3552C6.1543 12.5917 7.07987 13.6642 8.34514 13.7676C9.36507 13.8512 10.3965 13.8964 11.4369 13.9029L13.7197 16.1849C13.8057 16.2708 13.9154 16.3293 14.0347 16.353C14.154 16.3767 14.2776 16.3646 14.39 16.318C14.5024 16.2715 14.5985 16.1927 14.6661 16.0916C14.7337 15.9905 14.7699 15.8716 14.77 15.75V13.7889L15.0408 13.7676C16.306 13.665 17.2316 12.5917 17.2316 11.3552V7.83833C17.2316 6.60341 16.3085 5.53179 15.0457 5.42594C13.9305 5.33372 12.8119 5.28773 11.6929 5.28809Z" fill="currentColor" />
                     </svg>
                     01 Comments
                  </span>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
<!-- tp-blog-area-end -->
