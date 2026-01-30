<!-- tp-testimonial-area-start -->
<div class="tp-testimonial-area pt-155 tp-bg-common-white pb-120 p-relative z-index-1">
   <img class="tp-testimonial-ai-shape p-absolute" src="{{ asset('shopizaa/assets/img/pricing/shape.png') }}" alt="">
   <div class="container-fluid container-1524">
      <div class="row align-items-end mb-35">
         <div class="col-lg-7">
            <div class="tp-testimonial-ai-title-wrap mb-40">
               <span class="tp-ff-inter fw-500 fs-18 ls-m-4 tp-text-common-black-5 mb-10 d-inline-block tp_fade_anim" data-delay=".3">/ Our Testimonial /</span>
               <h2 class="tp-section-ai-title fs-72 fs-xl-65 fs-lg-55 fs-sm-45 fs-xs-40 fw-600 ls-m-4 tp-ff-jakarta tp-text-common-black-6 tp_fade_anim" data-delay=".5">
                  SHOPIZAA is trusted by <span class="title-slide-gradient">1,1000+</span> Customers.
               </h2>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="d-flex justify-content-lg-end tp_fade_anim" data-delay=".7" data-fade-from="bottom" data-ease="bounce">
               <div class="tp-testimonial-it-ratings-wrap d-flex align-items-center mb-50">
                  <span class="mr-15">
                     <svg width="34" height="38" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34 31.2752C30.4497 35.2736 25.2088 37.8026 19.3628 37.8026C8.66901 37.8026 0 29.3402 0 18.9013C0 8.4624 8.66901 0 19.3628 0C25.2087 0 30.4495 2.52892 33.9998 6.52719L28.4236 11.2411C26.2258 8.76607 22.9816 7.20058 19.3628 7.20058C12.7428 7.20058 7.37627 12.4392 7.37627 18.9014C7.37627 25.3636 12.7428 30.6022 19.3628 30.6022C22.9818 30.6022 26.2262 29.0366 28.4239 26.5613L34 31.2752Z" fill="#10302A" />
                        <path d="M19.3625 25.2024C22.927 25.2024 25.8167 22.3816 25.8167 18.902C25.8167 15.4224 22.927 12.6016 19.3625 12.6016C15.7979 12.6016 12.9082 15.4224 12.9082 18.902C12.9082 22.3816 15.7979 25.2024 19.3625 25.2024Z" fill="#EF2B10" />
                     </svg>
                  </span>
                  <div>
                     <div class="tp-testimonial-it-icon d-flex align-items-center">
                        <span class="tp-ff-inter fw-600 fs-16 lh-1 ls-m-4 text-uppercase tp-text-common-black-1 mr-10">4.9/5</span>
                        <div class="tp-testimonial-it-star lh-1">
                           @for($i = 1; $i <= 5; $i++)
                           <i class="fa-solid fa-star-sharp"></i>
                           @endfor
                        </div>
                     </div>
                     <span class="tp-ff-inter fw-500 fs-13 ls-m-1 tp-text-common-black-1 lh-1">Based on 24 reviews on Clutch</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 p-relative">
            <div class="swiper tp-testimonial-ai-slide-active">
               <div class="swiper-wrapper slide-transtion">
                  @php
                     $testimonials = [
                        [
                           'name' => 'Natalie Kingston',
                           'position' => 'CTO, Infinitum',
                           'image' => 'avatar.png',
                           'growth' => '80%'
                        ],
                        [
                           'name' => 'Kate Leeman',
                           'position' => 'Managing Partner',
                           'image' => 'avatar-2.png',
                           'growth' => '80%'
                        ],
                        [
                           'name' => 'Liana Whitmore',
                           'position' => 'COO, Veridian',
                           'image' => 'avatar-3.png',
                           'growth' => '80%'
                        ],
                     ];
                  @endphp
                  @foreach($testimonials as $testimonial)
                  <div class="swiper-slide tp-bg-common-white">
                     <img class="tp-faq-ai-noise" src="{{ asset('shopizaa/assets/img/body/noise.png') }}" alt="">
                     <div class="row">
                        <div class="col-xxl-5 col-xl-4">
                           <div class="tp-testimonial-ai-avatar mb-30">
                              <img class="rounded-circle mb-25" src="{{ asset('shopizaa/assets/img/testimonial/ai/' . $testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                              <h3 class="tp-ff-jakarta fw-600 fs-28 ls-m-3 tp-text-common-black-5 mb-20">{{ $testimonial['name'] }}</h3>
                              <span class="tp-testimonial-ai-profeson d-inline-block tp-round-36 tp-bg-common-black-5 tp-ff-dm fw-500 fs-18 ls-m-2 tp-text-grey-5">{{ $testimonial['position'] }}</span>
                           </div>
                        </div>
                        <div class="col-xxl-7 col-xl-8">
                           <div class="tp-testimonial-ai-content ml-35 mr-60">
                              <div class="d-sm-flex">
                                 <span class="mr-30">
                                    <svg width="60" height="48" viewBox="0 0 60 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M12.3589 19.1764C13.0909 14.575 18.8427 9.65983 23.3395 9.55525C23.6532 9.55525 23.967 9.45068 24.1761 9.24152C24.3853 9.13694 24.5944 9.03237 24.699 8.71863C26.2677 5.79047 25.431 3.48977 22.8166 1.60738C19.7839 -0.588741 14.9733 1.60738 12.568 3.59435C6.50256 8.61406 0.332502 17.2938 0.646233 25.5556C-0.399539 31.0983 -0.190385 37.0591 1.37827 41.9742C2.42405 45.1115 5.45679 46.6802 8.5941 46.8893C11.7314 47.0987 18.2152 48.0397 21.0388 46.1575C23.8624 44.2749 24.0715 40.6147 24.3853 37.4776C24.699 34.0265 25.6402 27.5425 22.712 24.8235C19.7839 22.2091 11.4177 25.0327 12.3589 19.1764ZM46.8694 19.1764C47.6014 14.575 53.353 9.65983 57.85 9.55525C58.1637 9.55525 58.4774 9.45068 58.6866 9.24152C58.8959 9.13694 59.1049 9.03237 59.2097 8.71863C60.7783 5.79047 59.9417 3.48977 57.3273 1.60738C54.2945 -0.588741 49.484 1.60738 47.0785 3.59435C41.0131 8.61406 34.843 17.294 35.1567 25.5556C34.111 31.0983 34.3201 37.0591 35.8886 41.9742C36.9344 45.1115 39.9671 46.6802 43.1046 46.8893C46.2419 47.0987 52.7257 48.0397 55.5493 46.1575C58.3727 44.2749 58.582 40.6147 58.8958 37.4776C59.2095 34.0265 60.1507 27.5425 57.2225 24.8235C54.2944 22.2091 45.8236 25.0327 46.8694 19.1764Z" fill="#111112" />
                                    </svg>
                                 </span>
                                 <div>
                                    <p class="pt-20 tp-ff-dm fw-400 fs-32 fs-sm-25 fs-xs-20 ls-m-4 lh-150-per tp-text-border-2">
                                       "Partnering with this AI agency was one of the best decisions we've made. From the very first call, their team demonstrated deep technical knowledge and a strong understanding of our business <span class="fw-500 tp-text-common-black-5 opacity-100">goals. They helped design</span> customer segmentation but also significantly boosted"
                                    </p>
                                    <div class="tp-testimonial-ai-expreance d-flex justify-content-between">
                                       <div class="d-sm-flex align-items-end mb-30 mr-30">
                                          <h2 class="tp-ff-jakarta fw-600 fs-52 ls-m-6 tp-text-common-black mb-0 mr-10">{{ $testimonial['growth'] }}</h2>
                                          <span class="tp-ff-jakarta fw-500 fs-18 ls-m-4 tp-text-common-black-5 mb-5">Revenue Growth After Expansion</span>
                                       </div>
                                       <span class="mb-30">
                                          <svg width="60" height="47" viewBox="0 0 60 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M47.6411 27.9464C46.9091 32.5172 41.1573 37.3997 36.6605 37.5036C36.3468 37.5036 36.033 37.6075 35.8239 37.8153C35.6147 37.9191 35.4056 38.023 35.301 38.3347C33.7323 41.2434 34.569 43.5288 37.1834 45.3987C40.2161 47.5802 45.0267 45.3987 47.432 43.4249C53.4974 38.4386 59.6675 29.8165 59.3538 21.6096C60.3995 16.1036 60.1904 10.1825 58.6217 5.3C57.576 2.18351 54.5432 0.625275 51.4059 0.417507C48.2686 0.209576 41.7848 -0.725197 38.9612 1.14452C36.1376 3.01458 35.9285 6.65047 35.6147 9.76678C35.301 13.1949 34.3598 19.6358 37.288 22.3367C40.2161 24.9338 48.5823 22.129 47.6411 27.9464ZM13.1306 27.9464C12.3986 32.5172 6.64701 37.3997 2.15002 37.5036C1.83628 37.5036 1.52255 37.6075 1.3134 37.8153C1.10408 37.9191 0.895092 38.023 0.79034 38.3347C-0.778316 41.2434 0.0583 43.5288 2.67273 45.3987C5.70547 47.5802 10.516 45.3987 12.9215 43.4249C18.9869 38.4386 25.157 29.8163 24.8433 21.6096C25.889 16.1036 25.6799 10.1825 24.1114 5.3C23.0656 2.18351 20.0329 0.625275 16.8954 0.417507C13.7581 0.209576 7.2743 -0.725197 4.45071 1.14452C1.6273 3.01458 1.41798 6.65047 1.10424 9.76678C0.790512 13.1949 -0.150684 19.6358 2.77748 22.3367C5.70564 24.9338 14.1764 22.129 13.1306 27.9464Z" fill="#111112" />
                                          </svg>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="tp-testimonial-ai-navigation">
               <span class="tp-testimonial-ai-prev">
                  <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11.8256 0C8.93142 2.40259 4.2627 4.67135 0.499998 6.00067C4.26271 7.3291 8.93142 9.59697 11.8251 12L9.80773 6.68951L20.7772 6.68989C20.969 6.68966 21.1528 6.61695 21.2882 6.48775C21.3894 6.39142 21.4582 6.26869 21.4861 6.13509C21.514 6.00149 21.4997 5.86301 21.4449 5.73717C21.3902 5.61133 21.2975 5.50377 21.1785 5.42808C21.0596 5.3524 20.9198 5.31199 20.7767 5.31197L9.80767 5.31197L11.8256 0Z" fill="currentColor" />
                  </svg>
               </span>
               <span class="tp-testimonial-ai-next">
                  <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M10.1744 0C13.0686 2.40259 17.7373 4.67135 21.5 6.00067C17.7373 7.3291 13.0686 9.59697 10.1749 12L12.1923 6.68951L1.22276 6.68989C1.03103 6.68966 0.847236 6.61695 0.711766 6.48775C0.610637 6.39142 0.541774 6.26869 0.513884 6.13509C0.485993 6.00149 0.500324 5.86301 0.555071 5.73717C0.609818 5.61133 0.70252 5.50377 0.821456 5.42808C0.940392 5.3524 1.08023 5.31199 1.22327 5.31197L12.1923 5.31197L10.1744 0Z" fill="currentColor" />
                  </svg>
               </span>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- tp-testimonial-area-end -->
