
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	

	<!-- Place logo_kecil.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="logo_kecil.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<style>
	.dropbtn {
    background-color: green;
    color: white;
    padding: 16px;
    font-size: 16px;
	border: none;
	display: inline-block;
	}

	.mydropdown {
    position: relative;
	display: inline-block;
	float:right;
	}

	.mydropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	}

	.mydropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.mydropdown-content a:hover {background-color: #f1f1f1}

.mydropdown:hover .mydropdown-content {
    display: block;
}</style>
	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>

	<?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

        ?>

	</head>
	<body>



<div id="fh5co-page">
<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header">
				<h1 class=" text-light bg-dark"> <img src="<?php echo base_url(); ?>assets/images/pemprov2.png"></h1>
				<nav class="right" role="navigation">
								
								<div class="mydropdown">
    							<a class="dropbtn">Formulir</a>
    							<div class="mydropdown-content">
												<a href="<?php echo site_url('Pengaduan_asn'); ?>">Pengaduan ASN</a>
												<a href="<?php echo site_url('Keberatan_informasi'); ?>">Keberatan Informasi </a>
												<a href="<?php echo site_url('Permohonan_informasi'); ?>">Permohonan Informasi</a>
							
								</div>
  								</div>
								<div class="mydropdown">
								<a class="dropbtn">Daftar Informasi</a>
    							<div class="mydropdown-content">
												<a href="<?php echo base_url('Informasi_berkala');?>">Informasi Berkala</a>
												<a href="https://bkd.jatengprov.go.id/assets/download/Daft_Informasi_Dikecualikan.pdf" >Informasi Dikecualikan</a>
												<a href="https://bkd.jatengprov.go.id/assets/download/Daft_Informasi_Setiap_Saat.pdf">Informasi Setiap Saat</a>
							
								</div>
  								</div>
								<div class="mydropdown">
    							<a class="dropbtn">Profil PPID</a>
    							<div class="mydropdown-content">
											<a href="<?php echo site_url('Visi_misi'); ?>">Visi Misi</a>
											<a href="<?php echo site_url('profile'); ?>">Profil Badan Publik</a>
											<a href="<?php echo site_url('Tupoksi_bkd'); ?>">Tugas Pokok dan Fungsi</a>
											<a href="<?php echo site_url('Tentang_PPID'); ?>">Tentang PPID</a>
											<a href="https://bkd.jatengprov.go.id/assets/download/Dasar_Hukum_PPID2017.pdf">SK PPID Pembantu</a>
											<a href="https://bkd.jatengprov.go.id/assets/download/pejabat_pengelola_informasi_2017.pdf">Pejabat PPID</a>
											<a href="<?php echo site_url('Daftar_pejabat_struktural'); ?>">Struktur PPID Pembantu</a>
											<a href="<?php echo site_url('lhkpn'); ?>">LHKPN</a>
											<a href="<?php echo site_url('profil-pns-badan-publik'); ?>">Profil PNS Badan Publik</a>
											<a href="https://bkd.jatengprov.go.id/assets/download/Maklumat_Pelayanan1.pdf">Maklumat Pelayanan</a>
								</div>
								</div>
								<div class="mydropdown">
								<a class="dropbtn" href="<?php echo site_url('home'); ?>">Home</a>
								</div>
						
			 
						
					
	
				</nav>
			</div>
		</div>
	</header>


	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url().'theme/images/slide_3.jpg'?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Our Awesome Products</h2>
		   					<p class="fh5co-lead"> Awesome source code by <a href="http://mfikri.com/" target="_blank">M Fikri Setiadi</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>



	<div id="fh5co-grid-products" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>See our products</h2>
					<p>Kami terlah mengerjakan banyak project.</p>
				</div>
			</div>
		</div>
		<?php
			foreach ($data->result_array() as $i) :
				$port_id=$i['port_id'];
				$port_judul=$i['port_judul'];
				$port_deskripsi=$i['port_deskripsi'];
				$port_author=$i['port_author'];
				$port_image=$i['port_image'];
				$port_tglpost=$i['tanggal'];

		?>
		<div class="col-md-4">
			<a href="#" ><img src="<?php echo base_url().'assets/images/'.$port_image;?>" class="img-responsive"></a>
				<div class="v-align">
					<div class="v-align-middle"><br/>
						<h3 class="title"><?php echo $port_judul;?></h3>
						<h5 class="category">Web Application</h5>
					</div>
				</div>
		</div>
		<?php endforeach;?>


	</div>
	<br/>
	<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<br/>
					<p><?php echo $page;?></p>
				</div>
			</div>
	</div>

	<?php $this->load->view('v_footer');?>
	</div>



	<!-- jQuery -->
	<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
	<!-- Easy PieChart -->
	<script src="<?php echo base_url().'theme/js/jquery.easypiechart.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url().'theme/js/jquery.stellar.min.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>

	</body>
</html>
