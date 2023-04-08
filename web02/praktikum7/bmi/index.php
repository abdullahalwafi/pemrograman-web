<?php require_once('class_bmi.php');
$array = [
    [
        "nama" => "Rosalie Naurah",
        "gender" => "Perempuan",
        "umur" => 20,
        "bb" => 46,
        "tb" => 155,
        "bmi" => "18.5",
        "ket" => "Normal (ideal)"
    ],
    [
        "nama" => "Rara Wulan",
        "gender" => "Perempuan",
        "umur" => 21,
        "bb" => 50,
        "tb" => 160,
        "bmi" => "19.5",
        "ket" => "Normal (ideal)"
    ],
    [
        "nama" => "Giagah Putih",
        "gender" => "Laki-laki",
        "umur" => 22,
        "bb" => 60,
        "tb" => 165,
        "bmi" => "21.8",
        "ket" => "Normal (ideal)"
    ]
];
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <span class="card-title">Form CekBMI</span>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div>
                                    <input id="nama" name="nama" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bb" class="col-4 col-form-label">Berat Badan</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-anchor"></i>
                                        </div>
                                    </div>
                                    <input id="bb" name="bb" type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">cm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tb" class="col-4 col-form-label">Tinggi Badan</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-blind"></i>
                                        </div>
                                    </div>
                                    <input id="tb" name="tb" type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">cm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="umur" class="col-4 col-form-label">Umur</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-bell"></i>
                                        </div>
                                    </div>
                                    <input id="umur" name="umur" type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">Thn</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Jenis Kelamin</label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki - laki" required>
                                    <label for="gender_0" class="custom-control-label">Laki - laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan" required>
                                    <label for="gender_1" class="custom-control-label">Perempuan</label>
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
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header">
                    <span class="text-center">Hasil Evaluasi BMI</span>
                </div>
                <div class="card-body">
                    <?php if (isset($_POST['submit'])) {
                        $bmi = new BMI($_POST['bb'], $_POST['tb']);
                        $data = [
                            "nama" => $_POST['nama'],
                            "gender" => $_POST['gender'],
                            "umur" => $_POST['umur'],
                            "bb" => $_POST['bb'],
                            "tb" => $_POST['tb'],
                            "bmi" => $bmi->hitungBMI(),
                            "ket" => $bmi->statusBMI()
                        ];
                        array_push($array, $data);
                    }
                    ?>
                    <table class="table tabled-striped">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php if (isset($_POST['submit'])) {
                                    echo $_POST['nama'];
                                } ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?php if (isset($_POST['submit'])) {
                                    echo $_POST['gender'];
                                } ?></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>:</td>
                            <td><?php if (isset($_POST['submit'])) {
                                    echo $_POST['umur'] . " Tahun";
                                } ?></td>
                        </tr>
                        <tr>
                            <td>Berat Badan</td>
                            <td>:</td>
                            <td><?php if (isset($_POST['submit'])) {
                                    echo $_POST['bb'] . " Kg";
                                } ?></td>
                        </tr>
                        <tr>
                            <td>Tinggi Badan</td>
                            <td>:</td>
                            <td><?php if (isset($_POST['submit'])) {
                                    echo $_POST['tb'] . " cm";
                                } ?></td>
                        </tr>
                        <tr>
                            <td>BMI</td>
                            <td>:</td>
                            <td><?php if (isset($_POST['submit'])) {
                                    echo number_format($bmi->hitungBMI(), 2);
                                } ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td><?php if (isset($_POST['submit'])) {
                                    echo $bmi->statusBMI();
                                } ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 py-4">
            <div class="card shadow">
                <div class="card-header">Data BMI</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>BMI</th>
                            <th>Keterangan</th>
                        </tr>
                        <?php
                        foreach ($array as $row) {
                        ?>
                            <tr>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['gender'] ?></td>
                                <td><?= $row['umur'] ?></td>
                                <td><?= $row['bb'] ?></td>
                                <td><?= $row['tb'] ?></td>
                                <td><?= number_format($row['bmi'], 2) ?></td>
                                <td><?= $row['ket'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>