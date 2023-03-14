<?php
include_once('layouts/header.php');
include_once('layouts/menu.php');
?>

<div class="container">
    <h2>Form Input Nilai Mahasiswa</h2>
    <form>
        <div class="form-group row">
            <label for="name" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="name" name="name" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
            <div class="col-8">
                <select id="matkul" name="matkul" class="form-select" required="required">
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

<div class="container mt-3">
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
        if (isset($_GET['submit'])) {
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
        <?php } else { ?>
            <tr>
                <td colspan="7" class="text-center">Data Kosong</td>
            </tr>
        <?php } ?>
    </table>
</div>
<?php include_once('layouts/footer.php') ?>