@extends('layouts.frontend.master')

@section('title')
Blogs
@endsection

@section('keywords'){{ $seo->keywords }}@endsection

@section('description'){{ $seo->description }}@endsection

@section('page-content')
    <main class="main">
        <section class="page-banner text-center relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h1 class="page-title">Blog List</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-detail-main bluish-purple relative ptb-100">
            <div class="container">
                <div class="row">

                    @foreach ($blogList as $blog)
                        <div class="owl-item cloned" style="width: 380px; margin-top: 10px;">
                            <div class="blog-boxs purple">
                                <a href="{{ route('blog_details', $blog->permanent_link) }}" class="blog-img"><img
                                        src="{{ asset("assets/backend/images/blog_images/".$blog->image_path) }}" decoding="async"
                                        alt="Cryptocash is a clean"></a>
                                <div class="blog-content">
                                    <span class="blog-date"> {{ \Carbon\Carbon::parse($blog->created_at)->format('Y-m-d') }}
                                        <span class="blog-authore">{{ $blog->author }}</span></span>
                                    <h5 class="blog-title">
                                        <a href="{{ route('blog_details', $blog->permanent_link) }}">{{ $blog->title }}</a>
                                    </h5>
                                    {!! $blog->description !!}
                                </div>
                                <div class="p-3 mb-1">
                                    <a href="{{ route('blog_details', $blog->permanent_link) }}" class="read-more text-uppercase m-4">Read More
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
