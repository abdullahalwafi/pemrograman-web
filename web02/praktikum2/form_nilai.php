<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h2>Form Input Nilai Mahasiswa</h2>
        <form action="form_hasil.php" method="GET">
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="name" name="name" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select" required="required">
                        <option value="Pemograman Web">Pemograman Web</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="UI/UX">UI/UX</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="UTS" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="UTS" name="UTS" placeholder="Masukkan Nilai UTS" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="UAS" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="UAS" name="UAS" placeholder="Masukkan Nilai UAS" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="Tugas" class="col-4 col-form-label">Nilai Tugas</label>
                <div class="col-8">
                    <input id="Tugas" name="Tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>