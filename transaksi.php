<?php
   session_start();
    require("function.php");

    
    //if(!isset($_SESSION['login'])){
       // header("Location:login.php");
        //exit;
   // }

     if(isset($_POST['cari'])){
        $transaksi = cari($_POST['keyword']);
    } else {
        $transaksi = query("SELECT * from transaksi");
    }   
?>

<html> 
<head>
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-secondary text-white">
    <div class="p-3 mb-2 bg-secondary text-white">
    <h1 class="text-center mt-4">Data Transaksi</h1>
    <a href="logout.php" class="text-decoration-none text-danger fw-bold float-end">Log out</a><br>
    <a href="admin.php" class="btn btn-danger">Menu Admin</a>
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
            <th>Nama Pembeli</th>
            <th>Kota Pembeli</th>
            <th>Nomer Rekening</th>
            <th>Jenis Bank</th>
            <th>Tanggal Transaksi</th>
            <th>Total Pembayaran</th>
            
            
        </tr>
        <?php $i=1; ?>
        <?php foreach ($transaksi as $row): ?>
        <tr>
        	<td><?= $i ?>.</td>
            <td><?= $row["nm_pm"] ?></td>
            <td><?= $row["kota_pm"] ?></td>
            <td><?= $row["no_rek"] ?></td>
            <td><?= $row["bnk"] ?></td>
            <td><?= $row["tgl_trs"] ?></td>
            <td><?= $row["total"] ?></td>
           
            </td>
            <?php $i++ ?>
        </tr>
        <?php endforeach ?>
    </table>
    </div>
</body>
</html>