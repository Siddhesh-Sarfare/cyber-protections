@extends('layouts.frontend.master')

@section('title')
Resources
@endsection

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
