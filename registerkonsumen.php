<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Distro">
    <meta name="author" content="Shandika Galih Nur Amin">
    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="dist/js/jquery-1.9.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>

    <!-- Custom styles for this template -->
    <link href="signin2.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->>
    <title>Register</title>
	<?php
		require 'function.php';
		if(isset($_POST['register'])){
			if(register() > 0){
				echo "<script>
				alert('User telah ditambhakan)
			</script>";
			} else{
				echo mysqli_error($koneksi);
			}
		}
	?>
  </head>

  <body background="image/banner-bg.jpg">

    <div class="container">
	<!-- role="form" -->
    <form class="form-signin" method="post" action="">
        <h2 class="form-signin-heading"><center><span class="glyphicon glyphicon-th-large"></span> Sign Up Konsumen</center></h2>
        <h5 class="baru">Register</h5>
        <h3>Username : <input name="user" id="user" type="input" class="form-control" placeholder="Username" required autofocus></h3>
        <h3>Nama Login : <input name="log_user" id="log_user" type="input" class="form-control" placeholder="Nama Login" required autofocus></h3>
        <h3>Email : <input name="email" id="email" type="input" class="form-control" placeholder="email" required autofocus></h3>
        <h3>Alamat : <input name="alamat" id="alamat" type="input" class="form-control" placeholder="alamat" required autofocus></h3>
        <h3>Kode Pos : <input name="kp_user" id="kp_user" type="input" class="form-control" placeholder="Kode Pos" required autofocus></h3>
        <h3>Kota : <input name="kota" id="kota" type="input" class="form-control" placeholder="kota" required autofocus></h3>
        <h3>No Telp : <input name="no_tlp" id="no_tlp" type="input" class="form-control" placeholder="No Telp" required autofocus></h3>
        <h3>Rekening : <input name="rekening" id="rekening" type="input" class="form-control" placeholder="rekening" required autofocus></h3>
        <h3>Nama Rekening : <input name="nm_rek" id="Nama Rekening" type="input" class="form-control" placeholder="nm_rek" required autofocus></h3>
        <h3>Bank : <input name="bank" id="bank" type="input" class="form-control" placeholder="bank" required autofocus></h3>
        <h3>Status : <input name="status" id="status" type="input" class="form-control" placeholder="status" required autofocus></h3>
        <h3>Password : <input name="pass" id="pass" type="password" class="form-control" placeholder="Password" required></h3>
        <h3>Konfirmasi : <input name="konfirmasi" id="konfirmasi" type="password" class="form-control" placeholder="Konfirmasi Password" required></h3>
        <button class="btn btn-lg btn-danger btn-block" name="register" type="submit">Sign up</button>
        <h5 class="baru">Sudah punya Akun? Silahkan Sign In di Bawah sini</h5><br><center><button class="btn btn-outline-danger"><a href="loginKonsumen.php">Sign In</a></button></center>
    </form>

    </div> <!-- /container -->
    
    <!-- Modal Dialog Contact -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
      <table>
      <tr>
      <td>No Telepon</td> <td>:</td> <td>0881675434</td>
      </tr>
      <br />
      <tr>
      <td>E-mail</td><td>:</td> <td><a href="shandika2001@gmail.com">Shandika2001@gmail.com</a>
      </tr> 
      <br />
      <tr>
      <td>Website</td>    <td>:</td> <td><a href="#" target="_blank">www.ShanShoes.com</a></td>
      </tr>
       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end dialog modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
      
  </body>
</html>
