<?php
require_once('koneksi.php');
$sql = 'SELECT * FROM produk';
$rs = $dns->query($sql);
?>
<?php
include_once('layouts/header.php');
include_once('layouts/menu.php');
?>

<div class="container">
    <?php
    if (isset($_GET['id'])) {
        if (isset($_POST['proses'])) {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $harga_beli = $_POST['harga_beli'];
            $stok = $_POST['stok'];
            $sql = "UPDATE produk SET kode='$kode', nama='$nama', harga_beli='$harga_beli', stok='$stok' WHERE id=" . $_GET['id'];
            $rs = $dns->query($sql);
            if ($rs) {
                echo '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Data gagal diubah</div>';
            }
        }
        $sql = 'SELECT * FROM produk WHERE id=' . $_GET['id'];
        $produk = $dns->query($sql);
        $row = $produk->fetch();
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
                <label for="nama" class="col-4 col-form-label">Nama Produk</label>
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
                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-o-left"></i>
                            </div>
                        </div>
                        <input id="harga_beli" name="harga_beli" value="<?= $row['harga_beli'] ?>" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-up"></i>
                            </div>
                        </div>
                        <input id="stok" name="stok" value="<?= $row['stok'] ?>" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                        <input id="min_stok" name="min_stok" value="<?= $row['min_stok'] ?>" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
                <div class="col-8">
                    <?php
                    $sqljenis = "SELECT * FROM jenis_produk";
                    $rsjenis = $dns->query($sqljenis);

                    $sqljenis2 = "SELECT * FROM jenis_produk WHERE id = " . $row['jenis_produk_id'];
                    $rsjenis2 = $dns->query($sqljenis2);
                    $rowjenis2 = $rsjenis2->fetch();
                    ?>
                    <select id="jenis" name="jenis" class="custom-select">
                        <option value="<?= $rowjenis2['id'] ?>"><?= $rowjenis2['nama'] ?></option>
                        <?php
                        foreach ($rsjenis as $rowjenis) {
                        ?>
                            <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                    <a href="produk.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    <?php
    } elseif (isset($_GET['add'])) {
        if (isset($_POST['proses'])) {
            $sql = "INSERT INTO produk (kode, nama, harga_beli, stok, min_stok, jenis_produk_id) VALUES ('" . $_POST['kode'] . "', '" . $_POST['nama'] . "', '" . $_POST['harga_beli'] . "', '" . $_POST['stok'] . "', '" . $_POST['min_stok'] . "', '" . $_POST['jenis'] . "')";
            $rs = $dns->query($sql);
            if ($rs) {
                echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
                echo '<meta http-equiv="refresh" content="1; url=produk.php">';
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
                <label for="nama" class="col-4 col-form-label">Nama Produk</label>
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
                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-o-left"></i>
                            </div>
                        </div>
                        <input id="harga_beli" name="harga_beli" value="" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-up"></i>
                            </div>
                        </div>
                        <input id="stok" name="stok" value="" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                        <input id="min_stok" name="min_stok" value="" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
                <div class="col-8">
                    <?php
                    $sqljenis = "SELECT * FROM jenis_produk";
                    $rsjenis = $dns->query($sqljenis);
                    ?>
                    <select id="jenis" name="jenis" class="custom-select">
                        <?php
                        foreach ($rsjenis as $rowjenis) {
                        ?>
                            <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                    <a href="produk.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    <?php } elseif (isset($_GET['id_hapus'])) {

        $_iddel = $_GET['id_hapus'];
        $sql = "DELETE FROM produk WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_iddel]);
        if ($rs) {
            echo '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>';
            echo '<meta http-equiv="refresh" content="1; url=produk.php">';
        } else {
            echo '<div class="alert alert-danger" role="alert">Data gagal dihapus</div>';
        }
    } else {
    ?>
        <div class="py-3">
            <a href="?add" class="btn btn-primary">Tambah Produk</a>
        </div>
        <table class="table py-5">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            foreach ($rs as $row) {
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . $row['kode'] . '</td>';
                echo '<td>' . $row['nama'] . '</td>';
                echo '<td>Rp. ' . number_format($row['harga_jual']) . '</td>';
                echo '<td>' . $row['stok'] . '</td>';
                echo '<td><a href="?id=' . $row['id'] . '">Edit</a> | <a  href="?id_hapus=' . $row['id'] . '">Hapus</a></td>';
                echo '</tr>';
            }
            ?>
        </table>
    <?php } ?>
</div>
<?php include_once('layouts/footer.php') ?>