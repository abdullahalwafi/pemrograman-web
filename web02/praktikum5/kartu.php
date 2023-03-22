<?php
require_once('koneksi.php');
$sql = 'SELECT * FROM kartu';
$rs = $dns->query($sql);

include_once('layouts/header.php');
include_once('layouts/menu.php');
?>

<div class="container">
    <?php
    if (isset($_GET['id'])) {
        if (isset($_POST['proses'])) {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $diskon = $_POST['diskon'];
            $iuran = $_POST['iuran'];
            $sql = "UPDATE kartu SET kode='$kode', nama='$nama', diskon='$diskon', iuran='$iuran' WHERE id=" . $_GET['id'];
            $update = $dns->query($sql);
            if ($update) {
                echo '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
                echo '<meta http-equiv="refresh" content="1; url=kartu.php">';
            } else {
                echo '<div class="alert alert-danger" role="alert">Data gagal diubah</div>';
            }
        }
        $sql = 'SELECT * FROM kartu WHERE id=' . $_GET['id'];
        $kartu = $dns->query($sql);
        $row = $kartu->fetch();
    ?>
        <form method="POST" action="" class="py-3">
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-anchor"></i>
                            </div>
                        </div>
                        <input id="kode" name="kode" type="text" class="form-control" value="<?= $row['kode'] ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Kartu</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adjust"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="diskon" class="col-4 col-form-label">Diskon</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-o-left"></i>
                            </div>
                        </div>
                        <input id="diskon" name="diskon" value="<?= $row['diskon'] ?>" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="iuran" class="col-4 col-form-label">Iuran</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                        <input id="iuran" name="iuran" value="<?= $row['iuran'] ?>" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                    <a href="kartu.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    <?php
    } elseif (isset($_GET['add'])) {
        if (isset($_POST['proses'])) {
            $sql = "INSERT INTO kartu (kode, nama, diskon, iuran) VALUES ('" . $_POST['kode'] . "', '" . $_POST['nama'] . "', '" . $_POST['diskon'] . "', '" . $_POST['iuran'] . "')";
            $tambah = $dns->query($sql);
            if ($tambah) {
                echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
                echo '<meta http-equiv="refresh" content="1; url=kartu.php">';
            } else {
                echo '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>';
            }
        }
    ?>
        <form method="POST" action="" class="py-3">
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-anchor"></i>
                            </div>
                        </div>
                        <input id="kode" name="kode" type="text" class="form-control" value="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Kartu</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adjust"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" type="text" class="form-control" value="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="diskon" class="col-4 col-form-label">Diskon`</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-o-left"></i>
                            </div>
                        </div>
                        <input id="diskon" name="diskon" value="" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="iuran" class="col-4 col-form-label">Iuran</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-up"></i>
                            </div>
                        </div>
                        <input id="iuran" name="iuran" value="" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                    <a href="kartu.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    <?php } elseif (isset($_GET['id_hapus'])) {

        $id = $_GET['id_hapus'];
        $sql = "DELETE FROM kartu WHERE id=$id";
        $delete = $dns->query($sql);
        if ($delete) {
            echo '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>';
            echo '<meta http-equiv="refresh" content="1; url=kartu.php">';
        } else {
            echo '<div class="alert alert-danger" role="alert">Data gagal dihapus</div>';
        }
    } else {
    ?>
        <div class="py-3">
            <a href="?add" class="btn btn-primary">Tambah Kartu</a>
        </div>
        <table class="table py-5">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Diskon</th>
                <th>Iuran</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            foreach ($rs as $row) {
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . $row['kode'] . '</td>';
                echo '<td>' . $row['nama'] . '</td>';
                echo '<td>' . $row['diskon'] . '</td>';
                echo '<td>Rp. ' . number_format($row['iuran']) . '</td>';
                echo '<td><a href="?id=' . $row['id'] . '">Edit</a> | <a  href="?id_hapus=' . $row['id'] . '">Hapus</a></td>';
                echo '</tr>';
            }
            ?>
        </table>
    <?php } ?>
</div>
<?php include_once('layouts/footer.php') ?>