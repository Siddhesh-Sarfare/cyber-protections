@extends('layouts.frontend.master')

@section('title')
Resources
@endsection

@section('keywords'){{ $seo->keywords }}@endsection

@section('description'){{ $seo->description }}@endsection

@section('page-content')
    <main class="main">
        <section class="page-banner text-center relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h1 class="page-title animated fadeInUp">Resources</h1>
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
