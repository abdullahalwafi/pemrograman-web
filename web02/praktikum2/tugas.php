<?php
$products = [["nama" => "tv", "harga" => 4200000,], ["nama" => "kulkas", "harga" => 3100000,], ["nama" => "mesin cuci", "harga" => 3800000,]];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Penjualan Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid pt-4">
        <h3>Sistem Penilaian</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Belanja Online</h2>
                <form method="POST">
                    <div class="form-group row py-2">
                        <label for="CustomerName" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="CustomerName" name="customer" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row py-2">
                        <label for="product" class="col-4 col-form-label">Pilih Produk</label>
                        <div class="col-8">
                            <select id="product" name="product" class="form-select" required>
                                <option value="">-- Silahkan Pilih --</option>
                                <?php foreach ($products as $product) : ?>
                                    <option value="<?= $product["nama"] ?>" class="text-capitalize"><?= $product["nama"] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row py-2">
                        <label for="Jumlah" class="col-4 col-form-label">Jumlah Pesan</label>
                        <div class="col-8">
                            <input id="Jumlah" name="jumlah" type="number" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row py-2">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <table class="table">
                    <tr class="bg-primary text-white">
                        <th>Nama</th>
                        <th>Harga</th>
                    </tr>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td class="text-capitalize"><?= $product["nama"] ?></td>
                            <td>Rp. <?= number_format($product["harga"]) ?></td>
                        </tr>
                    <?php endforeach; ?>

                    <tr class="bg-primary text-white">
                        <th colspan="2">HARGA DAPAT BERUBAH SETIAP SAAT</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <hr>
    <div class="container">
        <h4>List Pesanan</h4>
        <table class="table table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Nama</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                <?php
                if (isset($_POST["submit"])) {
                    $customer = $_POST["customer"];
                    $product = $_POST["product"];
                    $jumlah = $_POST["jumlah"];
                    $total = 0;
                    foreach ($products as $p) {
                        if ($p["nama"] == $product) {
                            $total = $p["harga"] * $jumlah;
                        }
                    }
                    echo "<tr>";
                    echo "<td>$customer</td>";
                    echo "<td class='text-capitalize'>$product</td>";
                    echo "<td>$jumlah</td>";
                    echo "<td>Rp. " . number_format($total) . "</td>";
                    echo "</tr>";
                } else {
                    echo "<tr><td colspan='4' class='text-center'>Tidak ada data</td></tr>";
                }
                ?>
                <
        </table>
    </div>
    <div class="fixed-bottom text-center pb-3">
        <hr>
        <h5>&copy; Abdullah Al Wafi</h5>
    </div>

</body>

</html>