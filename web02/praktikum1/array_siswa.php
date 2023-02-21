<?php
$mhs1 = ["id" => 1, "nim" => "0110222103", "uts" => 80, "uas" => 84, "tugas" => 78];
$mhs2 = ["id" => 2, "nim" => "0110222104", "uts" => 70, "uas" => 50, "tugas" => 68];
$mhs3 = ["id" => 3, "nim" => "0110222105", "uts" => 60, "uas" => 86, "tugas" => 70];

$ar_nilai = [$mhs1, $mhs2, $mhs3];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <table class="table table-striped">
            <thead class="text-center table-primary">
                <tr>
                    <th rowspan="2" style="vertical-align: middle;">No</th>
                    <th rowspan="2" style="vertical-align: middle;">NIM</th>
                    <th colspan="4">Nilai</th>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td>UAS</td>
                    <td>Tugas</td>
                    <td>Nilai Akhir</td>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                foreach ($ar_nilai as $nilai) {
                    $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas']) / 3;
                ?>
                    <tr>
                        <td><?= $nilai['id'] ?></td>
                        <td><?= $nilai['nim'] ?></td>
                        <td><?= $nilai['uts'] ?></td>
                        <td><?= $nilai['uas'] ?></td>
                        <td><?= $nilai['tugas'] ?></td>
                        <td><?= number_format($nilai_akhir, 1, '.', ','); ?></td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>