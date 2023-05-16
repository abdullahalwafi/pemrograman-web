<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman Anggota</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Peminjaman buku</h3><br>
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
                        <form action="{{url('hasil-peminjaman')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis Kelamin</label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio"
                                        class="custom-control-input" value="Laki-Laki" {{old('jenis_kelamin') == "Laki-Laki" ? "checked" : ""}}>
                                    <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio"
                                        class="custom-control-input" value="Perempuan" {{old('jenis_kelamin') == "Perempuan" ? "checked" : ""}}>
                                    <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Pinjam</label>
                                <input class="form-control" type="date" name="tanggal" value="{{ old('tanggal') }}">
                            </div>
                            <div class="form-group">
                                <label >Tema Favorit</label>
                                <select name="tema" id="tema" class="form-control">
                                    <option value="">--Pilih tema --</option>
                                    <option value="Fiksi" {{old('tema') == "Fiksi" ? "selected" : ""}}>Fiksi</option>
                                    <option value="Horor" {{old('tema') == "Horor" ? "selected" : ""}}>Horor</option>
                                    <option value="Petualangan" {{old('tema') == "Petualangan" ? "selected" : ""}}>Petualangan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="isbn">No Isbn</label>
                                <input class="form-control" type="number" name="isbn" value="{{ old('isbn') }}">
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