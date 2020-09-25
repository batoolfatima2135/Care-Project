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
                <h2>Doctors</h2>
                <p>
                    We care about YOu
                </p>
              </div>
              <div class="page_link">
                <a href="index.html">Home</a>
                <a href="contact.html">Doctors</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================End Home Banner Area =================-->



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



          <!-- ================ Hotline Area Starts ================= -->
          <section class="hotline-area text-center area-padding">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <h2>Emergency hotline</h2>
                          <span>(+01) – 256 567 550</span>
                          <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                      </div>
                  </div>
              </div>
          </section>
          <!-- ================ Hotline Area End ================= -->

@endsection