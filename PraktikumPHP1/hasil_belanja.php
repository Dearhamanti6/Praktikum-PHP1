<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Belanja</title>
</head>
<body>
    <h2>Detail Pembelian</h2>
    <?php
    $proses = $_POST['proses'];
    $nama_customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    echo '<br/>Nama Customer : '.$nama_customer;
    echo '<br/>Pilihan Produk : '.$produk;
    echo '<br/>Jumlah Beli : '.$jumlah;
    if($produk == "TV") {
        echo "<br>Total : " . 4200000 * $jumlah;
      }
    else if ($produk == "Kulkas") {
        echo "<br>Total : " . 3100000 * $jumlah;
      }else {
        echo "<br>Total : " . 3800000 * $jumlah;
      }
    ?>
</body>
</html>