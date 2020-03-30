<!DOCTYPE html>
<html class="no-js">

<?php $this->load->view('partial/v_header');?>

	<div id="fh5co-why-us" class="animate-box">
		<div class="container">
			<div class="row">

				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/30.svg'?>" class="img-responsive"></span>
					<h3>Informasi Berkala</h3>
                        <p>Daftar Informasi Berkala BKD Provinsi Jateng</p>
					<p><a href="<?php echo base_url().'Informasi_berkala'?>" class="btn btn-primary btn-outline with-arrow">Lebih lengkap <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/30.svg'?>" class="img-responsive"></span>
					<h3>Informasi Dikecualikan</h3>
                        <p>Daftar Informasi Dikecualikan BKD Provinsi Jateng</p>
					<p><a  href="<?=base_url('assets/doc/Daft_Informasi_Dikecualikan.pdf')?>"   class="media btn btn-primary btn-outline with-arrow">Lebih lengkap <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/30.svg'?>" class="img-responsive"></span>
					<h3>Informasi Setiap Saat</h3>
                        <p>Daftar Informasi Setiap Saat BKD Provinsi Jateng</p>
                    
					<p><a href="https://bkd.jatengprov.go.id/assets/download/Daft_Informasi_Setiap_Saat.pdf" class="btn btn-primary btn-outline with-arrow">Lebih lengkap <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>


	<div class="fh5co">

		
		<div class="fh5co-box animate-box">
		<div class="container">
    		<div class="row"><br/>
			<center><h2>Dokumentasi PPID</h2></center>
			<?php	foreach ($data->result() as $row) :	?>
			<div class="col-md-4">
				<a class="example-image-link" href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-lightbox="example-2" data-title="<?php echo $row->galeri_judul;?>"><img class="example-image img-responsive" src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="image-1"/></a>
			</div>
			<?php endforeach;?>
			</div>
		</div>
			<br/>
			<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
							<br/>
						</div>
					</div>
			</div>

			
		</div>

	</div>



	<div id="fh5co-blog" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>ARTIKEL TERBARU</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
			<?php
				foreach ($post->result_array() as $j) :
					$post_id=$j['tulisan_id'];
					$post_judul=$j['tulisan_judul'];
					$post_isi=$j['tulisan_isi'];
					$post_author=$j['tulisan_author'];
					$post_image=$j['tulisan_gambar'];
					$post_tglpost=$j['tanggal'];
					$post_slug=$j['tulisan_slug'];
			?>
				<div class="col-md-4">
					<a class="fh5co-entry" href="<?php echo base_url().'artikel/'.$post_slug;?>">
						<figure>
						<img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="" class="img-responsive">
						</figure>
						<div class="fh5co-copy">
							<h3><?php echo $post_judul;?></h3>
							<span class="fh5co-date"><?php echo $post_tglpost.' | '.$post_author;?></span>
							<?php echo limit_words($post_isi,20).'...';?>
						</div>
					</a>
				</div>
				<?php endforeach;?>

				<div class="col-md-12 text-center">
					<p><a href="<?php echo base_url().'artikel'?>" class="btn btn-primary btn-outline with-arrow">Lebih Lengkap <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
		<span id="timeToRender"></span>
	</div>


	<?php $this->load->view('v_footer');?>
	</div>

   



  

<?php
 
$dataPoints1 = array();
$dataPoints2 = array();
$dataPoints3 = array();
$no=1;
$no++;
    foreach($chart as $row){
		
        array_push($dataPoints1, array("x"=>$row->tanggal, "y"=> $row->twitter));
	}
	foreach($chart as $row){
		
        array_push($dataPoints2, array("x"=>$row->tanggal, "y"=> $row->whatsapp));
	}
	foreach($chart as $row){
		
        array_push($dataPoints3, array("x"=>$row->tanggal, "y"=> $row->email));
    }

?>	

	<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Grafik Pengaduan Sosial Media BKD Provinsi Jawa Tengah"
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	}, 
	data: [{
		type: "column",
		name: "Twitter",
		indexLabel: "{y}",
		xValueType: "date",
		xValueFormatString: "MM ",
		yValueFormatString: "#0.##",
		showInLegend: true,
	      
        type: "line",
		dataPoints: [//array
		{ x: new Date(2019, 12, 1), y: 40},
		{ x: new Date(2020, 01, 1), y: 29},
        { x: new Date(2020, 02, 1), y: 38},
        { x: new Date(2020, 03, 1), y: 43},
        { x: new Date(2020, 04, 1), y: 29},
        { x: new Date(2020, 05, 1), y: 41},
        { x: new Date(2020, 06, 1), y: 54},
        { x: new Date(2020, 07, 1), y: 66},
        { x: new Date(2020, 08, 1), y: 60},
		{ x: new Date(2020, 09, 1), y: 53},
		{ x: new Date(2020, 10, 1), y: 53},
		{ x: new Date(2020, 11, 1), y: 53}
	

        ]
		},{
		type: "column",
		name: "Whatsapp",
		indexLabel: "{y}",
		xValueType: "date",
		xValueFormatString: "MM ",
		yValueFormatString: "#0.##",
		showInLegend: true,
		type: "line",
		dataPoints: [//array
			{ x: new Date(2019, 12, 1), y: 40},
        { x: new Date(2020, 01, 1), y: 29},
        { x: new Date(2020, 02, 1), y: 38},
        { x: new Date(2020, 03, 1), y: 43},
        { x: new Date(2020, 04, 1), y: 29},
        { x: new Date(2020, 05, 1), y: 41},
        { x: new Date(2020, 06, 1), y: 54},
        { x: new Date(2020, 07, 1), y: 69},
        { x: new Date(2020, 08, 1), y: 60},
		{ x: new Date(2020, 09, 1), y: 58},
		{ x: new Date(2020, 10, 1), y: 53},
		{ x: new Date(2020, 11, 1), y: 57}
	
       
    ]
	},{
		type: "column",
		name: "Email",
		indexLabel: "{y}",
		xValueType: "date",
		xValueFormatString: "MM ",
		yValueFormatString: "#0.##",
		showInLegend: true,
		    
        type: "line",
		dataPoints: [//array
			{ x: new Date(2019, 12, 1), y: 30},
			{ x: new Date(2020, 01, 1), y: 26},
        { x: new Date(2020, 02, 1), y: 38},
        { x: new Date(2020, 03, 1), y: 43},
        { x: new Date(2020, 04, 1), y: 29},
        { x: new Date(2020, 05, 1), y: 41},
        { x: new Date(2020, 06, 1), y: 58},
        { x: new Date(2020, 07, 1), y: 66},
        { x: new Date(2020, 08, 1), y: 60},
		{ x: new Date(2020, 09, 1), y: 15},
		{ x: new Date(2020, 10, 1), y: 51},
		{ x: new Date(2020, 11, 1), y: 53}
        ]
   
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>

        <script type="text/javascript" src="http://malsup.github.com/jquery.media.js"></script>
        <script type="text/javascript">
            $(function () {
                $('.media').media({width: 868});
            });
        </script>



  <script src="<?php echo base_url().'theme/dist/js/lightbox-plus-jquery.js'?>"></script>


	<!-- Easy PieChart -->
	<script src="<?php echo base_url().'theme/js/jquery.easypiechart.min.js'?>"></script>
	<link rel="stylesheet" href="<?php echo base_url().'theme/dist/css/lightbox.css'?>">
	<!-- Stellar -->
	<script src="<?php echo base_url().'theme/js/jquery.stellar.min.js'?>"></script>

	<!-- jQuery -->
	<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


</html>
