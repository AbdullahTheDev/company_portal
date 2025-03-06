@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Page</h1>
    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" required></textarea>
        </div>
        <div class="form-group">
            <label for="slug">Custom URL</label>
            <input type="text" class="form-control" name="slug" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection