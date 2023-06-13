@extends('admin.layouts.index')
@section('title')
    Edit members
@endsection
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-book"></i>
                </span> Form member
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
                <h3>Add member</h3><br />
                <!-- form validasi -->
                <form class="forms-sample" action="{{ url('/dashboard/member/update', $member->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Nama Anggota</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nama Anggota" value="{{ $member->name }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('name') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value="{{ $member->email }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('email') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <input name="gender" id="gender_0" type="radio" value="Pria"
                                {{ $member->gender == 'Pria' ? 'checked' : '' }}>
                            <label for="gender_0">Pria</label>
                            <input name="gender" id="gender_1" type="radio" value="Wanita"
                                {{ $member->gender == 'Wanita' ? 'checked' : '' }}>
                            <label for="gender_1">Wanita</label><br>
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('gender') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="status" name="status" placeholder="Status"
                                value="{{ $member->status }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('status') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="address" name="address" value="{{ $member->address }}">{{ $member->address }}</textarea>
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('address') }}</small></i>
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
