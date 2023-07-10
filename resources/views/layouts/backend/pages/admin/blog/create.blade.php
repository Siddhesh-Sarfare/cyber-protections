@extends('layouts.backend.pages.admin.injector.admin-attribute-injection')

@section('sub-title')
    Blog - Create
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

<!-- Auto generate text in permanent_link while typing in title -->
<script>
    // Get references to the input fields
    var titleInput = document.getElementById('title');
    var permanentLinkInput = document.getElementById('permanent_link');

    // Add an event listener to the name input field
    titleInput.addEventListener('input', function() {
        // Get the value of the name input field
        var titleValue = titleInput.value;

        // Replace spaces with hyphen in the title
        var formattedTitle = titleValue.replace(/\s+/g, '-');

        // Remove special characters excluding hyphen from the formatted title
        formattedTitle = formattedTitle.replace(/[^-\w]/g, '');

        // Generate the corresponding permanent link
        var permanentLinkValue =  formattedTitle;

        // Set the value of the permanent link input field
        permanentLinkInput.value = permanentLinkValue;
    });
</script>

<!-- block special caracter in permanent_link-->
<script>
    document.getElementById('permanent_link').addEventListener('keypress', function (event) {
        var key = event.keyCode || event.which;
        var char = String.fromCharCode(key);
        
        // Allow underscore character
        if (char === '-') {
            return;
        }
        
        // Block special characters permanent_link
        var specialCharacters = /[^\w]/; // \w matches alphanumeric characters (letters and digits)
        if (specialCharacters.test(char)) {
            event.preventDefault();
        }
    });
</script>
@endsection

@section('page-content')
    <div class="main-container container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                @include('layouts.backend.messages')
                <form class="form-horizontal" method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">
                            <h2 class="m-0">Create New Blog</h2>
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
                            <!-- permanent_link -->
                            <div class="form-group">
                                <label class="col-form-label" for="permanent_link">https://cyberprotections.in/blog_details/</label>
                                <input type="text" name="permanent_link" class="form-control" id="permanent_link" value="{{ old('permanent_link') }}"
                                    required autofocus>
                            </div>
                            <!-- /permanent_link -->
                             <!-- author -->
                            <div class="form-group">
                                <label class="col-form-label" for="author">Author1</label>
                                <input type="text" name="author" class="form-control" id="author" value="{{ old('author') }}"
                                    required autofocus>
                            </div>
                            <!-- /author -->
                             <!-- description-->
                            <div class="form-group">
                                <label class="col-form-label" for="description">Description</label>
                                <textarea name="description" class="form-control"
                                    id="description"></textarea>
                            </div>
                            <!-- /description-->
                            <!-- image -->
                            <div class="form-group mb-0">
                                <label class="col-form-label" for="blog-image">Image</label> 
                                <input type="file" name="blog-image" class="form-control" id="blog-image">
                            </div>
                            <!-- /image -->
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
                                    <a href="{{ route('admin.blog.index') }}" class="btn btn-block btn-danger">Cancel</a>
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
