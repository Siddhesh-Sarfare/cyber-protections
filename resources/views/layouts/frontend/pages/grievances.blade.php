@extends('layouts.frontend.master')

@section('title')
Grievances
@endsection

@section('keywords'){{ $seo->keywords }}@endsection

@section('description'){{ $seo->description }}@endsection

@section('page-content')

<main class="main">
    <section class="page-banner text-center relative">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <h1 class="page-title animated fadeInUp">Grievances</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="our-mission purple ptb-100 relative overflow-h">
      <div class="container">
        <div class="row flex-center">
          <div class="col-xl-6 col-lg-6 col-md-12 text-center">
            <div class="mission-video animated fadeInLeft">
              <img src="{{asset("assets/frontend/images/grievances01.png")}}" alt="Mission">
              </a>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 animated fadeInRight">
            <div class="mission-content">
              <h3 class="blog-list-title sub-title">National Cyber Crime Reporting Portal: A Government of
                India Initiative:</h3>
              <p>National Cyber Crime Reporting Portal ( https://cybercrime.gov.in/ ) is an initiative of Government of
                India (GoI) to assist complainants report cyber crime complaints online. This portal provides Special
                focus on reporting cyber crimes against women and children. One can use this portal to anonymously
                report online child pornography, rape and gang rape content. Complaints reported on this portal are
                dealt by respective States/UTs (Union Territories).</p>
              <p>
                Toll Free Helpline: In case of any assistance for filing complaint dial 1930.
              </p>
              <p>
                For tips on Cyber Security: Follow twitter GoI handle @cyberdost
              </p>
              <p>
                Contact Details of Nodal Officers: For State/UT Nodal Officer and Grievance Officer contact details,
                please visit <a class="sub-title"
                  href="https://cybercrime.gov.in/Webform/Crime_NodalGrivanceList.aspx">https://cybercrime.gov.in/Webform/Crime_NodalGrivanceList.aspx</a>
              </p>
              <p>
                Complainants from Mumbai, Maharashtra can also alternatively approach ‘Cyber Police Station’ at below
                address.
              </p>
              <ul style="list-style: none;">
                <li>Cyber Police Station</li>
                <li>Crime Branch, C.I.D., Mumbai
                </li>
                <li>1st Floor, BandraKurla Complex Police Station,
                </li>
                <li>B.K.C., Bandra (E), Mumbai – 400 051.
                </li>
                <li>Phone: +91-22-26504008
                </li>
                <li>Mail to: cyberpst-mum@mahapolice.gov.in
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row flex-center pt-100">
          <div class="col-xl-6 col-lg-6 col-md-12 order-t-2 wow fadeInLeft">
            <div class="mission-content">
              <h3 class="blog-list-title sub-title">Filing Complaints under IT Act
              </h3>
              <p>State IT Secretary is the adjudicating officer under the IT Act, to adjudicate matters in respect of
                contraventions to the Chapter IX of the Information Technology Act 2000 and the matter or matters or
                places or area/areas in the State in which claim for injury or damage does not exceed ₹ 5 crores.
              </p>
              <p>
                The Adjudicating officer has the powers of Civil Court which are conferred on the Cyber Appellate
                Tribunal under sub-section (2) of the section 58.
              </p>
              <p>
                Complainants need to approach State IT Secretary of their respective states. Complainants of Maharashtra
                State can file a complaint for Adjudication under IT Act at below mentioned address.
              </p>
              <ul style="list-style: none;">
                <li>Adjudicating Officer,
                </li>
                <li>c/o Directorate of Information Technology,
                </li>
                <li>7th Floor, Mantralaya, Madam Cama Road, Hutatma Rajguru Chowk,
                </li>
                <li>Nariman Point, Mumbai – 400021
                </li>
                <li>Email: itcases@maharashtra.gov.in
                </li>
              </ul>
              <p>
                With respect to format of Application form and fee, please visit <a class="sub-title"
                  href="https://it.maharashtra.gov.in/">https://it.maharashtra.gov.in/</a>
                (sub-section Filing Complaints under IT Act under IT Act, 2000 Cases)
              </p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 text-center order-t-1 wow fadeInRight">
            <img src="{{asset("assets/frontend/images/grievances02.webp")}}" alt="Mission">
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection