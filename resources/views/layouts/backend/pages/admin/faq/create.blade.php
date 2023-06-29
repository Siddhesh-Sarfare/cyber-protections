@extends('layouts.backend.pages.admin.injector.admin-attribute-injection')

@section('sub-title')
    Faq - Create
@endsection

@section('sub-custom-styles')
@endsection

@section('sub-custom-scripts')
@endsection

@section('page-content')
    <div class="main-container container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                @include('layouts.backend.messages')
                <form class="form-horizontal" method="POST" action="{{ route('admin.faq.store') }}" enctype="multipart/form-data">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">
                            <h2 class="m-0">Create New</h2>
                        </div>
                        <div class="card-body">
                            {{ csrf_field() }}
                            <!-- category -->
                            <div class="form-group">
                                <label class="col-form-label" for="category">Category</label>
                                <select class="form-control" id="category" name="category" required>
                                    <option value="">Select a Category</option>
                                    @foreach($category as $item)
                                    <option value="{{$item->id}}" {{ (old('category') == $item->id)? 'selected': '' }}>{{$item->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- /category -->
                            <!-- question -->
                            <div class="form-group">
                                <label class="col-form-label" for="question">Question</label>
                                <input type="text" name="question" class="form-control" id="question" value="{{ old('question') }}"
                                    required autofocus>
                            </div>
                            <!-- /question -->
                            <!-- answer -->
                            <div class="form-group">
                                <label class="col-form-label" for="answer">Answer</label>
                                <textarea name="answer" class="form-control" id="answer">{{ old('answer') }} </textarea>
                            </div>
                            <!-- /answer -->
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
                                    <a href="{{ route('admin.faq.index') }}" class="btn btn-block btn-danger">Cancel</a>
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
