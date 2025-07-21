@extends ('frontend.master')

@section('content')

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/about/Contact US.jpg') }}'); background-size: cover; background-position: center;  height: 400px;position: relative;">
</div>
<!-- Title and Info Boxes -->
<div class="container mt--50 mb--100 pb-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Contact Us</h2>
    </div>

</div>



    <!-- contact areas main -->
    <div class="rts-contact-area-in-page" data-animation="fadeInUp" data-delay="0.2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-info-area-wrapper-p" style="border:2px solid gold;">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Call Us 24/7</span>
                                <a href="#">+(94) 766 888 184</a><br>
                                  <a href="#">+(94) 114 686 767</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Work with us</span>
                                <a href="#">info@iwgc.lk</a><br>
                                  <a href="#">admissions@iwgc.lk</a>
                            </div>
                        </div>
                         <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Our Location</span>
                                <a href="#">No. 85 -1/3, Galle Road,<br> Dehiwala, Sri Lanka</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail-contact-form">
                        <img src="frontend/assets/images/iwgc/FAQBoy.jpg" alt="contact">
                    </div>
                </div>
                <div class="col-lg-4">
                   <div class="contact-form-p new">
                         <!-- Success Message -->
                          @if(session('success'))
                                <div id="success-message" data-message="{{ session('success') }}"></div>
                            @endif
                         <!-- Form -->
                        <form class="form__content" method="post" action="{{ route('inquiry.store') }}" id="contact-form">
                            @csrf
                            <h4 class="title">Get In Touch</h4>
                            <input name="name" id="name" type="text" placeholder="Your Name">
                            <input type="email" name="email" id="email" placeholder="Johndoe@gmail.com">
                            <textarea name="message" id="message" placeholder="Message"></textarea>

                            <button class="rts-btn btn-primary" type="submit">Get In Touch</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact areas main end -->

    <!-- map area start -->
    <div class="google-map-area rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3961.2781199156093!2d79.8633693747564!3d6.8572313931412125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x3ae247348fc4145b%3A0xcc73957fb0150456!2sImperial%20Wisdom%20Graduate%20Campus%2C%2085%201%2F3%20Galle%20Rd%2C%20Dehiwala-Mount%20Lavinia!3m2!1d6.8571900999999995!2d79.8659479!5e0!3m2!1sen!2slk!4v1751964968416!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map area end -->








<script>
document.getElementById('contact-form').addEventListener('submit', function () {
    setTimeout(() => {
        window.location.reload();
    }, 1000); // refresh 1 sec after submission
});
</script>
   
@endsection