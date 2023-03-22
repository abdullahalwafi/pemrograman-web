<?php
require_once('koneksi.php');
$sql = 'SELECT *, kartu.nama AS kartu, pelanggan.nama AS nama FROM pelanggan INNER JOIN kartu ON kartu.id = pelanggan.kartu_id';
$rs = $dns->query($sql);

include_once('layouts/header.php');
include_once('layouts/menu.php');
?>

<div class="container">
    <?php
    if (isset($_GET['id'])) {
        if (isset($_POST['proses'])) {
            $sql = 'UPDATE pelanggan SET kode="' . $_POST['kode'] . '", nama="' . $_POST['nama'] . '", jk="' . $_POST['jk'] . '", tmp_lahir="' . $_POST['tmp_lahir'] . '", tgl_lahir="' . $_POST['tgl_lahir'] . '", email="' . $_POST['email'] . '", kartu_id="' . $_POST['kartu_id'] . '" WHERE id=' . $_GET['id'];
            $update = $dns->query($sql);
            if ($update) {
                echo '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
                echo "<meta http-equiv='refresh' content='1;url=pelanggan.php'>";
            } else {
                echo '<div class="alert alert-danger" role="alert">Data gagal diubah</div>';
            }
        }
        $sql = 'SELECT * FROM pelanggan WHERE id=' . $_GET['id'];
        $pelanggan = $dns->query($sql);
        $row = $pelanggan->fetch();
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
                        <input id="kode" name="kode" type="text" class="form-control" value="<?= $row['kode'] ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
                <div class="col-8">

                    <input id="laki" name="jk" type="radio" value="L" <?php if ($row['jk'] == 'L') {
                                                                            echo "checked='checked'";
                                                                        } else {
                                                                            echo "";
                                                                        } ?> required>
                    <label for="laki">Laki - Laki</label>

                    <input id="Perempuan" name="jk" type="radio" value="P" <?php if ($row['jk'] == 'P') {
                                                                                echo "checked='checked'";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> required>
                    <label for="Perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-map"></i>
                            </div>
                        </div>
                        <input id="tmp_lahir" name="tmp_lahir" value="<?= $row['tmp_lahir'] ?>" type="text" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calender-day"></i>
                            </div>
                        </div>
                        <input id="tgl_lahir" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>" type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <input id="email" name="email" value="<?= $row['email'] ?>" type="email" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="kartu" class="col-4 col-form-label">Kartu</label>
                <div class="col-8">
                    <?php
                    $sqlkartu = "SELECT * FROM kartu";
                    $rskartu = $dns->query($sqlkartu);

                    $sqlkartu2 = "SELECT * FROM kartu WHERE id=" . $row['kartu_id'];
                    $rskartu2 = $dns->query($sqlkartu2);
                    $rowkartu2 = $rskartu2->fetch();
                    ?>
                    <select id="kartu" name="kartu_id" class="custom-select" required>
                        <option value="<?= $rowkartu2['id'] ?>"><?= $rowkartu2['nama'] ?></option>
                        <?php
                        foreach ($rskartu as $rowkartu) {
                        ?>
                            <option value="<?= $rowkartu['id'] ?>"><?= $rowkartu['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                    <a href="pelanggan.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    <?php
    } elseif (isset($_GET['add'])) {
        if (isset($_POST['proses'])) {
            $sql = "INSERT INTO pelanggan (kode, nama, jk, tmp_lahir, tgl_lahir, email, kartu_id) VALUES ('" . $_POST['kode'] . "', '" . $_POST['nama'] . "', '" . $_POST['jk'] . "', '" . $_POST['tmp_lahir'] . "', '" . $_POST['tgl_lahir'] . "', '" . $_POST['email'] . "', '" . $_POST['kartu_id'] . "')";
            $tambah = $dns->query($sql);
            if ($tambah) {
                echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
                echo '<meta http-equiv="refresh" content="1; url=pelanggan.php">';
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
                        <input id="kode" name="kode" type="text" class="form-control" value="" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" type="text" class="form-control" value="" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
                <div class="col-8">
                    <input id="laki" name="jk" type="radio" value="L" required>
                    <label for="laki">Laki - Laki</label>

                    <input id="Perempuan" name="jk" type="radio" value="P" required>
                    <label for="Perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-map"></i>
                            </div>
                        </div>
                        <input id="tmp_lahir" name="tmp_lahir" value="" type="text" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calender-day"></i>
                            </div>
                        </div>
                        <input id="tgl_lahir" name="tgl_lahir" value="" type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <input id="email" name="email" value="" type="email" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="kartu" class="col-4 col-form-label">Kartu</label>
                <div class="col-8">
                    <?php
                    $sqlkartu = "SELECT * FROM kartu";
                    $rskartu = $dns->query($sqlkartu);
                    ?>
                    <select id="kartu" name="kartu_id" class="custom-select" required>
                        <?php
                        foreach ($rskartu as $rowkartu) {
                        ?>
                            <option value="<?= $rowkartu['id'] ?>"><?= $rowkartu['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                    <a href="pelanggan.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    <?php } elseif (isset($_GET['id_hapus'])) {
        $id = $_GET['id_hapus'];
        $sql = "DELETE FROM pelanggan WHERE id=$id";
        $delete = $dns->query($sql);
        if ($delete) {
            echo '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>';
            echo '<meta http-equiv="refresh" content="1; url=pelanggan.php">';
        } else {
            echo '<div class="alert alert-danger" role="alert">Data gagal dihapus</div>';
        }
    } else {
    ?>
        <div class="py-3">
            <a href="?add" class="btn btn-primary">Tambah Pelanggan</a>
        </div>
        <table class="table py-5">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Email</th>
                <th>Kartu</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            foreach ($rs as $row) {
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . $row['kode'] . '</td>';
                echo '<td>' . $row['nama'] . '</td>';
                echo '<td>' . $row['jk'] . '</td>';
                echo '<td>' . $row['tmp_lahir'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['kartu'] . '</td>';
                echo '<td><a href="?id=' . $row['id'] . '">Edit</a> | <a  href="?id_hapus=' . $row['id'] . '">Hapus</a></td>';
                echo '</tr>';
            }
            ?>
        </table>
    <?php } ?>
</div>
<?php include_once('layouts/footer.php') ?>