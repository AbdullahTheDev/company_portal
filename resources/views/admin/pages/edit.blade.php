@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Page </h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.pages.update', $page->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $page->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="summernote" name="content_1" required>{!! $page->content_1 !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="summernote2" name="content_2" required>{!! $page->content_2 !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="summernote3" name="content_3" required>{!! $page->content_3 !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
            $('#summernote').summernote();
            $('#summernote2').summernote();
            $('#summernote3').summernote();
        });
</script>
@endsection