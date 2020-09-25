@extends('master')
@section('body')



<!--================Home Banner Area =================-->

 <section class="banner-area d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <h1>Making Health<br>
                Care Better Together</h1>
                <p>We try our best to provide our users with best medical facitlity available near them. Your satisfaction is our first priority</p>
                <a href="{{route('doctor')}}" class="main_btn">Make an Appointment</a>
                <a href="{{route('department')}}" class="main_btn_light">View Department</a>
            </div>
        </div>
    </div>
</section>

<!--================End Home Banner Area =================-->


<!--================ Feature section start =================-->
<section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h3 class="card-feature__title"><span class="card-feature__icon">
                            <i class="ti-layers"></i>
                        </span>Primary Care</h3>
                        <p class="card-feature__subtitle">We take care of you with our heart and soul.Your primary care is our responsibility</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h3 class="card-feature__title"><span class="card-feature__icon">
                            <i class="ti-heart-broken"></i>
                        </span>Emergency Cases</h3>
                        <p class="card-feature__subtitle">We are always available during any emergency.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h3 class="card-feature__title"><span class="card-feature__icon">
                            <i class="ti-headphone-alt"></i>
                        </span>Online Appointment</h3>
                        <p class="card-feature__subtitle">We provide our costumers with appurtunity to book thier appointments online</p>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--================ Feature section end =================-->

<!--================ Service section start =================-->

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


        </div>
    </div>
</div>
<!--================ Service section end =================-->


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

<!--================ Team section start =================-->
<section class="team-area area-padding">
    <div class="container">
        <div class="area-heading row">
            <div class="col-md-5 col-xl-4">
                <h3>Medcare<br>
                Experience Doctors</h3>
            </div>
            <div class="col-md-7 col-xl-8">
                <p>We have the best team of expierienced and proffessional doctors that are expert in thier own field and always please to help.</p>
            </div>
        </div>

        <div class="row">
            @foreach ($doctors as $doctor)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-team">
                <img class="card-img rounded-0" src="{{asset('images')}}/{{$doctor->image}}" alt="">
                    <div class="card-team__body text-center">
                        <h3><a href="#">Dr.{{$doctor->name}}</a></h3>
                        <p>{{$doctor->qualification}}</p>
                        <div class="team-footer d-flex justify-content-between">
                            <a class="dn_btn" href=""><i class="ti-mobile"></i>{{$doctor->phone}}</a>
                            <ul class="card-team__social">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
<!--================ Team section end  =================-->


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

<!-- ================ Hotline Area Starts ================= -->
<section class="hotline-area text-center area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Emergency hotline</h2>
                <span>(+92) – 2156 567 550</span>
                <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
            </div>
        </div>
    </div>
</section>
<!-- ================ Hotline Area End ================= -->






@endsection
