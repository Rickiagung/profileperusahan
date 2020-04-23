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

	color: black;
	font-weight: bold;
    padding: 16px;
    font-size: 16px;
	border: none;
	display: inline-block;
	z-index: 10;
	}

	.mydropdown {
    position: relative;
	display: inline-block;
	float:right;
	z-index: 10;
	}

	.mydropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 20;
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
}

@media screen and (max-width: 660px) {
	.dropbtn {

color: black;
font-weight: bold;
padding: 16px;
font-size: 16px;
border: none;

z-index: 10;
}

.mydropdown {
position: relative;
display: inline-block;
float:right;
z-index: 10;
}

.mydropdown-content {
display: none;
position: relative;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 20;
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
}

}
.gambar{
	height: 80px;
  	width: 320px;
}
* {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
}

.nav {

  background-color: #FFFFFF;
  position: relative;
  z-index: 10;
}

.nav > .nav-header {
  display: inline;
  z-index: 10;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  float: right;
  font-size: 18px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: #efefef;
}

.nav > .nav-links > a:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.nav > #nav-check {
  display: none;
}

.slider{
	z-index: 1;
  }

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
  .sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
}

</style>
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
	<nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container">

	<div class="nav " id="navbar">
  	<input type="checkbox" id="nav-check">
  	<div class="nav-header">
    <div class="nav-title">
	<h1 class=" text-light bg-dark"> <img class="gambar" src="<?php echo base_url(); ?>assets/images/logo-bkd-hitam.png"></h1>
    </div>
  	</div>

  
  <div class="nav-links ">
  <div class="mydropdown">
    							<a style="letter-spacing: 0.6em;" class="dropbtn">Formulir</a>
    							<div class="mydropdown-content">
												<a href="<?php echo site_url('Pengaduan_asn'); ?>">Pengaduan ASN</a>
												<a href="<?php echo site_url('Keberatan_informasi'); ?>">Keberatan Informasi </a>
												<a href="<?php echo site_url('Permohonan_informasi'); ?>">Permohonan Informasi</a>
							
								</div>
  								</div>
								<div class="mydropdown">
								<a style="letter-spacing: 0.5em;" class="dropbtn">Daftar Informasi</a>
    							<div class="mydropdown-content">
												<a href="<?php echo base_url('Informasi_berkala');?>">Informasi Berkala</a>
												<a href="https://bkd.jatengprov.go.id/assets/download/Daft_Informasi_Dikecualikan.pdf" >Informasi Dikecualikan</a>
												<a href="https://bkd.jatengprov.go.id/assets/download/Daft_Informasi_Setiap_Saat.pdf">Informasi Setiap Saat</a>
							
								</div>
  								</div>
								<div class="mydropdown">
    							<a style="letter-spacing: 0.6em;" class="dropbtn">Profil PPID </a>
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
								<div  class="mydropdown">
								<a style="letter-spacing: 0.4em;" class="dropbtn" href="<?php echo site_url('home'); ?>">Home</a>
								</div>
						
  </div>
</div>

  </div>
</nav>

	<aside  id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight ">
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

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>