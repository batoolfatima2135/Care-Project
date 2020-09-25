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
            <h2>Department</h2>
            <p>We Care About You</p>
          </div>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="contact.html">Department</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->



<<!--================ Service section start =================-->

<div class="service-area area-padding-top">
    <div class="container">
        <div class="area-heading row">
            <div class="col-md-5 col-xl-4">
                <h3>Awesome<br>
                Health Service</h3>
            </div>
            <div class="col-md-7 col-xl-8">
                <p>We believe everyone should have access to medical health cares with most ease and we take care of that by providing exxellent services with our doctors to everyone.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                    <span class="card-service__icon">
                        <i class="flaticon-brain"></i>
                    </span>
                    <h3 class="card-service__title">Neurology Service</h3>
                    <p class="card-service__subtitle">We have best Neurology service with best doctors with their speacility in this field for our beloved customers</p>
                    <a class="card-service__link" href="#">Learn More</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                    <span class="card-service__icon">
                        <i class="flaticon-tooth"></i>
                    </span>
                    <h3 class="card-service__title">Dental Clinic</h3>
                    <p class="card-service__subtitle">We have best Dental clinic service with best doctors with their speacility in this field for our beloved customers</p>
                    <a class="card-service__link" href="#">Learn More</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                    <span class="card-service__icon">
                        <i class="flaticon-face"></i>
                    </span>
                    <h3 class="card-service__title">Plastic Surgery</h3>
                    <p class="card-service__subtitle">We have best plastic surgery service with best doctors with their speacility in this field for our beloved customers</p>
                    <a class="card-service__link" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                    <span class="card-service__icon">
                        <i class="flaticon-brain"></i>
                    </span>
                    <h3 class="card-service__title">Cardiology</h3>
                    <p class="card-service__subtitle">We have best Cardiology service with best doctors with their speacility in this field for our beloved customers</p>
                    <a class="card-service__link" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                    <span class="card-service__icon">
                        <i class="flaticon-face"></i>
                    </span>
                    <h3 class="card-service__title">pediatrics</h3>
                    <p class="card-service__subtitle">We have best pediatrics service with best doctors with their speacility in this field for our beloved customers</p>
                    <a class="card-service__link" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                    <span class="card-service__icon">
                        <i class="flaticon-brain"></i>
                    </span>
                    <h3 class="card-service__title">Emergency Medicine</h3>
                    <p class="card-service__subtitle">We have best Emergency Medicine service with best doctors with their speacility in this field for our beloved customers</p>
                    <a class="card-service__link" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                    <span class="card-service__icon">
                        <i class="flaticon-brain"></i>
                    </span>
                    <h3 class="card-service__title">Ophthalmology</h3>
                    <p class="card-service__subtitle">We have best Ophthalmology service with best doctors with their speacility in this field for our beloved customers</p>
                    <a class="card-service__link" href="#">Learn More</a>
                </div>
            </div>


        </div>
    </div>
</div>
<!--================ Service section end =================-->




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

@endsection
