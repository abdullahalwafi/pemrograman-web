<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi - Anggota</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Registrasi Anggota Perpustakaan</h3><br>
                        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif 
                        <!-- form validasi -->
                        <form action="{{url('hasil-regist')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Kampus</label>
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Lokasi </label>
                                <input class="form-control" type="text" name="lokasi" value="{{ old('lokasi') }}">
                            </div>
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <input class="form-control" type="number" name="semester" value="{{ old('semester') }}">
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Jenis Kelamin</label>
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio"
                                            class="custom-control-input" value="Laki-Laki">
                                        <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio"
                                            class="custom-control-input" value="Perempuan">
                                        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Tema Favorit</label>
                                <div class="col-8">
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input name="tema[]" id="tema_0" type="checkbox"
                                            class="custom-control-input" value="Fiksi">
                                        <label for="tema_0" class="custom-control-label">Fiksi</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input name="tema[]" id="tema_1" type="checkbox"
                                            class="custom-control-input" value="Horror">
                                        <label for="tema_1" class="custom-control-label">Horror</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input name="tema[]" id="tema_2" type="checkbox"
                                            class="custom-control-input" value="Petualangan">
                                        <label for="tema_2" class="custom-control-label">Petualangan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>