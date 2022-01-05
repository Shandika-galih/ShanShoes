<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>ShanShoes | Toko Sepatu Online telengkap dan terpercaya </title> 
	<meta name="description" content="ShanShoes, terlengkap, baru, murah, terpercaya"/>
	<meta name="keywords" content="Sepatu, Murah, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="Shandika Galih Nur Amin"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arial">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
	<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="img/logoku.gif" alt="Logo"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="index.php">Home</a></li>
			              			<li><a href="produk.php">Produk</a></li>			         						
                                    <li><a href="detail.php">Keranjang</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="loginAdmin.php">Admin</a></li>
			                  				<li><a href="loginKonsumen.php">Konsumen</a></li>
			                  				
			                			</ul>
			              			</li>
			              			<li><a href="aboutus.php">About Us</a></li>
			              			<li><a href="logout.php" class="text-decoration-none text-danger fw-bold float-end">Log out</a></li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-usd ico-white"></i>Checkout Keranjang</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!-- start: Container -->
		<div class="container">

			<!-- start: Table -->
                 <div class="table-responsive">
                 <div class="title"><h3>Form Checkout</h3></div>
                 <div class="hero-unit">Harap isi form dibawah ini dengan lengkap dan benar sesuai idenditas anda!</div>
                <div class="hero-unit">Total Belanja Anda Rp. <?php echo abs((int)$_GET['total']); ?>,-</div> 
    <form id="formku" action="selesai.php" method="post">
    <table class="table table-condensed">
    <input type="hidden" name="total" value="<?php echo abs((int)$_GET['total']); ?>">
    <tr>
        <td><label for="nm_usr" >Nama</label></td>
        <td><input name="nm_usr" type="text" class="required" minlength="4" id="nm_usr" size="200" /></td>
      </tr>
      <tr>
        <td><label for="log_usr">Username</label></td>
        <td><input name="log_usr" type="text" class="required" minlength="4" id="log_usr" /></td>
      </tr>
      <tr>
        <td><label for="pas_usr">Password</label></td>
        <td><input name="pas_usr" type="password" class="required" minlength="4" id="pas_usr" /></td>
      </tr>
      <tr>
        <td><label for="email_usr">Email</label></td>
        <td><input name="email_usr" type="text" class="email required" id="email_usr" /></td>
      </tr>
      <tr>
        <td><label for="almt_usr">Alamat</label></td>
        <td><input name="almt_usr" type="text" class="required" id="almt_usr" /></td>
      </tr>
      <tr>
        <td><label for="kp_usr">Kode Pos</label></td>
        <td><input name="kp_usr" type="text" class="required number" minlength="5" maxlength="5" id="kp_usr" /></td>
      </tr>
      <tr>
        <td><label for="kota_usr" >Kota</label></td>
        <td><input name="kota_usr" type="text" class="required" minlength="6" id="kota_usr" /></td>
      </tr>
      <tr>
        <td><label for="tlp">No telepon</label></td>
        <td><input name="tlp" type="text" class="required number" minlength="10" id="tlp" /></td>
      </tr>
      <tr>
        <td><label for="rek">No Rekening</label></td>
        <td><input name="rek" type="text" class="required number" minlength="8" id="rek" /></td>
      </tr>
      <tr>
        <td><label for="nmrek">Nama Rekening</label></td>
        <td><input name="nmrek" type="text" class="required" minlength="4" id="nmrek" /></td>
      </tr>
      <tr>
        <td><label for="bank">Bank</label></td>
        <td><select name="bank" class="required">
        <option></option>
        <option value="Mandiri">OVO</option>
        <option value="Mandiri">Dana</option>
        <option value="Mandiri">Mandiri</option>
        <option value="BNI">BNI</option>
        <option value="CIMB">CIMB</option>
        <option value="BCA">BCA</option>
        <option value="Danamon">Danamon</option>
        <option value="BRI">BRI</option>
        <option value="Permata">Permata</option>
        </select>
        </td>
      </tr>
      <tr>
      <td></td>
        <td><input type="submit" value="Checkout" name="finish"  class="btn btn-sm btn-primary">&nbsp;<a href="index.php" class="btn btn-sm btn-primary">Kembali</a></td>
        </tr>
    </table>
    </form>
    
    </div>
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
				
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
	
			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

<script src="jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
<!-- end: Java Script -->

</body>
</html>