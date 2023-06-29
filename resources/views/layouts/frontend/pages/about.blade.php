@extends('layouts.frontend.master')

@section('page-content')

<main class="main">
    <section class="page-banner text-center relative">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <h1 class="page-title wow fadeInUp">About us</h1>
          </div>
        </div>
      </div>
    </section>


    <section class="our-mission purple ptb-100 relative overflow-h">
      <div class="container">
        <div class="row flex-center">
          <div class="col-xl-6 col-lg-6 col-md-12 text-center">
            <div class="mission-video wow fadeInLeft">
              <img src="{{asset("assets/frontend/images/mission01.png")}}" alt="Mission">
              <!-- <a href="javascript:void(0)" class="play-icon" data-bs-toggle="modal" data-bs-target="#video-open"> -->
              <span>
                <!-- <i class="fa fa-play" aria-hidden="true"></i> -->
              </span>
              </a>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 wow fadeInRight">
            <div class="mission-content">
              <h3 class="mission-title">Vision</h3>
              <p>Our Country is facing significant challenges from terrorist organization in the form of cyber-attacks
                and information theft. Cyber Protections has taken a proactive approach to address and counteract the
                rapidly growing cyber threats from various sources by raising awareness among the public. Our goal is to
                empower individuals with the necessary knowledge and skills to defend against these malicious cyber
                activities. Through this initiative, we hope to make a meaningful impact in reducing the incidence of
                cybercrime in our nation.</p>
            </div>
          </div>
        </div>
        <div class="row flex-center pt-100">
          <div class="col-xl-6 col-lg-6 col-md-12 order-t-2 wow fadeInLeft">
            <div class="mission-content">
              <h3 class="mission-title">Our Mission</h3>
              <p>The objective of Cyber Protections is to raise awareness and educate the public about the importance of
                acquiring cyber skills and knowledge. Our mission is to equip individuals with the necessary
                understanding and skills to navigate the digital world safely and securely. Through our efforts, we aim
                to make the online community more knowledgeable and prepared to defend against potential cyber threats.
              </p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 text-center order-t-1 wow fadeInRight">
            <img src="{{asset("assets/frontend/images/mission02.png")}}" alt="Mission">
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection