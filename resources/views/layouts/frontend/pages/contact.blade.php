@extends('layouts.frontend.master')

@section('title')
Contact Us
@endsection

@section('keywords'){{ $seo->keywords }}@endsection

@section('description'){{ $seo->description }}@endsection

@push('styles')
    <style>
        .required {
            color: red;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#mobile").keydown(function(e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                    (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode >
                        105)) {
                    e.preventDefault();
                }
            });
        })
    </script>
@endpush

@section('page-content')

<main class="main">
    <section class="page-banner text-center relative">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <h1 class="page-title animated fadeInUp">Contact</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="faq bluish-purple relative overflow-h ptb-100">
      <div class="container relative">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="col-xl-12 col-lg-12 col-md-12 relative z-index-1">
                <div class="section-heading text-center">
                  <h6 class="sub-title text-uppercase animated fadeInUp">Greetings</h6>
                  <h2 class="title animated fadeInUp sub-title fs-2 fw-bold">Get In Touch</h2>
                </div>
                <div class="text-start">
                  <p class="animated fadeInUp text-left">We at Cyber Protections have taken great efforts in compiling and
                    presenting a
                    comprehensive collection of information pertaining to the field of cyber security. The information
                    has
                    been sourced from various credible sources available on the internet and we have made every effort
                    to
                    provide proper attribution to the respective owners of the content.</p>
                  <p class="animated fadeInUp text-left">
                    In case you require any additional information or have any queries, please do not hesitate to reach
                    out
                    to
                    us at <b>cyberprotectionsin@gmail.com.</b> Our team will make every effort to respond to your
                    inquiries
                    in
                    a
                    prompt and timely manner.
                  </p>
                  <p class="animated fadeInUp text-left">Thank you for your interest and support.</p>
                  <p class="animated fadeInUp text-left">Best regards,</p>
                  <p class="animated fadeInUp text-left">The Cyber Protections Team.</p>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 mt-4">
              <ul class="contact-link wow fadeInUp">
                <li>
                  <span class="contact-icon"><img src="{{asset("assets/frontend/images/mail.png")}}" alt="Mail Icon"></span>
                  <a href="mailto:cyberprotectionsin@gmail.com">cyberprotectionsin@gmail.com</a>
                </li>
                <li>
                  <span class="contact-icon"><img src="{{asset("assets/frontend/images/phone.png")}}" alt="Phone Icon"></span>
                  <a href="tel:+681234567890">(+68) 1234567890</a>
                </li>
                <li>
                  <span class="contact-icon"><img src="{{asset("assets/frontend/images/telegram.png")}}" alt="Telegram Icon"></span>
                  <a href="#">Join
                    us on Telegram</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="col-xl-12 col-lg-12 col-md-12 relative z-index-1">
              <div class="section-heading text-center">
                <h2 class="title animated fadeInUp sub-title fs-2 fw-bold">
                  Feedback Form</h2>
                <h4 class="title animated fadeInUp sub-title fs-6">
                  Viewers can provide feedback on their experience using the website from a security perspective,
                  including ease of use, security features, and overall satisfaction.</h4>
              </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
              <form class="get-touch animated fadeInUp" method="POST" enctype="multipart/form-data" action="{{ route('contactStore') }}">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="ds form-group has-placeholder">
                                <label for="name">Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" name="name" id="name"
                                    value="{{ old('name') }}" class="form-control" placeholder="Name" required
                                    autocomplete="off">
                                <div class="row d-flex flex-column align-items-center">
                                    <div class="color-main" style="color: #f00;">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="ds form-group has-placeholder">
                                <label for="email">Email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" size="30" name="email" id="email"
                                    value="{{ old('email') }}" class="form-control" placeholder="Email" required
                                    autocomplete="off">
                                <div class="row d-flex flex-column align-items-center">
                                    <div class="color-main" style="color: #f00;">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="ds form-group has-placeholder">
                                <label for="mobile">Mobile No.
                                    <span class="required">*</span>
                                </label>
                                <input type="text" size="30" name="mobile" id="mobile" minlength="10"
                                    maxlength="13" value="{{ old('mobile') }}" class="form-control"
                                    placeholder="Mobile" required autocomplete="off">
                                <div class="row d-flex flex-column align-items-center">
                                    <div class="color-main" style="color: #f00;">
                                        @error('mobile')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="comment">Your Message
                                    <span class="required">*</span>
                                </label>
                                <textarea class="form-control" name="comment" id="comment" placeholder="Your Message*" required>{{ old('comment') }}</textarea>
                                <div class="row d-flex flex-column align-items-center">
                                    <div class="color-main" style="color: #f00;">
                                        @error('comment')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center mt-10">
                            <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                                <button type="submit" class="button">Submit feedback</button>
                            </div>
                        </div>
                    </div>
               </form>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main>
  <script>
      $(document).ready(function() {
          $('#more_menu').addClass('active');
      })
  </script>

@endsection