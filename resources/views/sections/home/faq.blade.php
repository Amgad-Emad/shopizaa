<!-- tp-faq-area-start -->
<div class="tp-faq-area tp-bg-common-black-5 pt-155 pb-100 p-relative z-index-1">
   <img class="tp-faq-ai-noise" src="{{ asset('shopizaa/assets/img/body/noise.png') }}" alt="">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 offset-lg-3">
            <div class="tp-faq-ai-title-wrap mb-90">
               <span class="text-anim tp-ff-inter fw-500 fs-18 ls-m-4 tp-text-common-white mb-10 d-inline-block">/ FAQ /</span>
               <h2 class="text-anim tp-section-ai-title fs-72 fs-xl-65 fs-lg-55 fs-sm-45 fs-xs-40 fw-600 ls-m-4 tp-ff-jakarta tp-text-common-white">
                  Explore Answers to<br> Our Most Asked Questions
               </h2>
            </div>
         </div>
         <div class="col-12">
            <div class="tp-faq-wrap tp-faq-cst-tab-content tp-faq-ai-tab-content">
               <div class="accordion mb-60" id="general_faqaccordion">
                  @php
                     $faqs = [
                        [
                           'id' => 'one',
                           'number' => '01',
                           'question' => 'What industries do you serve?',
                           'answer' => 'Partnering with this AI agency was one of the best decisions we\'ve made. From the very first call, their team demonstrated deep technical knowledge and a strong understanding.',
                           'show' => true
                        ],
                        [
                           'id' => 'two',
                           'number' => '02',
                           'question' => 'How do you protect client data and privacy?',
                           'answer' => 'Partnering with this AI agency was one of the best decisions we\'ve made. From the very first call, their team demonstrated deep technical knowledge and a strong understanding.',
                           'show' => false
                        ],
                        [
                           'id' => 'three',
                           'number' => '03',
                           'question' => 'Do you provide support after the project is done?',
                           'answer' => 'Partnering with this AI agency was one of the best decisions we\'ve made. From the very first call, their team demonstrated deep technical knowledge and a strong understanding.',
                           'show' => false
                        ],
                        [
                           'id' => 'four',
                           'number' => '04',
                           'question' => 'How long does an average AI project take?',
                           'answer' => 'Partnering with this AI agency was one of the best decisions we\'ve made. From the very first call, their team demonstrated deep technical knowledge and a strong understanding.',
                           'show' => false
                        ],
                        [
                           'id' => 'five',
                           'number' => '05',
                           'question' => 'Is my data safe and secure?',
                           'answer' => 'Partnering with this AI agency was one of the best decisions we\'ve made. From the very first call, their team demonstrated deep technical knowledge and a strong understanding.',
                           'show' => false
                        ],
                     ];
                  @endphp
                  @foreach($faqs as $faq)
                  <div class="accordion-item tp_fade_anim" data-delay=".3">
                     <h2 class="accordion-header p-relative" id="order_{{ $faq['id'] }}">
                        <button class="tp-faq-btn {{ !$faq['show'] ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_{{ $faq['id'] }}" aria-expanded="{{ $faq['show'] ? 'true' : 'false' }}" aria-controls="order__collapse_{{ $faq['id'] }}">
                           <span class="tp-faq-ai-count">{{ $faq['number'] }}</span>
                           {{ $faq['question'] }}
                           <span class="accordion-btn"></span>
                        </button>
                     </h2>
                     <div id="order__collapse_{{ $faq['id'] }}" class="accordion-collapse collapse {{ $faq['show'] ? 'show' : '' }}" aria-labelledby="order_{{ $faq['id'] }}" data-bs-parent="#general_faqaccordion">
                        <div class="accordion-body tp-faq-details-para">
                           <p>{{ $faq['answer'] }}</p>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- tp-faq-area-end -->
