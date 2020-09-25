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
            <h2>Registor</h2>
            <p>We Care About You</p>
          </div>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="contact.html">Registor</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

<!--================ appointment Area Starts =================-->
<section class="appointment-area">
    <div class="container">

        <div class="appointment-inner">
            <div class="row">

                <div class="col-sm-12 col-lg-10 offset-lg-1">
                    @if (session()->has('message'))
                    <div class="alert alert-success"> {{session()->get('message')}}</div>

                    @endif
                    <div class="appointment-form">
                        <h3>Registor</h3>
                    <form action="{{Route('patient.store')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" placeholder="Your Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" cols="20" rows="7"  placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>phone Number</label>
                                <input name="phone" type="text" placeholder="Your phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your phone number'" required>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input name="city" type="text" placeholder="Your city" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your city'" required>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <input name="country"  type="text" placeholder="Your countryr" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your country'" required>
                            </div>
                            <input  type="submit" class="main_btn" value="Registor">
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>
<!--================ appointment Area End =================-->

@endsection
