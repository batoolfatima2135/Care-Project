@extends('master')
@section('body')
  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div
        class="banner_content d-md-flex justify-content-between align-items-center"
        >
        <div class="mb-3 mb-md-0">
            <h2>About Us</h2>
            <p>We care about you</p>
        </div>
        <div class="page_link">
            <a href="index.html">Home</a>
            <a href="contact.html">About Us</a>
        </div>
    </div>
</div>
</div>
</section>
<!--================End Home Banner Area =================-->





<!--================About  Area =================-->
<section class="about-area">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-6 offset-xl-7 col-xl-5">
              <div class="about-content">
                <h4>We care about your<br>
                    health with our heart<br>
                 and soul</h4>
                 <h6>Health is the first important thing in anyones life.Meeting an appropriate doctor according to your requirment is not an easy task</h6>
                 <p>We are solving your this problem by providing you with best services available around you online.Our team of professional doctors are always ready and please to serve yu on this journey of your well being.</p>

                  <a class="link_one" href="#">learn more</a>

              </div>
          </div>
      </div>
  </div>
</section>
<!--================About Area End =================-->



<!--================ appointment Area Starts =================-->
<section class="appointment-area">
    <div class="container">

        <div class="appointment-inner">
            <div class="row">

                <div class="col-sm-12 col-lg-10 offset-lg-1">
                    <div class="appointment-form">
                        <h3>Make an Appointment</h3>
                        <form action="#">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'" required>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" cols="20" rows="7"  placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                            </div>
                            <a href="#" class="main_btn">Make an Appointment</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>
<!--================ appointment Area End =================-->

<!-- ================ testimonial section start ================= -->
<section class="testimonial">
  <div class="container">
      <div class="testi_slider owl-carousel owl-theme">
          <div class="item">
              <div class="testi_item">
                  <div class="testimonial_image">
                      <img src="{{asset('assets')}}/img/elements/tes1.jpg" alt="">
                  </div>
                  <div class="testi_item_content">
                      <p>
                          “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw very years created for seed have without. Can't him fowl his can not ready for game”
                      </p>
                      <h4>- Dr. Suzanne Holroyd -</h4>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="testi_item">
                  <div class="testimonial_image">
                      <img src="{{asset('assets')}}/img/elements/tes1.jpg" alt="">
                  </div>
                  <div class="testi_item_content">
                      <p>
                          “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw very years created for seed have without. Can't him fowl his can not ready for game”
                      </p>
                      <h4>- Dr. Suzanne Holroyd -</h4>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="testi_item">
                  <div class="testimonial_image">
                      <img src="{{asset('assets')}}/img/elements/tes1.jpg" alt="">
                  </div>
                  <div class="testi_item_content">
                      <p>
                          “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw very years created for seed have without. Can't him fowl his can not ready for game”
                      </p>
                      <h4>- Dr. Suzanne Holroyd -</h4>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ================ testimonial section end ================= -->


@endsection
