@extends('layouts.backend.pages.admin.injector.admin-attribute-injection')

@section('sub-title')
    News - Create
@endsection

@section('sub-custom-styles')
@endsection

@section('sub-custom-scripts')
<script type="text/javascript" src="{{ asset('assets/backend/CKEditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
            CKEDITOR.replace( 'description', {
                language: 'en',
            });
        })
</script>
@endsection

@section('page-content')
    <div class="main-container container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                @include('layouts.backend.messages')
                <form class="form-horizontal" method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">
                            <h2 class="m-0">Create News</h2>
                        </div>
                        <div class="card-body">
                            {{ csrf_field() }}
                            <!-- title -->
                            <div class="form-group">
                                <label class="col-form-label" for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}"
                                    required autofocus>
                            </div>
                            <!-- /title -->
                             <!-- description-->
                            <div class="form-group">
                                <label class="col-form-label" for="description">Description</label>
                                <textarea name="description" class="form-control"
                                    id="description"></textarea>
                            </div>
                            <!-- /description-->
                            <!-- link -->
                            <div class="form-group">
                                <label class="col-form-label" for="link">Link</label>
                                <input type="text" name="link" class="form-control" id="link" value="{{ old('link') }}"
                                    required autofocus>
                            </div>
                            <!-- /link -->
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
                                    <a href="{{ route('admin.news.index') }}" class="btn btn-block btn-danger">Cancel</a>
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
