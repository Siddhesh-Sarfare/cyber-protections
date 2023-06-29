@extends('layouts.frontend.master')

@section('page-content')
    <main class="main">
        <section class="page-banner text-center relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h1 class="page-title">Resources</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="blogs bluish-purple ptb-100 relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <!-- Tabs nav -->
                        <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <!-- <a class="nav-link mb-3 p-3 shadow active" data-rel="#v-pills-it-tab" data-toggle="pill" href="#v-pills-it" role="tab" aria-controls="v-pills-it" aria-selected="true">
                              <i class="fa fa-desktop mr-3"></i>
                              <span class="font-weight-bold small text-uppercase">IT ACTs</span></a>

                            <a class="nav-link mb-3 p-3 shadow" data-rel="#v-pills-security-tab" data-toggle="pill" href="#v-pills-security" role="tab" aria-controls="v-pills-security" aria-selected="false">
                              <i class="fa fa-key mr-2"></i>
                              <span class="font-weight-bold small text-uppercase">Cyber Security</span></a>

                            <a class="nav-link mb-3 p-3 shadow" data-rel="#v-pills-crime-tab" data-toggle="pill" href="#v-pills-crime" role="tab" aria-controls="v-pills-crime" aria-selected="false">
                              <i class="fa fa-star mr-2"></i>
                              <span class="font-weight-bold small text-uppercase">Cyber Crime</span></a>

                            <a class="nav-link mb-3 p-3 shadow" data-rel="#v-pills-studies-tab" data-toggle="pill" href="#v-pills-studies" role="tab" aria-controls="v-pills-studies" aria-selected="false">
                              <i class="fa fa-graduation-cap mr-2"></i>
                              <span class="font-weight-bold small text-uppercase">Cyber Studies</span></a>

                            <a class="nav-link mb-3 p-3 shadow" data-rel="#v-pills-hacking-tab" data-toggle="pill" href="#v-pills-hacking" role="tab" aria-controls="v-pills-hacking" aria-selected="false">
                              <i class="fa fa-hacker-news mr-2"></i>
                              <span class="font-weight-bold small text-uppercase">Ethical Hacking</span></a>

                            <a class="nav-link mb-3 p-3 shadow" data-rel="#v-pills-cloud-tab" data-toggle="pill" href="#v-pills-cloud" role="tab" aria-controls="v-pills-cloud" aria-selected="false">
                              <i class="fa fa-cloud mr-2"></i>
                              <span class="font-weight-bold small text-uppercase">Cloud Security</span></a> -->

                            <?php
            $c=1;
            foreach ($resourcesList as $resource) {
            ?>

                            <a class="nav-link mb-3 p-3 shadow <?php echo $c == 1 ? 'active' : ''; ?>" data-rel="#<?php echo hash('sha256', $resource->id); ?>-tab"
                                data-toggle="pill" href="#<?php echo hash('sha256', $resource->id); ?>" role="tab"
                                aria-controls="<?php echo hash('sha256', $resource->id); ?>" aria-selected="true">
                                <i class="fa mr-3"></i>
                                <span class="font-weight-bold small text-uppercase"><?php echo $resource->title; ?></span></a>

                            <?php
            $c=$c+1;
            }
            ?>

                        </div>

                        <!-- content here  -->
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <!-- <div class="blog-list-box" id="v-pills-it-tab">
                            <div class="blog-list-img">
                              <img src="{{ asset('assets/frontend/images/itact.jpg') }}" class="transition" alt="IT ACT">
                            </div>
                            <div class="blog-list-content">
                              <p class="blog-list-title sub-title">IT ACT</p>
                              <p class="blog-list-des">The Information Technology Act, 2000 or ITA, 2000 or IT Act, was notified on
                                October 17, 2000. It is the law that deals with cybercrime and electronic commerce in India. In this
                                article, we will look at the objectives and features of the Information Technology Act, 2000. </p>
                              <p class="blog-list-title sub-title">Information Technology Act, 2000</p>
                              <p class="blog-list-des">In 1996, the United Nations Commission on International Trade Law (UNCITRAL)
                                adopted the model law on electronic commerce (e-commerce) to bring uniformity in the law in different
                                countries. </p>
                              <p class="blog-list-des">Further, the General Assembly of the United Nations recommended that all
                                countries must consider this model law before making changes to their own laws. India became the 12th
                                country to enable cyber law after it passed the Information Technology Act, 2000.</p>
                              <p class="blog-list-des">While the first draft was created by the Ministry of Commerce, Government of
                                India as the Ecommerce Act, 1998, it was redrafted as the ‘Information Technology Bill, 1999’, and
                                passed in May 2000.</p>
                            </div>
                          </div>
                          <div class="blog-list-box" id="v-pills-security-tab">
                            <div class="blog-list-img">
                              <img src="{{ asset('assets/frontend/images/blog-7.jpg') }}" class="transition" alt="IT ACT">
                            </div>
                            <div class="blog-list-content">
                              <p class="blog-list-title sub-title">Cyber Security</p>
                              <p class="blog-list-des">Cyber security is the practise of defending against malicious attacks on
                                computers, servers, mobile devices, electronic systems, networks, and data. Information technology
                                security is also known as electronic information security. The term is applicable in numerous
                                contexts, ranging from business to mobile computing, and can be divided into a few categories.</p>
                              <p>
                                Network security is the practise of protecting a computer network against intruders, such as targeted
                                attackers and opportunistic malware.
                              </p>
                              <p>
                                Application security is concerned with safeguarding software and devices from threats. A compromised
                                application could grant access to the data it is intended to safeguard. Prior to the deployment of a
                                programme or device, effective security begins with its design.
                              </p>
                              <p>Information security safeguards the confidentiality and integrity of stored and in-transit data.</p>
                              <p>
                                Operational security encompasses the processes and decisions for managing and safeguarding data
                                assets. The procedures that determine how and where data can be stored or shared, as well as the
                                permissions users have when accessing a network, fall under this umbrella.
                              </p>
                              <p>
                                Business continuity and disaster recovery describe how an organisation responds to a cyber-security
                                incident or any other event that results in the loss of operations or data. The organization's
                                disaster recovery policies dictate how its operations and data are restored to pre-disaster levels of
                                functionality. Business continuity is the plan that an organisation uses to continue operating in the
                                absence of certain resources.
                              </p>
                              <p>
                                End-user education addresses the most unpredictably variable factor in cyber-security: people. By not
                                adhering to good security practises, anyone can unintentionally introduce a virus to an otherwise
                                secure system. It is essential for the security of any organisation to instruct users to delete
                                suspicious email attachments, avoid plugging in unidentified USB drives, and to adhere to a variety of
                                other best practises.
                              </p>
                              <p class="blog-list-title sub-title">Dimensions of the cyberthreat</p>
                              <p class="blog-list-des">The number of data breaches increases each year as the global cyber threat
                                continues to evolve at a rapid rate. Only in the first nine months of 2019, 7,9 billion records were
                                exposed by data breaches, according to a report by RiskBased Security. This number is 112% greater
                                than the number of records exposed during the same time frame in 2018.</p>
                            </div>
                          </div>
                          <div class="blog-list-box" id="v-pills-crime-tab">
                            <div class="blog-list-img">
                              <img src="{{ asset('assets/frontend/images/crime.jpg') }}" class="transition" alt="IT ACT">
                            </div>
                            <div class="blog-list-content">
                              <p class="blog-list-title sub-title">What exactly is cybercrime?</p>
                              <p class="blog-list-des">Cybercrime is any criminal activity that targets or employs a computer,
                                computer network, or networked device. The majority of cybercrime is committed by cybercriminals or
                                hackers seeking financial gain. Occasionally, however, cybercrime targets computers or networks for
                                reasons other than profit. These may be political or personal in nature.</p>
                              <p>
                                Cybercrime can be committed by both individuals and institutions. Some cybercriminals are organised,
                                employ sophisticated methods, and are technically proficient. Others are hacking novices.
                              </p>
                              <p class="blog-list-title sub-title">What types of cybercrime exist?</p>
                              <p class="blog-list-des">Cybercriminal activities include:</p>
                              <ul>
                                <li>Email and internet fraud.</li>
                                <li>Identity theft (where personal information is stolen and used).</li>
                                <li>Theft of financial or payment card information.</li>
                                <li>Theft and sale of company information.</li>
                                <li>Online extortion (demanding money to prevent a threatened attack).</li>
                                <li>Ransomware attacks (a type of cyberextortion).</li>
                                <li>Cryptojacking (where hackers mine crypto currency using resources they do not own) (where hackers
                                  mine crypto currency using resources they do not own).</li>
                                <li>Cyberespionage (where hackers access government or company data).</li>
                                <li>Interfering with systems such that a network is compromised.</li>
                                <li>Violating copyright laws.</li>
                                <li>Violating copyright laws.</li>
                                <li>Selling illegal items online.</li>
                                <li>Soliciting, generating, or possessing child pornographic material.</li>
                              </ul>
                            </div>
                          </div>
                          <div class="blog-list-box" id="v-pills-studies-tab">
                            <div class="blog-list-img">
                              <img src="{{ asset('assets/frontend/images/study.jpg') }}" class="transition" alt="IT ACT">
                            </div>
                            <div class="blog-list-content">
                              <p class="blog-list-title sub-title">Cyber Studies</p>
                              <p class="blog-list-des">The Known Data Breaches of 21 st Century</p>
                              <p class="blog-list-des">Scale of Digital transformation have also scaled up data breaches as attackers
                                exploit the vulnerabilities. In today’s online world, data breaches can affect millions even billions
                                of people at a time.</p>
                              <p class="blog-list-des">Find below some of the biggest data breaches that have affected millions of
                                users. The list below is compiled from various websites over internet (Credit to respective owners).
                              </p>
                              <p class="blog-list-title sub-title">Facebook Security Breach: Upto 50 million users exposed:
                              </p>
                              <p class="blog-list-des">Facebook says almost 50 million of its users were left exposed by a security
                                flaw. The company said attackers were able to exploit a vulnerability in a feature known as “View As”
                                to gain control of people's accounts. The breach was discovered on Tuesday, Facebook said, and it has
                                informed police. Users that had potentially been affected were prompted to re-log-in on Friday.</p>
                              <p>
                                The flaw has been fixed, wrote the firm’s vice-president of product management, Guy Rosen, adding all
                                affected accounts had been reset, as well as another 40 million "as a precautionary step". Facebook -
                                which saw its share price drop more than 3% on Friday - has more than two billion active monthly
                                users.
                              </p>
                              <p>
                                The company has confirmed to reporters that the breach would allow hackers to log in to other accounts
                                that use Facebook's system, of which there are many. This means other major sites, such as AirBnB and
                                Tinder, may also be affected. The firm would not say where in the world the 50 million users are, but
                                it has informed Irish data regulators, where Facebook's European subsidiary is based. The company said
                                the users prompted to log-in again did not have to change their passwords. "Since we’ve only just
                                started our investigation, we have yet to determine whether these accounts were misused or any
                                information accessed. We also don’t know who’s behind these attacks or where they’re based. He added:
                                "People’s privacy and security is incredibly important, and we’re sorry this happened." The company
                                has confirmed that Facebook founder Mark Zuckerberg and its chief operating officer Sheryl Sandberg
                                were among the 50 million accounts affected.
                              </p>
                              <p>
                                Web Link to the complete article: <a class="tw-text-blue-800" href="https://www.bbc.co.uk/news/technology-45686890">https://www.bbc.co.uk/news/technology-45686890</a>
                              </p>
                            </div>
                          </div>
                          <div class="blog-list-box" id="v-pills-hacking-tab">
                            <div class="blog-list-img">
                              <img src="{{ asset('assets/frontend/images/ethic.png') }}" class="transition" alt="IT ACT">
                            </div>
                            <div class="blog-list-content">
                              <p class="blog-list-title sub-title">What is the definition of Ethical Hacking?</p>
                              <p class="blog-list-des">When discussing Ethical Hacking, it is implicitly assumed that we are referring
                                to hacking that is based on ethical or moral principles, without malice. Ethical Hacking is defined as
                                any form of hacking that is authorised by the owner of the target system. It can also refer to the
                                process of employing proactive security measures to defend systems against hackers with malicious data
                                privacy intentions.</p>
                              <p class="blog-list-des">Technically, Ethical Hacking is the process of bypassing or penetrating a
                                system's security measures in order to identify vulnerabilities, data breaches, and potential threats.
                                It is only deemed ethical if the regional or organizational cyber laws/rules are followed. This job is
                                formally known as penetration testing. As the name suggests, this practise involves trying to
                                infiltrate the system and documenting the steps involved in it.</p>
                              <p class="blog-list-des">In conclusion, an Ethical Hacker breaks into the target system before a
                                malicious hacker can. This enables the organization's security team to apply a security patch to the
                                system, effectively preventing an attacker from entering the system or executing a hack.</p>
                              <p class="blog-list-title sub-title">Types of Ethical Hacking
                              </p>
                              <p class="blog-list-des">Web hacking is the process of exploiting software over HTTP by exploiting the
                                software's visual chrome browser, tampering with the URI, or collaborating with HTTP aspects not
                                stored in the URI.</p>
                              <p>
                                <b>System Hacking:</b> Through system hacking, hacktivists gain access to personal computers over a
                                network.
                                Password busting, privilege escalation, malicious software construction, and packet sniffing are the
                                defensive measures that IT security experts can use to combat these threats.
                              </p>
                              <p>
                                An application software database server generates real-time web content. So attackers use Gluing, ping
                                deluge, port scan, sniffing attacks, and social engineering techniques to grab credentials, passcodes,
                                and company information from the web application.
                              </p>
                              <p>
                                An application software database server generates real-time web content. So attackers use Gluing, ping
                                deluge, port scan, sniffing attacks, and social engineering techniques to grab credentials, passcodes,
                                and company information from the web application.
                              </p>
                              <p>
                                Social engineering is the art of manipulating large groups into divulging sensitive information.
                                Criminals utilise eugenics because it is typically simpler to exploit your organic trust issues than
                                to figure out how to spoof your device.
                              </p>
                            </div>
                          </div>
                          <div class="blog-list-box" id="v-pills-cloud-tab">
                            <div class="blog-list-img">
                              <img src="{{ asset('assets/frontend/images/cloud.jpg') }}" class="transition" alt="IT ACT">
                            </div>
                            <div class="blog-list-content">
                              <p class="blog-list-title sub-title">An overview of cloud security</p>
                              <p class="blog-list-des">Cloud security is a collection of procedures and technology designed to address
                                external and internal threats to business security. Organizations need cloud security as they move
                                toward their digital transformation strategy and incorporate cloud-based tools and services as part of
                                their infrastructure.
                              </p>
                              <p class="blog-list-des">The terms digital transformation and cloud migration have been used regularly
                                in enterprise settings over recent years. While both phrases can mean different things to different
                                organizations, each is driven by a common denominator: the need for change.
                              </p>
                              <p class="blog-list-des">As enterprises embrace these concepts and move toward optimizing their
                                operational approach, new challenges arise when balancing productivity levels and security. While more
                                modern technologies help organizations advance capabilities outside the confines of on-premise
                                infrastructure, transitioning primarily to cloud-based environments can have several implications if
                                not done securely.</p>
                              <p class="blog-list-des">Striking the right balance requires an understanding of how modern-day
                                enterprises can benefit from the use of interconnected cloud technologies while deploying the best
                                cloud security practices.</p>
                              <p class="blog-list-title sub-title">What is cloud computing?</p>
                              <p>
                                The "cloud" or, more specifically, "cloud computing" refers to the process of accessing resources,
                                software, and databases over the Internet and outside the confines of local hardware restrictions.
                                This technology gives organizations flexibility when scaling their operations by offloading a portion,
                                or majority, of their infrastructure management to third-party hosting providers.
                              </p>
                              <p>
                                The most common and widely adopted cloud computing services are:
                                <b>IaaS (Infrastructure-as-a-Service):</b> A hybrid approach, where organizations can manage some of
                                their
                                data and applications on-premise while relying on cloud providers to manage servers, hardware,
                                networking, virtualization, and storage needs.
                              </p>
                              <p>
                                <b>PaaS (Platform-as-a-Service):</b> Gives organizations the ability to streamline their application
                                development and delivery by providing a custom application framework that automatically manages
                                operating systems, software updates, storage, and supporting infrastructure in the cloud.
                              </p>
                              <p>
                                <b>SaaS (Software-as-a-Service):</b> Cloud-based software hosted online and typically available on a
                                subscription basis. Third-party providers manage all potential technical issues, such as data,
                                middleware, servers, and storage, minimizing IT resource expenditures and streamlining maintenance and
                                support functions.
                              </p>
                            </div>
                          </div> -->

                        <?php
          foreach ($resourcesList as $resource) {
          ?>

                        <div class="blog-list-box" id="<?php echo hash('sha256', $resource->id); ?>-tab">
                            <div class="blog-list-img">
                                <img src="<?php echo asset('assets/backend/images/resource_images/' . $resource->image_path); ?>" class="transition" alt="<?php echo $resource->title; ?>">
                            </div>
                            <div class="blog-list-content">
                                <p class="blog-list-title sub-title"><?php echo $resource->title; ?></p>

                                {!! html_entity_decode($resource->description) !!}
                            </div>
                        </div>

                        <?php
          }
          ?>


                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        // tailwind.config = {
        //   prefix: 'tw-',
        //   important: true,
        //   corePlugins: {
        //     preflight: false,
        //   }
        // }

        // set content on click
        $('.shadow').click(function(e) {
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

  <script>
    // Get the URL parameter
    const url = new URL(window.location.href);
    const idParam = "#"+(url.hash.substring(1));

  // Check if the parameter exists
  if (idParam) {
    // Find the anchor tag with matching data-rel attribute value
    const anchorTag = document.querySelector(`a[data-rel="${idParam}"]`);

    if (anchorTag) {
      // Simulate a click on the anchor tag
      anchorTag.click();
    }
  }

  </script>


@endsection
