<?php
    session_start();
    require("function.php");

    
    //if(!isset($_SESSION['login'])){
       // header("Location:login.php");
        //exit;
   // }

     if(isset($_POST['cari'])){
        $barang = cari($_POST['keyword']);
    } else {
        $barang = query("SELECT * from barang");
    }

   

?>

<html>
<head>
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-secondary text-white">
    <div class="p-3 mb-2 bg-secondary text-white">
    <h1 class="text-center mt-4">Daftar Barang</h1>
    <a href="logout.php" class="text-decoration-none text-danger fw-bold float-end">Log out</a>
    <br>
    <br>
    <a href="inputBarang.php" class="text-decoration-none bg-primary text-white p-2">Tambah Barang</a>
    <a href="transaksi.php" class="btn btn-danger">Data Transaksi</a>
    <br>
    <br>
    <form action="" method="post" class="text-center">

        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan kata pencarian" autocomplete="off" id="keyword">
            <button type="submit" name="cari" id="tombolCari" class="btn btn-danger">Cari</button>
        </div>
    </form>

    <br>
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0" class="table table-success table-striped">
        <tr>
            <th>ID</th>
            <th>Aksi</th>
            <th>Nama Barang</th>
            <th>Item Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Satuan Barang</th>
            <th>Gambar </th>
            <th>Keterangan</th>
            <th>Status</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($barang as $row): ?>
        <tr>
            <td><?= $i ?>.</td>
            <td><a href="edit.php?br_id=<?= $row['br_id'] ?>"  class="text-primary text-decoration-none">edit</a> | <a href="delete.php?br_id=<?= $row['br_id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data?')" class="text-danger text-decoration-none">delete</a></td></td>
            <td><?= $row["br_nm"] ?></td>
            <td><?= $row["br_item"] ?></td>
            <td><?= $row["br_hrg"] ?></td>
            <td><?= $row["br_stok"] ?></td>
            <td><?= $row["br_satuan"] ?></td>
            <td><img src="<?= $row["br_gbr"] ?>" width="50">
            <td><?= $row["ket"] ?></td>
            <td><?= $row["br_sts"] ?></td>
            </td>
            <?php $i++ ?>
        </tr>
        <?php endforeach ?>
    </table>
    </div>
</body>
</html>