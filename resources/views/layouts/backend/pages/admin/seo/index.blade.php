@extends('layouts.backend.pages.admin.injector.admin-attribute-injection')

@section('sub-title')
    SEO
@endsection

@section('sub-custom-styles')
@endsection

@section('sub-custom-scripts')
    <script>
        $(document).ready(function(){
            $(".data-table").dataTable()
            /**
             * for showing delete item popup
             */

            $(document).on('click',"#delete-item",function(){
                $(this).addClass('delete-item-trigger-clicked');

                var options = {'backdrop':'static'};
                $('#delete-modal').modal(options)
                $("#delete-modal-label").text('Delete item?')
            })

            // on click of confirmation
            $(document).on('click',"#delete-action-confirm",function(){
                $('.delete-item-trigger-clicked').siblings(".delete-data-form").submit();
            })

            //  on modal hide
            $('#delete-modal').on('hide.bs.modal',function(){
                $('.delete-item-trigger-clicked').removeClass('delete-item-trigger-clicked')
            })
         })
    </script>
@endsection

@section('page-content')
    <div class="main-container container">
        @include('layouts.backend.messages')
        <!-- heading -->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="text-primary mr-auto">SEO List</h1>
                </div>
                <div class="col d-flex justify-content-end align-self-center">
                    <a href="{{ route('admin.seo.create') }}" class="btn btn-outline-primary pull-right">Create New</a>
                </div>
            </div>
        </div>
        <!-- /heading -->
        <!-- table -->
        <table class="table table-striped table-bordered data-table" cellspacing="0" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Page Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($seoList->isNotEmpty())
                    @foreach($seoList as $item)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $item->page }}</td>
                            <td class="align-middle">
                                <a href="{{ route('admin.seo.edit', $item->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <!-- /table -->
    </div>
@endsection
