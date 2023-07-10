@extends('layouts.frontend.master')

@section('title')
Contact Us
@endsection

@section('page-content')

<main class="main">
    <section class="page-banner text-center relative">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <h1 class="page-title">Contact</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="faq bluish-purple relative overflow-h ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 relative z-index-1">
            <div class="section-heading text-center">
              <h6 class="sub-title text-uppercase wow fadeInUp">Greetings</h6>
              <h2 class="title wow fadeInUp sub-title fs-2 fw-bold">
                Get In Touch</h2>
              <div class="wow fadeInUp text-start">
                <p class="text-left">We at Cyber Protections have taken great efforts in compiling and
                  presenting a
                  comprehensive collection of information pertaining to the field of cyber security. The information has
                  been sourced from various credible sources available on the internet and we have made every effort to
                  provide proper attribution to the respective owners of the content.</p>
                <p>
                  In case you require any additional information or have any queries, please do not hesitate to reach
                  out
                  to
                  us at <b>cyberprotectionsin@gmail.com.</b> Our team will make every effort to respond to your
                  inquiries
                  in
                  a
                  prompt and timely manner.
                </p>
                <p>Thank you for your interest and support.</p>
                <p>Best regards,</p>
                <p>The Cyber Protections Team.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12">
            <ul class="contact-link wow fadeInUp">
              <li>
                <span class="contact-icon"><img src="{{asset("assets/frontend/images/mail.png")}}" alt="Mail Icon"></span>
                <a href="mailto:info@example.com">cyberprotectionsin@gmail.com</a>
              </li>
              <li>
                <span class="contact-icon"><img src="{{asset("assets/frontend/images/phone.png")}}" alt="Phone Icon"></span>
                <a href="tel:+681234567890">(+68) 1234567890</a>
              </li>
              <li>
                <span class="contact-icon"><img src="{{asset("assets/frontend/images/telegram.png")}}" alt="Telegram Icon"></span>
                <a href="https://themes.templatescoder.com/cryptorius/html/demo/1-0/02-Light-Theme/blog-list.html#">Join
                  us on Telegram</a>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </section>
  </main>

@endsection