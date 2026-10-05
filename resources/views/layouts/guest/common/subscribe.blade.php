<!--====== Newsletter Area Start ======-->
<section class="newsletter-area bg-cover-center bg-soft-grey-color p-t-130 p-b-130" style="background-image: url(assets/img/particle/newsletter-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="newsletter-text">
                        <div class="common-heading-v1 text-center m-b-40 p-0 px-5">
                            <span class="tagline">Newsletter Subscribe</span>
                            <h2 class="title">Subscribe Our Newsletter To Get More Update</h2>
                            @include('layouts.admin.alertmessage')
                        </div>

                        <form id="contactUsForm" class="newsletter-form " action="{{ route('fill_contactus.data') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" name="type" value="subscribe">
                            <div class="text-center">
                            <div class="input-field">
                                <input type="email" name="email" placeholder="Enter Your Email Address" required>
                                
                            </div>
                            <button type="submit" class="template-btn m-t-20">Subscribe Now <i class="far fa-arrow-right"></i></button>
                            
                            </div>
                            <p class="text-center m-t-25">On the other hand, we denounce with righteous</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="newsletter-particle-effect d-none d-md-block">
            <img class="particle-1 animate-float-bob-y" src="assets/img/particle/particle-2.png" alt="particle Two">
            <img class="particle-2 animate-zoominout" src="assets/img/particle/particle-3.png" alt="particle Three">
            <img class="particle-3 animate-zoominout" src="assets/img/particle/particle-4.png" alt="particle Four">
            <img class="particle-4 animate-zoominout" src="assets/img/particle/particle-5.png" alt="particle Five">
        </div>
    </section>
<!--====== Newsletter Area End ======-->