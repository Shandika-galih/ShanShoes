<?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "db_ss";

    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        echo mysqli_error($koneksi);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){ 
            $rows[] = $row;
        }
        return $rows;
    }
    //register konsumen
    function register(){
        global $koneksi;

        $nm_usr = strtolower($_POST['user']);
        $log_usr = strtolower($_POST['log_user']);
        $email_usr = strtolower($_POST['email']);
        $almt_usr = strtolower($_POST['alamat']);
        $kp_usr = strtolower($_POST['kp_user']);
        $kota_usr = strtolower($_POST['kota']);
        $tlp = strtolower($_POST['no_tlp']);
        $rek = strtolower($_POST['rekening']);
        $nmrek = strtolower($_POST['nm_rek']);
        $bank = strtolower($_POST['bank']);
        $sts_usr = strtolower($_POST['status']);

        $pas_usr = mysqli_real_escape_string($koneksi, $_POST['pass']);
        $konfimrasi = mysqli_real_escape_string($koneksi, $_POST['konfirmasi']);

        $result = mysqli_query($koneksi, "select nm_usr from user where nm_usr='$nm_usr'");

        if (mysqli_fetch_assoc($result)){
            echo "<script>
                alert('nm_usr sudah terdaftar')
            </script>";
            return false;
        }

        if ($pas_usr !== $konfimrasi){
            echo "<script>
                alert('konfirmasi password tidak sesuai')
            </script>";
            return false;
        }

        $query = ("insert into user values ('', '$nm_usr','$log_usr','$pas_usr','$email_usr','$almt_usr','$kp_usr','$kota_usr','$tlp','$rek','$nmrek','$bank','$sts_usr')");
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    //ragister admin
    function registeradmin(){
        global $koneksi;

        $username = strtolower($_POST['user']);
        $fullname = strtolower($_POST['fullname']);
        $password = mysqli_real_escape_string($koneksi, $_POST['pass']);
        $konfimrasi = mysqli_real_escape_string($koneksi, $_POST['konfirmasi']);

        $result = mysqli_query($koneksi, "select username from admin where username='$username'");

        if (mysqli_fetch_assoc($result)){
            echo "<script>
                alert('username sudah terdaftar')
            </script>";
            return false;
        }

        if ($password !== $konfimrasi){
            echo "<script>
                alert('konfirmasi password tidak sesuai')
            </script>";
            return false;
        }

        $query = ("insert into admin values ('', '$username','$password','$fullname')");
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    //Upload gambar
    function upload(){
        $namaFile = $_FILES['br_gbr']['name'];
        $ukuranFile = $_FILES['br_gbr']['size'];
        $error = $_FILES['br_gbr']['error'];
        $tmpName = $_FILES['br_gbr']['tmp_name'];

        if ($error == 4){
            echo "<script>
                alert('Gambar belum diupload');
            </script>";
            return false;
        }

        $ekstensiFile = ['jpeg', 'jpg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        // cek ekstensi
        if(!in_array($ekstensiGambar, $ekstensiFile)){
            echo "<script>
                alert('Ekstensi harus jpeg jpg png');
            </script>";
            return false;
        } elseif($ukuranFile > 5000000){
            echo "<script>
                alert('Ukuran terlalu besar');
            </script>";
            return false;
        } else {
            $namaBaru = uniqid();
            $namaBaru .= ".";
            $namaBaru .= $ekstensiGambar;
            move_uploaded_file($tmpName, "./gambar/".$namaBaru);

            return $namaBaru;
        }
      }

    //tambah atau input barang
    function tambah($data){
        global $koneksi;

        $br_nm = htmlspecialchars($data['br_nm']);
        $br_item = htmlspecialchars($data['br_item']);
        $br_hrg = htmlspecialchars($data['br_hrg']);
        $br_stok = htmlspecialchars($data['br_stok']);
        $br_satuan = htmlspecialchars($data['br_satuan']);
        $ket = htmlspecialchars($data['ket']);
        $br_sts = htmlspecialchars($data['br_sts']);
        // $br_gbr = htmlspecialchars($data['br_gbr']);

        $br_gbr = upload();

        if($br_gbr){
            $query_insert = "insert into barang values ('', '$br_nm', '$br_item', '$br_hrg', '$br_stok', '$br_satuan','$br_gbr', '$ket', '$br_sts')";
            mysqli_query($koneksi, $query_insert);
        }
        return mysqli_affected_rows($koneksi);
      }

    function hapus($br_id){
        global $koneksi;

        $query_delete = "delete from barang where br_id=$br_id";
        mysqli_query($koneksi, $query_delete);
        
        return mysqli_affected_rows($koneksi);      
    }

    function edit($data){
        global $koneksi;

        $br_nm = htmlspecialchars($data['br_nm']);
        $br_item = htmlspecialchars($data['br_item']);
        $br_hrg = htmlspecialchars($data['br_hrg']);
        $br_stok = htmlspecialchars($data['br_stok']);
        $br_satuan = htmlspecialchars($data['br_satuan']);
        $ket = htmlspecialchars($data['ket']);
        $br_sts = htmlspecialchars($data['br_sts']);
        $gambarlama = htmlspecialchars($data['br_gbr']);
        $br_id = $data['br_id'];

        //cek jika mengubah gambar
        if($_FILES['br_gbr']['error'] == 4){
            $br_gbr = $gambarlama;
        } else {
            $br_gbr = upload();
        }

        if($br_gbr){
            $query_insert = "UPDATE cv_db SET br_nm='$br_nm', br_item='$br_item', br_hrg='$br_hrg', br_stok='$br_stok', br_satuan='$br_satuan', ket='$ket', br_sts='$br_sts', br_gbr='$br_gbr' WHERE br_id=$br_id";
            mysqli_query($koneksi, $query_insert);
        }

        return mysqli_affected_rows($koneksi);
    }


    function cari($cari){
        $query = "select * from barang where 
            br_nm like '%$cari%' or
            br_item like '%$cari%' or
            br_hrg like '%$cari%' or
            br_stok like '%$cari%' or
            br_satuan like '%$cari%' or
            ket like '%$cari%' or
            br_sts like '%$cari%'
            ";
        return query($query);
    }
    
?>