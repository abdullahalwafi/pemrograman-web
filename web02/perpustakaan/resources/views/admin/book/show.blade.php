@extends('admin.layouts.index')
@section('title')
    Show Book
@endsection
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Books
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
                <a href="{{ url('/dashboard/book') }}" class="btn btn-gradient-primary mb-3">Back</a>
                <div class="card">
                    <div class="card-body">
                        @if (session('success') > 0)
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            <meta http-equiv="refresh" content="1; url={{ url('/dashboard/book') }}">
                        @endif
                        <h4 class="card-title">Data Table</h4>
                        <table class="table table-hover">
                            <thead class="table-success table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Stok</th>
                                    <th>ISBN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->stok }}</td>
                                    <td>{{ $book->isbn }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
