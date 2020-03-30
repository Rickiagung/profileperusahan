<!DOCTYPE html>
<html class="no-js">

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BKD Provinsi Jawa Tengah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	

	
	<!-- Place logo_kecil.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url().'assets/images/logo_kecil.png'?>">

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
	
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/morris.css'?>">
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
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		  
			   <li style="background-image: url(<?php echo base_url().'theme/images/slide_1.jpg'?>);">
			   <div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2 class="BKD">BKD Provinsi Jawa Tengah</h2>
							   <style>
                			h2.BKD{
                  			color: white;
							  text-shadow:
							-1px -1px 0 #000,  
							1px -1px 0 #000,
							-1px 1px 0 #000,
							1px 1px 0 #000;
                			}
                			</style>
		   					
		   				</div>
		   			</div>
		   		</div>
		   	</li>
			   <li style="background-image: url(<?php echo base_url().'theme/images/slide_2.jpg'?>);">
			   <div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
						   <h3 class="visi text-white">Menjadi Pusat Pelayanan Informasi dan Pengaduan Publik yang KREATIF dan Terpercaya</h3>
                			<style>
                			h3.visi{
                  			color: white;
							  text-shadow:
							-1px -1px 0 #000,  
							1px -1px 0 #000,
							-1px 1px 0 #000,
							1px 1px 0 #000;
                			}
                			</style>
		   					
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>