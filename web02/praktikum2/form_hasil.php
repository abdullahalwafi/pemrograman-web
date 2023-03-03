<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">
        <table class="table text-uppercase table-bordered">
            <tr class="table-primary">
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Total Nilai</th>
                <th>keterangan</th>
            </tr>
            <?php

            $nama = $_GET['name'];
            $matkul = $_GET['matkul'];
            $UTS = $_GET['UTS'];
            $UAS = $_GET['UAS'];
            $Tugas = $_GET['Tugas'];
            $total_nilai = ($UTS + $UAS + $Tugas) / 3;

            if ($total_nilai > 75) {
                $keterangan = "Lulus";
            } else {
                $keterangan = "Tidak Lulus";
            }

            ?>
            <tr>
                <td><?= $nama; ?></td>
                <td><?= $matkul; ?></td>
                <td><?= $UTS; ?></td>
                <td><?= $UAS; ?></td>
                <td><?= $Tugas; ?></td>
                <td><?= $total_nilai; ?></td>
                <td><?= $keterangan; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>