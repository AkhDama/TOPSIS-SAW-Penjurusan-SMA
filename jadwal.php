<?php 
	include "lib/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SPK-Penjurusan SMA IDAMAN</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<ul class="top_bar_contact_list ml-auto">
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+62 813-6759-6015</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>timdata.10606619@gmail.com</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li><a href="index.php">Beranda</a></li>
									<li><a href="info.php">Info</a></li>
									<li class="active"><a href="jadwal.php">Jadwal</a></li>
									<li><a href="hasil.php">Hasil Seleksi</a></li>
								</ul>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>
							<nav class="ml-auto">
								<ul class="secondary_nav">
									<li class="btn btn-outline-info"><a href="login/">Login(Siswa)</a></li>
									<li class="btn btn-warning"><a href="admin/login/">Login(Admin)</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Beranda</a></li>
				<li class="menu_mm"><a href="info.php">Info</a></li>
				<li class="menu_mm"><a href="jadwal.php">Jadwal</a></li>
				<li class="menu_mm"><a href="hasil.php">Hasil Seleksi</a></li>
			</ul>
		</nav>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<center><h2>Jadwal Tes</h2></center>
			<div class="row features_row justify-content-center">
				
				<!-- Features Item -->
                 <div class="col-md-20">
                    <table class="table table-responsive-sm table-striped" style="margin-top: 20px">
                      <thead>
                        <tr>
						  <th>No</th>
                          <th>Nama Tes</th>
                          <th>Waktu</th>
                        </tr>
                      </thead>
                      <tbody>
                        
						<?php
						$i=0;
						$tampiljadwal = mysqli_query($mysqli, "SELECT * FROM jadwal");
						while ($jadwal = mysqli_fetch_assoc($tampiljadwal))
						{
							$i = $i+1;
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $jadwal['jenis_tes'];?></td>
							<td><?php echo $jadwal['jadwal']; ?></td>
						<?php	
						}
						?>
                        </tr>
                      </tbody>
                    </table>
                    </div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="app-footer">
		<div class="container">
			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div style='left: -1988px; position: absolute; top: -1999px;'>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						</div>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SMA IDAMAN <i class="fa fa-heart-o" aria-hidden="true"></i>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a>Desa Kota Negara, Kec. Madang Suku II, Kab. Ogan Komering Ulu Timur Prov. Sumatera Selatan</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>