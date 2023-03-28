<?php
require_once('koneksi.php');
$sql = 'SELECT pembelian.id AS id, pembelian.jumlah AS jumlah, pembelian.tanggal AS tanggal, pembelian.harga AS harga, pembelian.nomor AS nomor, produk.nama AS produk, vendor.nama AS vendor FROM pembelian INNER JOIN vendor ON vendor.id = pembelian.vendor_id INNER JOIN produk ON produk.id = pembelian.produk_id ORDER BY pembelian.tanggal DESC, nomor DESC';
$rs = $dns->query($sql);

include_once('layouts/header.php');
include_once('layouts/menu.php');
?>

<div class="container">
    <?php
    if (isset($_GET['id'])) {
        if (isset($_POST['proses'])) {
            $sql = 'UPDATE pembelian SET tanggal="' . $_POST['tanggal'] . '", nomor="' . $_POST['nomor'] . '", produk_id="' . $_POST['produk_id'] . '", jumlah="' . $_POST['jumlah'] . '", harga="' . $_POST['harga'] . '", vendor_id="' . $_POST['vendor_id'] . '" WHERE id=' . $_GET['id'];
            $update = $dns->query($sql);
            if ($update) {
                $sql = 'SELECT * FROM pembelian WHERE id=' . $_GET['id'];
                $produk = $dns->query($sql);
                $row = $produk->fetch();
                $stok = $row['jumlah'] - $_POST['jumlah'];
                $sql = 'UPDATE produk SET stok=stok+' . $stok . ' WHERE id=' . $_POST['produk_id'];
                $updateproduk = $dns->query($sql);
                if ($updateproduk) {
                    echo '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
                    echo "<meta http-equiv='refresh' content='1;url=pembelian.php'>";
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">Data gagal diubah</div>';
            }
        }
        $sql = 'SELECT * FROM pembelian WHERE id=' . $_GET['id'];
        $pembelian = $dns->query($sql);
        $row = $pembelian->fetch();
    ?>
        <form method="POST" action="" class="py-3">
            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-anchor"></i>
                            </div>
                        </div>
                        <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $row['tanggal'] ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor" class="col-4 col-form-label">Nomor</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $row['nomor'] ?>" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="produk" class="col-4 col-form-label">Produk</label>
                <div class="col-8">
                    <?php
                    $sqlproduk = "SELECT * FROM produk";
                    $rsproduk = $dns->query($sqlproduk);


                    $sqlproduk2 = "SELECT * FROM produk WHERE id=" . $row['produk_id'];
                    $rsproduk2 = $dns->query($sqlproduk2);
                    $rsproduk2 = $rsproduk2->fetch();
                    ?>
                    <select id="produk" name="produk_id" class="custom-select" required>
                        <option value="<?= $rsproduk2['id'] ?>"><?= $rsproduk2['nama'] ?></option>
                        <?php
                        foreach ($rsproduk as $rowproduk) {
                        ?>
                            <option value="<?= $rowproduk['id'] ?>"><?= $rowproduk['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-map"></i>
                            </div>
                        </div>
                        <input id="jumlah" name="jumlah" value="<?= $row['jumlah'] ?>" type="number" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">Harga</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calender-day"></i>
                            </div>
                        </div>
                        <input id="harga" name="harga" value="<?= $row['harga'] ?>" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="vendor" class="col-4 col-form-label">Vendor</label>
                <div class="col-8">
                    <?php
                    $sqlvendor = "SELECT * FROM vendor";
                    $rsvendor = $dns->query($sqlvendor);

                    $sqlvendor2 = "SELECT * FROM vendor WHERE id=" . $row['vendor_id'];
                    $rsvendor2 = $dns->query($sqlvendor2);
                    $rsvendor2 = $rsvendor2->fetch();

                    ?>
                    <select id="vendor" name="vendor_id" class="custom-select" required>
                        <option value="<?= $rsvendor2['id'] ?>"><?= $rsvendor2['nama'] ?></option>
                        <?php
                        foreach ($rsvendor as $rowvendor) {
                        ?>
                            <option value="<?= $rowvendor['id'] ?>"><?= $rowvendor['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                    <a href="pembelian.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    <?php
    } elseif (isset($_GET['add'])) {
        if (isset($_POST['proses'])) {
            $sql = "INSERT INTO pembelian (tanggal, nomor, produk_id, jumlah, harga, vendor_id) VALUES ('" . $_POST['tanggal'] . "', '" . $_POST['nomor'] . "', '" . $_POST['produk_id'] . "', '" . $_POST['jumlah'] . "', '" . $_POST['harga'] . "', '" . $_POST['vendor_id'] . "')";
            $tambah = $dns->query($sql);
            if ($tambah) {
                $sqlstok = "UPDATE produk SET stok=stok+" . $_POST['jumlah'] . " WHERE id=" . $_POST['produk_id'];
                $tambahstok = $dns->query($sqlstok);
                if ($tambahstok) {
                    echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
                    echo '<meta http-equiv="refresh" content="1; url=pembelian.php">';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>';
            }
        }
    ?>
        <form method="POST" action="" class="py-3">
            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-anchor"></i>
                            </div>
                        </div>
                        <input id="tanggal" name="tanggal" type="date" class="form-control" value="" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor" class="col-4 col-form-label">Nomor</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <?php
                        $sqlno = "SELECT nomor FROM pembelian ORDER BY nomor desc limit 1";
                        $nopem = $dns->query($sqlno);
                        $nopem = $nopem->fetch();
                        $nomor =  "P" . (str_pad((substr($nopem['nomor'], 1) + 1), 3, '0', STR_PAD_LEFT));
                        ?>
                        <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $nomor ?>" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="produk" class="col-4 col-form-label">Produk</label>
                <div class="col-8">
                    <?php
                    $sqlproduk = "SELECT * FROM produk";
                    $rsproduk = $dns->query($sqlproduk);
                    ?>
                    <select id="produk" name="produk_id" class="custom-select" required>
                        <?php
                        foreach ($rsproduk as $rowproduk) {
                        ?>
                            <option value="<?= $rowproduk['id'] ?>"><?= $rowproduk['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-map"></i>
                            </div>
                        </div>
                        <input id="jumlah" name="jumlah" value="" type="number" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">Harga</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calender-day"></i>
                            </div>
                        </div>
                        <input id="harga" name="harga" value="" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="vendor" class="col-4 col-form-label">Vendor</label>
                <div class="col-8">
                    <?php
                    $sqlvendor = "SELECT * FROM vendor";
                    $rsvendor = $dns->query($sqlvendor);
                    ?>
                    <select id="vendor" name="vendor_id" class="custom-select" required>
                        <?php
                        foreach ($rsvendor as $rowvendor) {
                        ?>
                            <option value="<?= $rowvendor['id'] ?>"><?= $rowvendor['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                    <a href="pembelian.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    <?php } elseif (isset($_GET['id_hapus'])) {
        $id = $_GET['id_hapus'];
        $sql = "DELETE FROM pembelian WHERE id=$id";
        $delete = $dns->query($sql);
        if ($delete) {
            echo '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>';
            echo '<meta http-equiv="refresh" content="1; url=pembelian.php">';
        } else {
            echo '<div class="alert alert-danger" role="alert">Data gagal dihapus</div>';
        }
    } else {
    ?>
        <div class="py-3">
            <a href="?add" class="btn btn-primary">Tambah Pembelian</a>
        </div>
        <table class="table py-5">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>No Pembelian</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Vendor</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            foreach ($rs as $row) {
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . date('d F Y', strtotime($row['tanggal'])) . '</td>';
                echo '<td>' . $row['nomor'] . '</td>';
                echo '<td>' . $row['produk'] . '</td>';
                echo '<td>' . $row['jumlah'] . '</td>';
                echo '<td>' . number_format($row['harga']) . '</td>';
                echo '<td>' . $row['vendor'] . '</td>';
                echo '<td><a href="?id=' . $row['id'] . '">Edit</a> | <a  href="?id_hapus=' . $row['id'] . '">Hapus</a></td>';
                echo '</tr>';
            }
            ?>
        </table>
    <?php } ?>
</div>
<?php include_once('layouts/footer.php') ?>