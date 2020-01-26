<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Diagnosa Resiko Kehamilan</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>template/templatepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="<?php echo base_url(); ?>template/templatepage/vendor/fontawesome-free/css/all.min.css?v=1.0" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>template/templatepage/css/coming-soon.css?v=1.0" rel="stylesheet">

  <!-- style palawi -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/tambahan/css/w3.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/tambahan/css/index.css?v=1.0">
	<script src="<?php echo base_url(); ?>template/tambahan/script/script.js?v=1.0"></script>
	<script src="<?php echo base_url(); ?>template/tambahan/script/jquery.min.js?v=1.0"></script>

</head>

<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo base_url(); ?>template/templatepage/mp4/bg.mp4" type="video/mp4">
  </video>
  <div class="overlay">
  <section id="depan">
  	<h1 class="jarak-label">SISTEM PAKAR</h1>
	<h2>IDENTIFIKASI RESIKO KEHAMILAN</h2>
	<button class="tombol-session" onclick="document.getElementById('modal-wrapper').style.display='block'">MULAI</button>
	<div id="modal-wrapper" class="modal">
		<div class="animasi">
		<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close Popup">&times</span>
		<ul>
		<li onclick="document.getElementById('signup').style.display='block';
			document.getElementById('login').style.display='none'">
			<a href="#signup">DAFTAR</a>
		</li>
		<li onclick="document.getElementById('login').style.display='block';
			document.getElementById('signup').style.display='none'">
			<a href="#login">LOGIN</a>
		</li>
		</ul>
		<div id="tab-konten">
		<div id="signup">
			<h1>Daftar Sebagai Tamu</h1>
			<form action="proses/daftar-pros.php" method="post" accept-charset="utf-8">
			<div class="top-row">
			<div class="field-wrap">
				<input type="text" name="nama-depan" required autocmplete="off">
				<label class="dua">Nama Depan</label>
			</div>
			<div class="field-wrap">
				<input type="text" name="nama-belakang" required autocmplete="off">
				<label class="dua">Nama Belakang</label>
			</div>
			</div>
			<div class="field-wrap">
			<input type="text" name="username" required autocmplete="off">
			<label class="satu">Username</label>
			</div>
			<div class="field-wrap">
			<input type="text" name="email" required autocmplete="off">
			<label class="satu">Email</label>
			</div>
			<div class="field-wrap">
			<input type="password" name="password" required autocmplete="off">
			<label class="satu">Password</label>
			</div>
			<div class="field-wrap">
			<input type="password" name="password-ulangi" required autocmplete="off">
			<label class="satu">Ulangi Password</label>
			</div>
			<button type="submit" name="tombol-daftar" class="tombol-block">Daftar</button>
			</form>
		</div>

		<div id="login">
			<h1>Selamat Datang Kembali</h1>
			<form action="<?php echo site_url('login')?>" method="post" accept-charset="utf-8">
			<div class="field-wrap">
			<input type="text" id="inputEmail3" name="username"  value="<?php echo set_value('username'); ?>" required autocmplete="off">
			<label class="satu">Username </label>
			</div>
			<div class="field-wrap">
			<input type="password" name="password" id="inputPassword3"  value="<?php echo set_value('password'); ?>" required autocmplete="off">
			<label class="satu">Password</label>
			</div>
			<p class="lupa"><a href="#">Lupa Password</a></p>
			<button type="submit" name="proses" class="tombol-block">Login</button>
			</form>
		</div>
		</div>
		</div>
	</div>
	</section>
	
  </div>
  <!-- <div class="">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3">Diagnosa Resiko Kehamilan !</h1>
            <p class="mb-5">Selamat datang ! kehamilan merupakan hal penting yang diperhatikan karena itu akan membentuk keluarga kecil kita bahagia dan memiliki keturunan
              <strong>Save Our Family</strong>! Silahkan bergabung dan konsultasi !</p>
            <div class="input-group input-group-newsletter">
							<div class="input-group-append">
								<button class="btn btn-secondary" type="button">Register</button>
								<button class="btn btn-secondary" type="button">Login</button>
              </div> 
              
			</div>
					
          </div>
        </div>
      </div>
	</div>
	
  </div> -->
	
  <div class="social-icons">
	  
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>
	
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>template/templatepage/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>template/templatepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>template/templatepage/js/coming-soon.min.js"></script>

</body>

</html>
