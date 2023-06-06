@extends('admin.layouts.index')
@section('title')
    Create Books
@endsection
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-book"></i>
                </span> Form Book
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h3>Add Book</h3><br />
                <!-- form validasi -->
                <form class="forms-sample" action="{{ url('/dashboard/book/store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Judul Buku</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Judul Buku" value="{{ old('title') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('title') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isbn" class="col-sm-4 col-form-label">No ISBN</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="isbn" name="isbn" placeholder="ISBN"
                                value="{{ old('isbn') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('isbn') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-4 col-form-label">Jumlah Tersedia</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="stok" name="stok"
                                placeholder="Jumlah Tersedia" value="{{ old('stok') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('stok') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
