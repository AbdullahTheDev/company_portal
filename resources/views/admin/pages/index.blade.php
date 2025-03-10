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
                            <div>
                                <h4 class="card-title">All Pages</h4>
                                <a href="{{ route('admin.pages.create', 1) }}" class="btn btn-primary btn-sm">Create New Page</a>
                            </div>
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Created At </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $key => $page)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td> {{ $page->name }} </td>
                                            <td> {{ \Carbon\Carbon::parse($page->created_at)->format('M j, Y | h:i A') }} </td>
                                            <td>
                                                <a href="{{ route('user.pages.view', $page->slug) }}" class="btn btn-primary btn-sm">View</a>
                                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                @if($page->submission_id != null)
                                                    <a href="{{ route('download-pdf', $page->submission_id) }}" class="btn btn-primary btn-sm">Download PDF</a>
                                                @endif
                                            </td>
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
