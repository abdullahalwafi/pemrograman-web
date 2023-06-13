@extends('admin.layouts.index')
@section('title')
    Members
@endsection
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Members
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ url('/dashboard/member') }}" class="btn btn-gradient-primary mb-3">Back</a>
                <div class="card">
                    <div class="card-body">
                        @if (session('success') > 0)
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            <meta http-equiv="refresh" content="1; url={{ url('/dashboard/member') }}">
                        @endif
                        <h4 class="card-title">Data Table</h4>
                        <table class="table table-hover">
                            <thead class="table-success table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->gender }}</td>
                                    <td>{{ $member->status }}</td>
                                    <td>{{ $member->address }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
