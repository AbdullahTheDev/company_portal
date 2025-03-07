@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> All Pages </h3>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div id="summernote"><p>Hello Summernote</p></div>

                            <h4 class="card-title">All Pages</h4>
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Title </th>
                                        <th> Created At </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $key => $page)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td> {{ $page->title }} </td>
                                            <td> {{ \Carbon\Carbon::parse($page->created_at)->format('M j, Y | h:i A') }} </td>
                                            <td>
                                                <a 
                                                href="{{ route('user.pages.view', $page->slug) }}"
                                                >View</a></td>
                                                <a href="{{ route('admin.pages.edit', $page->id) }}">Edit</a>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
