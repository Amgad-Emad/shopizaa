<!-- tp-portfolio-area-start -->
<div class="tp-portfolio-area pt-155">
   <div class="container-fluid container-1524">
      <div class="row">
         <div class="col-lg-5">
            <div class="tp-portfolio-ai-subtitle">
               <span class="text-anim tp-ff-inter fw-500 fs-18 ls-m-4 tp-text-common-black-5 mb-10 d-inline-block">/ Our Portfolio /</span>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="tp-portfolio-ai-title ml-80">
               <h2 class="text-anim tp-section-ai-title fs-72 fs-xl-65 fs-lg-52 fs-sm-45 fs-xs-40 ls-m-4 fw-600 tp-ff-jakarta mb-30 tp-text-common-black-6">
                  Building the Future with Intelligent Services
               </h2>
               <div class="tp_fade_anim" data-delay=".4">
                  <p class="tp-about-ai-para tp-ff-dm mb-55 fw-400 fs-22 ls-m-2 lh-150-per tp-text-common-black-6">
                     From strategy to deployment, we fuse cutting-edge technology with creative thinking to craft digital products that learn adapt.
                  </p>
               </div>
               <div class="tp_fade_anim" data-delay=".6" data-fade-from="bottom" data-ease="bounce">
                  <a href="#" class="tp-btn-ai tp-btn-switch-2-animation p-relative hover-text-white d-inline-block text-uppercase tp-text-common-black-6 lh-1 fs-16 fw-700 tp-ff-dm">
                     <span class="d-flex align-items-center justify-content-center">
                        <span class="btn-text">See All Portfolio</span>
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
   </div>
   <div class="content-row p-relative mt-120">
      <div class="tp-snap-slider-holder">
         <div class="tp-snap-slider-images">
            <div class="tp-snap-slider-images-wrapper">
               @php
                  $portfolios = [
                     ['image' => 'thumb.jpg', 'number' => '001'],
                     ['image' => 'thumb-2.jpg', 'number' => '002'],
                     ['image' => 'thumb-3.jpg', 'number' => '003'],
                  ];
               @endphp
               @foreach($portfolios as $portfolio)
               <div class="tp-snap-slide trigger-item change-header-color">
                  <div class="img-mask p-relative">
                     <div class="section-image trigger-item-link">
                        <img src="{{ asset('shopizaa/assets/img/portfolio/ai/' . $portfolio['image']) }}" class="item-image grid__item-img" alt="">
                     </div>
                     <h3 class="tp-snap-slide-bigtext mb-0">{{ $portfolio['number'] }}</h3>
                     <img src="{{ asset('shopizaa/assets/img/portfolio/ai/' . $portfolio['image']) }}" class="grid__item-img grid__item-img--large" alt="">
                  </div>
               </div>
               @endforeach
            </div>
         </div>
         <div class="tp-snap-slider-thumbs">
            <div class="tp-snap-slider-thumbs-wrapper">
               @foreach($portfolios as $portfolio)
               <div class="thumb-slide" data-cursor="OPEN">
                  <a href="#" class="thumb-slide-img cursor-hide">
                     <img src="{{ asset('shopizaa/assets/img/portfolio/ai/thumb-sm' . ($loop->first ? '' : '-' . ($loop->index + 1)) . '.jpg') }}" class="item-image grid__item-img" alt="">
                  </a>
               </div>
               @endforeach
            </div>
         </div>
         <div class="tp-snap-slider-captions">
            <div class="tp-snap-slider-captions-wrapper content-full-width">
               @php
                  $captions = [
                     ['title' => 'Architecture', 'tags' => ['Branding', 'Ai Agency', 'Website']],
                     ['title' => 'Data Intelligence', 'tags' => ['Branding', 'Ai Agency', 'Website']],
                     ['title' => 'Intelligent Stack', 'tags' => ['Branding', 'Ai Agency', 'Website']],
                  ];
               @endphp
               @foreach($captions as $caption)
               <div class="tp-snap-slide-caption">
                  <div class="slide-title"><span>{{ $caption['title'] }}</span></div>
                  <div class="slide-subtitle d-flex align-items-center">
                     @foreach($caption['tags'] as $tag)
                     <span>{{ $tag }}</span>
                     @endforeach
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
<!-- tp-portfolio-area-end -->
