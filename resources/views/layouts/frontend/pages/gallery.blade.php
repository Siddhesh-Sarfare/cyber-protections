@extends('layouts.frontend.master')

@section('title')
Gallery
@endsection

@section('keywords'){{ $seo->keywords }}@endsection

@section('description'){{ $seo->description }}@endsection

@section('page-content')
    <link href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css" rel="stylesheet">
    <main class="main">
        <section class="page-banner text-center relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h1 class="page-title">Gallery</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq bluish-purple relative overflow-h ptb-100">
            <div class="container gallery-container">
                <div class="tz-gallery">
                    <div class="row">
                        @foreach ($galleryList as $gallery)
                            <div class="col-sm-6 col-md-4 p-2 blog-list-img">
                                <a class="lightbox" href="{{ $gallery->file_path }}">
                                    <img alt="Rails" class="transition" height="250" src="{{ $gallery->file_path }}" width="100%" style="object-fit:contain;border:1px solid #efefef;border-radius:0.675rem;box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#more_menu').addClass('active');
        })
    </script>

    <script>
        // tailwind.config = {
        //   prefix: 'tw-',
        //   important: true,
        //   corePlugins: {
        //     preflight: false,
        //   }
        // }
        baguetteBox.run('.tz-gallery');
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
@endsection
