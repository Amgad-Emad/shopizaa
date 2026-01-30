<!-- tp-offcanvus-area-start -->
<div class="tp-offcanvas-area">
   <div class="tp-offcanvas">
      <div class="tp-offcanvas-top d-flex align-items-center justify-content-between">
         <div class="tp-offcanvas-logo">
            <a href="{{ url('/') }}">
               <img data-width="150" src="{{asset('shopizaa/assets/img/logo/logo.png')}}" alt="logo">
            </a>
         </div>
         <div class="tp-offcanvas-close-btn">
            <button class="close-btn">
               <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
               </svg>
            </button>
         </div>
      </div>
      <div class="tp-offcanvas-content d-none d-xl-block">
         <h3 class="tp-offcanvas-title">Hello There!</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
      </div>
      <div class="tp-offcanvas-menu d-xl-none">
         <nav></nav>
      </div>
      <div class="tp-offcanvas-gallery d-none d-xl-block">
         <div class="row gx-2">
            @for($i = 1; $i <= 4; $i++)
            <div class="col-md-3 col-3">
               <div class="tp-offcanvas-gallery-img fix">
                  <a class="popup-image" href="{{ asset('shopizaa/assets/img/offcanvas/offcanvas-'.$i.'.jpg') }}">
                     <img src="{{ asset('shopizaa/assets/img/offcanvas/offcanvas-'.$i.'.jpg') }}" alt="">
                  </a>
               </div>
            </div>
            @endfor
         </div>
      </div>
      <div class="tp-offcanvas-contact">
         <h3 class="tp-offcanvas-title sm">Information</h3>
         <ul>
            <li><a href="tel:1245654">+ 4 20 7700 1007</a></li>
            <li><a href="mailto:hello@shopizaa.com">hello@shopizaa.com</a></li>
            <li><a href="#">Avenue de Roma 158b, Lisboa</a></li>
         </ul>
      </div>
      <div class="tp-offcanvas-social">
         <h3 class="tp-offcanvas-title sm">Follow Us</h3>
         <ul>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
         </ul>
      </div>
   </div>
</div>
<div class="body-overlay"></div>
<!-- tp-offcanvus-area-end -->
