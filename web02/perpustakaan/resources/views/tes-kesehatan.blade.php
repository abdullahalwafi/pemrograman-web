<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">nama</label> 
                                <div class="col-8">
                                <input id="nama" name="nama"  type="text" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal" class="col-4 col-form-label">Tanggal periksa</label> 
                                <div class="col-8">
                                <input id="tanggal" name="tanggal" type="date" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggallahir" class="col-4 col-form-label">Tanggal lahir</label> 
                                <div class="col-8">
                                <input id="tanggallahir" name="tanggallahir" type="date" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-4">Jenis kelamin</label><br>
                                <div class="col-8">
                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin_laki-laki" value="laki-laki" required>
                                    <label for="jenis_kelamin_laki-laki">Laki-laki</label>
                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin_perempuan" value="perempuan" required>
                                    <label for="jenis_kelamin_perempuan">Perempuan</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card my-3">
                    <table class="table tabled-striped">
                        <tr>
                            <th>Jenis Tes</th>
                            <th>Hasil Pemeriksaan</th>
                            <th>Normal</th>
                        </tr>
                        <tr>
                            <td>Tekanan darah</td>
                            <td></td>
                            <td>120/80 mmHg</td>
                        </tr>
                        <tr>
                            <td>Asam urat</td>
                            <td></td>
                            <td>Pria : &lt; 7 mg/dL<br>Wanita: &lt; 6 mg/dL</td>
                        </tr>
                        <tr>
                            <td>Kolesterol total</td>
                            <td></td>
                            <td>&lt; 200 mg/dL</td>
                        </tr>
                        <tr>
                            <td>Gula darah</td>
                            <td></td>
                            <td>Puasa: 70-110 mg/dL<br>2 jam setelah makan: 100-150 mg/dL<br>Sewaktu/acak : 70-125 mg/dL</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>