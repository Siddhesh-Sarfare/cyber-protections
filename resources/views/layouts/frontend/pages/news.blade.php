@extends('layouts.frontend.master')

@section('title')
News
@endsection

@section('page-content')

<main class="main">
    <section class="page-banner text-center relative">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <h1 class="page-title">News</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="faq bluish-purple relative overflow-h ptb-100">
      <div class="container relative">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 relative z-index-1">
            <div class="section-heading text-center">
              <h2 class="title wow fadeInUp sub-title fs-2 fw-bold"
                style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                Cyber News</h2>
            </div>
          </div>
          <div class="faq-content">
            <div class="tab-content" id="myTabContent">
              <div role="tabpanel" class="tab-pane fade in active show" id="general" aria-labelledby="general-tab">
                <!-- <div class="faq-box">
                  <div class="faq-title">Data Stolen after Hackers hit 14k UK schools</div>
                  <div class="faq-panel">
                    <p>
                      Hackers have launched a successful cyber-attack against schools across the UK and has left
                      confidential information related to pupils leaked online.
                    </p>
                    <p>
                      In total, 14 schools have been impacted, with the sensitive data stolen including passport
                      details, which were likely needed for trips abroad, as well as contracts and pay scales for
                      members of staff.
                    </p>
                    <p>
                      In total, 14 schools have been impacted, with the sensitive data stolen including passport
                      details, which were likely needed for trips abroad, as well as contracts and pay scales for
                      members of staff.
                    </p>
                    <p>
                      In total, 14 schools have been impacted, with the sensitive data stolen including passport
                      details, which were likely needed for trips abroad, as well as contracts and pay scales for
                      members of staff.
                    </p>
                    <p>
                      Commenting on the news and offering their thoughts and advice are the following cybersecurity
                      professionals:
                    </p>
                    <p>
                      <b>Erfan Shadabi, cybersecurity expert at comforte AG:</b>
                      Given the troves of personal information stored within lower and higher education institutions,
                      they will always be a target for cybercriminals. As a private individual, sometimes there’s no way
                      to be sure that the services we use are protected by an adequate amount of security. Even if you
                      don’t enter your ID, name, address, or even payment details, they can be used to start fraudulent
                      activities. This incident is, however, very serious as many children’s PII was compromised. With
                      an ever-growing attack surface, building just another wall around the institution’s network or a
                      segment of sensitive data is not the best way forward, especially when it comes to phishing
                      attacks that are likely to generate some hits. In the end, if you’re an educational institute, the
                      most important thing to do is to protect your students’ and employees’ data, as well as your
                      precious and highly valuable research, rather than the borders around that information. With
                      modern solutions such as format-preserving encryption or tokenization, you can render useless to
                      hackers any PII (including names, addresses, and IDs) or other data you deem sensitive, even if
                      they manage to penetrate your strengthened perimeters and actually get their hands on it.
                    </p>
                    <p>
                      <b>Darren Guccione, CEO, Keeper Security:</b>
                      “This latest incident of Vice Society criminal activity demonstrates why parents and students must
                      make cybersecurity a priority. A password manager is a critical first step that can help them
                      create high-strength, unique passwords for all of their online accounts, applications and systems
                      which will help prevent future attacks and mitigate the risk of sprawl if their information is
                      posted to the dark web and sold. Additionally, they should immediately implement a dark web
                      monitoring service, which will alert them if their stolen credentials and information are
                      available on the dark web. Dark web monitoring will prompt them with an alert in real time so they
                      can take immediate action to protect themselves from a future data breach. Lastly, they should
                      enable two-factor authentication (2FA) on all of their websites and applications that provide this
                      additional protection. 2FA is a powerful and simple way to safeguard accounts from a remote
                      attacker.”
                    </p>
                    <p>Source: <a class="sub-title"
                        href="https://www.itsecurityguru.org/">https://www.itsecurityguru.org/</a></p>
                  </div>
                </div>
                <div class="faq-box">
                  <div class="faq-title">
                    ISC Releases Security Patches for New BIND DNS Software Vulnerabilities
                  </div>
                  <div class="faq-panel">
                    <p>
                      The Internet Systems Consortium (ISC) has released patches to address multiple security
                      vulnerabilities in the Berkeley Internet Name Domain (BIND) 9 Domain Name System (DNS) software
                      suite that could lead to a denial-of-service (DoS) condition.
                    </p>
                    <p>
                      "A remote attacker could exploit these vulnerabilities to potentially cause denial-of-service
                      conditions and system failures," the U.S. Cybersecurity and Infrastructure Security Agency (CISA)
                      said in an advisory released Friday.
                    </p>
                    <p>
                      The open source software is used by major financial firms, national and international carriers,
                      internet service providers (ISPs), retailers, manufacturers, educational institutions, and
                      government entities, according to its website.
                    </p>
                    <p>
                      All four flaws reside in named, a BIND9 service that functions as an authoritative nameserver for
                      a fixed set of DNS zones or as a recursive resolver for clients on a local network.
                    </p>
                    <p>
                      The list of the bugs, which are rated 7.5 on the CVSS scoring system, is as follows -
                    </p>
                    <ul>
                      <li><b>CVE-2022-3094</b> - An UPDATE message flood may cause named to exhaust all available memory
                      </li>
                      <li><b>CVE-2022-3488</b> - BIND Supported Preview Edition named may terminate unexpectedly when
                        processing ECS options in repeated responses to iterative queries</li>
                      <li><b>CVE-2022-3736</b> - named configured to answer from stale cache may terminate unexpectedly
                        while processing RRSIG queries</li>
                      <li><b>CVE-2022-3924</b> - named configured to answer from stale cache may terminate unexpectedly
                        at recursive-clients soft quota</li>
                    </ul>
                    <p>
                      Successful exploitation of the vulnerabilities could cause the named service to crash or exhaust
                      available memory on a target server.
                    </p>
                    <p>
                      Successful exploitation of the vulnerabilities could cause the named service to crash or exhaust
                      available memory on a target server.
                    </p>
                    <p>
                      Although there is no evidence that any of these vulnerabilities are being actively exploited,
                      users are recommended to upgrade to the latest version as soon as possible to mitigate potential
                      threats.
                    </p>
                    <p>Source: <a class="sub-title" href="https://thehackernews.com/">https://thehackernews.com/</a></p>
                  </div>
                </div> -->

                <?php
                  foreach($newsList as $news){
                ?>

                  <div class="faq-box">
                    <div class="faq-title">
                      <?php echo $news->title; ?>
                    </div>
                    <div class="faq-panel">
                      <?php echo $news->description; ?>
                      <p>Source: <a class="sub-title" href="<?php echo $news->link; ?>"><?php echo $news->link; ?></a></p>
                    </div>
                  </div>
                <?php
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script>

    // set content on click
    $('.shadow').click(function (e) {
      e.preventDefault();
      setContent($(this));
    });

    // set content on load
    $('.shadow.active').length && setContent($('.shadow.active'));

    function setContent($el) {
      $('.shadow').removeClass('active');
      $('.blog-list-box').hide();

      $el.addClass('active');
      $($el.data('rel')).show();
    }
  </script>



@endsection