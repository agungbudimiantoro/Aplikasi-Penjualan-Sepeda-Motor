<?
mysql_connect('localhost', 'root', '');
mysql_select_db('sepeda_motor');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Transaksi</title>
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">HOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="pembeli.php">Pembeli</a>
                    <a class="nav-item nav-link" href="kendaraan.php">kendaraan</a>
                    <a class="nav-item nav-link" href="transaksi.php">Transaksi</a>
                    <a class="nav-item nav-link" href="laporan.php">Cetak Laporan</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <br>
                <h3>Transaksi</h3>
                <br>
                <a href="transaksi_tambah.php" class="btn btn-info">Tambah Data transaksi</a>
                <br>
                <hr>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">KD TRANSAKSI</th>
                            <th scope="col">ID PEMBELI</th>
                            <th scope="col">KODE MOTOR</th>
                            <th scope="col">TANGGAL PEMBELIAN</th>
			    <th scope="col">HARGA</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? $query = mysql_query("SELECT * FROM transaksi");
                        while ($data = mysql_fetch_assoc($query)) :
                        ?>


                            <tr>
                                <td><? echo $data["kd_transaksi"]; ?></td>
                                <td><? echo $data["id_pembeli"]; ?></td>
                                <td><? echo $data["kd_motor"]; ?></td>
                                <td><? echo $data["tgl_pembelian"]; ?></td>
                                <td><? echo $data["harga"]; ?></td>
                                <td><a href="transaksi_ubah.php?id=<? echo $data["kd_transaksi"]; ?>" class="badge badge-light">ubah</a>
                                    <a href="transaksi_hapus.php?id=<? echo $data["kd_transaksi"]; ?>" class="badge badge-dark">Hapus</a></td>

                            <?
                        endwhile;
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>