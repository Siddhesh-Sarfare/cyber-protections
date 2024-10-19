@extends('layouts.backend.pages.admin.injector.admin-attribute-injection')

@section('sub-title')
    SEO - Create
@endsection

@section('sub-custom-styles')

<link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
      rel="stylesheet"
    />
  <style type="text/css">
    .bootstrap-tagsinput .tag {
      margin: 2px;
      color: white !important;
      background-color: #0d6efd;
      padding: 0.2rem;
    }
  </style>

@endsection

@section('sub-custom-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
  <script>
    $(function () {
      $('input')
        .on('change', function (event) {
          var $element = $(event.target);
          var $container = $element.closest('.example');

          if (!$element.data('tagsinput')) return;

          var val = $element.val();
          if (val === null) val = 'null';
          var items = $element.tagsinput('items');

          $('code', $('pre.val', $container)).html(
            $.isArray(val)
              ? JSON.stringify(val)
              : '"' + val.replace('"', '\\"') + '"'
          );
          $('code', $('pre.items', $container)).html(
            JSON.stringify($element.tagsinput('items'))
          );
        })
        .trigger('change');
    });
  </script>
@endsection

@section('page-content')
    <div class="main-container container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                @include('layouts.backend.messages')
                <form class="form-horizontal" method="POST" action="{{ route('admin.seo.store') }}" enctype="multipart/form-data">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">
                            <h2 class="m-0">Create New</h2>
                        </div>
                        <div class="card-body">
                            {{ csrf_field() }}
                            <!-- page -->
                            <div class="form-group">
                                <label class="col-form-label" for="page">Page</label>
                                <select class="form-control" id="page" name="page" required>
                                    <option value="">Select a Page</option>
                                    <option value="home" {{ (old('page') == 'home')? 'selected': '' }}>Home Page</option>
                                    <option value="about" {{ (old('page') == 'about')? 'selected': '' }}>About Page</option>
                                    <option value="resource" {{ (old('page') == 'resource')? 'selected': '' }}>Resource Page</option>
                                    <option value="faqs" {{ (old('page') == 'faqs')? 'selected': '' }}>FAQs Page</option>
                                    <option value="gallery" {{ (old('page') == 'gallery')? 'selected': '' }}>Gallery Page</option>
                                    <option value="news" {{ (old('page') == 'news')? 'selected': '' }}>News Page</option>
                                    <option value="blog" {{ (old('page') == 'blog')? 'selected': '' }}>Blogs List Page</option>
                                    <option value="grievance" {{ (old('page') == 'grievance')? 'selected': '' }}>Grievance Page</option>
                                    <option value="contact" {{ (old('page') == 'contact')? 'selected': '' }}>Contact Page</option>
                                    <option value="policy" {{ (old('page') == 'policy')? 'selected': '' }}>Policy Page</option>
                                    <option value="not_found" {{ (old('page') == 'not_found')? 'selected': '' }}>404 Not Found Page</option>
                                </select>
                            </div>
                            <!-- /page -->
                            <!-- keywords -->
                            <div class="form-group">
                                <label class="col-form-label" for="keywords">Keywords</label>
                                <br/>
                                <input type="text" name="keywords" class="form-control" id="keywords" value="{{ old('keywords') }}" data-role="tagsinput" required autofocus>
                            </div>
                            <!-- /keywords -->
                            <!-- description -->
                            <div class="form-group">
                                <label class="col-form-label" for="description">Description</label>
                                <textarea name="description" class="form-control" id="description">{{ old('description') }} </textarea>
                            </div>
                            <!-- /description -->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <!-- submit -->
                                    <button type="submit" class="btn btn-block btn-success">Create</button>
                                    <!-- /submit -->
                                </div>
                                <div class="col">
                                    <!-- submit -->
                                    <a href="{{ route('admin.seo.index') }}" class="btn btn-block btn-danger">Cancel</a>
                                    <!-- /submit -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
