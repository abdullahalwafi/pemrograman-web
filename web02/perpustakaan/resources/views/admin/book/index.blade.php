@extends('admin.layouts.index')
@section('title')
    Books
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
                <a href="{{ url('/dashboard/book/create') }}" class="btn btn-gradient-primary mb-3">+ Tambah Data</a>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Table</h4>
                        <table class="table table-hover">
                            <thead class="table-success table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->stok }}</td>
                                        <td>
                                            <a href="{{ url('') }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ url('') }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form class="d-inline" action="{{ url('/dashboard/book/destroy', $book) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="if(!confirm('Anda yakin akan menghapus anggota {{ $book->name }} ?')) {return false};">Delete</button>
                                            </form>
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
@endsection
