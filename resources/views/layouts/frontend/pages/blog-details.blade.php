@extends('layouts.frontend.master')

@section('title')
{{ $blog[0]->title }}
@endsection

@section('keywords'){{ $blog[0]->keywords }}@endsection

@section('description'){{ $blog[0]->title }}@endsection

@section('page-content')


  <main class="main">
    <section class="page-banner text-center relative">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <h1 class="page-title">Blog Details</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="blog-detail-main bluish-purple relative ptb-100">
    @if (isset($blog))
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="blog-detail-img">
              {{-- <img src="/Cryptorius_files/images/blog-10.jpg" alt="Blog Image"> --}}
              <img src="{{ asset("assets/backend/images/blog_images/".$blog[0]->image_path) }}" alt="Blog Image">
            </div>
            <div class="blog-detail-content">
              <ul>
                <li>{{ \Carbon\Carbon::parse($blog[0]->created_at)->format('Y-m-d') }}</li>
                <li>{{ $blog[0]->author }}</li>
              </ul>
              <p class="fs-5 text-dark">{{ $blog[0]->title }}</p>
              <p class="fs-5 text-dark">{!! $blog[0]->description !!}</p>
            </div>
          </div>
        </div>
      </div>
      @else <script>window.location = "{{ route('not_found') }}";</script>
    @endif
    </section>
  </main>



@endsection