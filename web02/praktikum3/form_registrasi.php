<?php require_once('proses_registrasi.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="card my-3">
            <div class="card-header">
                <h2 class="card-title">Form Input IT Club GDSC</h2>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <input id="nim" name="nim" placeholder="Masukan NIM" type="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Masukan nama" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input id="email" name="email" placeholder="Masukan Email" type="email" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required>
                                <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="wanita" required>
                                <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="program_studi" class="col-4 col-form-label">Program Studi</label>
                        <div class="col-8">
                            <select id="program_studi" name="program_studi" class="custom-select" required>
                                <?php foreach ($prodi as $prodikey => $prodivalue) { ?>
                                    <option value='<?= $prodikey ?>'><?= $prodivalue ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="domisili" class="col-4 col-form-label">Domisili</label>
                        <div class="col-8">
                            <select id="domisili" name="domisili" class="custom-select" required>
                                <?php foreach ($domisili as $domisili) { ?>
                                    <option value='<?= $domisili ?>'><?= $domisili ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Skill Programming</label>
                        <div class="col-8">
                            <?php foreach ($skills as $skill => $value) { ?>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="skill[]" id="<?= $skill ?>" type="checkbox" class="custom-control-input" value="<?= $skill ?>">
                                    <label for="<?= $skill ?>" class="custom-control-label"><?= $skill ?></label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr class="table-primary text-uppercase">
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Program Studi</th>
                        <th>Domisili</th>
                        <th>Skill</th>
                        <th>Skor</th>
                        <th>Kriteria</th>
                    </tr>
                    <?php
                    if (isset($_POST['submit'])) {
                        $nim = $_POST['nim'];
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $program_studi = $_POST['program_studi'];
                        $domisili = $_POST['domisili'];
                    ?>
                        <tr>
                            <td><?= $nim ?></td>
                            <td><?= $nama ?></td>
                            <td><?= $email ?></td>
                            <td><?= $jenis_kelamin ?></td>
                            <td><?= $program_studi ?></td>
                            <td><?= $domisili ?></td>
                            <td>
                                <?php
                                $skor = 0;
                                if (isset($_POST['skill'])) {
                                    foreach ($_POST['skill'] as $skill) {
                                        foreach ($skills as $key => $value) {
                                            if ($skill == $key) {
                                                $skor  += $value;
                                            }
                                        }
                                        echo $skill . ", ";
                                    }
                                }
                                ?>
                            </td>
                            <td><?= $skor ?></td>
                            <td>
                                <?php
                                if ($skor == 0) {
                                    echo "Tidak Memadai";
                                } elseif ($skor > 0 && $skor <= 40) {
                                    echo "Kurang";
                                } elseif ($skor > 40 && $skor <= 60) {
                                    echo "Cukup";
                                } elseif ($skor > 60 && $skor <= 100) {
                                    echo "baik";
                                } elseif ($skor > 100 && $skor <= 150) {
                                    echo "Sangat Baik";
                                } else {
                                    echo "errror";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } else { ?>
                        <tr class="text-center">
                            <td colspan="9">Data Tidak Ada</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>