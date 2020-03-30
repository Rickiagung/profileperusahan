<!DOCTYPE html>
<html class="no-js">

<?php $this->load->view('partial/v_header');?>
<br>
<div id="fh5co-why-us" class="animate-box">
  <div class="container">
<?=form_open('Pengaduan_asn/add_pengaduan_asn', array('method'=>'post'));?>
<h2 class="text-center">Pengaduan ASN</h2>
            <div class="col-sm-6">
            <div class="form-group">
                <label for="nama_PA">Nama</label>
                <input type="text" name="nama_PA" id="nama_PA" class="form-control" placeholder="Nama Pelapor">
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                <label for="telepon_PA">Telepon</label>
                <input type="number" name="telepon_PA" id="telepon_PA" class="form-control " placeholder="Nomor Telepon">
            </div>
            </div>
            <div class="col-sm-8">
            <div class="form-group">
                <label for="email_PA">Email</label>
                <input type="text" name="email_PA" id="email_PA" class="form-control" placeholder="Email@email.com">
            </div>
            </div>
            <div class="col-sm-12">
            <div class="form-group">
                <label for="alamat_PA">Alamat</label>
                <input type="text" name="alamat_PA" id="alamat_PA" class="form-control" placeholder="">
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
               
        
                <select name="provinsi" id="provinsi" class="form-control" >
                    <option value="">Pilih Provinsi</option>
                    <?php 
                    foreach($provinsi as $data){
                    echo '<option value="'.$data->id_prov.'">'.$data->nama_provinsi;'</option>';
                     }
                    ?>
               </select>

            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group" id= "kab_box">
            
                <label for="kota">Kab/Kota</label>
                <select name="kota" id="kota" class="form-control" >
                <option value="">Pilih Kab/Kota</option>
                <?php 
                    foreach($kota as $data){
                    echo '<option value="'.$data->id_kab.'">'.$data->nama;'</option>';
                     }
                    ?>
                </select>
               
               
            </div>
            </div>
            <div class="col-sm-3">
            <div class="form-group">
                <label for="nip_terlapor_PA">NIP Terlapor</label>
                <input type="number" name="nip_terlapor_PA" id="nip_terlapor_PA" class="form-control" placeholder="">
            </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                <label for="nama_terlapor_PA">Nama Terlapor</label>
                <input type="text" name="nama_terlapor_PA" id="nama_terlapor_PA" class="form-control" placeholder="">
            </div>
            </div>
            <div class="col-sm-5">
            <div class="form-group">
                <label for="indentitas_terlapor_PA">Indentitas Terlapor</label>
                <input type="text" name="indentitas_terlapor_PA"  id="indentitas_terlapor_PA" class="form-control" placeholder="Indentitas Terlapor">
            </div>
            </div>
            <div class="col-sm-12">
            <div class="form-group">
                <label for="deskripsi_terlapor_PA">Deskripsi Pelaporan</label>
                <textarea  type="text" name="deskripsi_terlapor_PA"  id="deskirpsi_pelaporan_PA" class="form-control  " placeholder="Deskripsi Pelaporan" rows="3"></textarea>
                    </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                <label for="saksi_PA">Saksi</label>
                <input type="text" name="saksi_PA" id="saksi_PA" class="form-control" placeholder="">
            </div>
            </div>
            <div class="form-group">
          
                <?php echo $captcha // tampilkan recaptcha ?>
            </div> 
            <div class="col-sm-12">
            <div class="row">
                  <div class="col text-center">
                    <div class="form-group row">
                    <input class="btn btn-success" type="submit" name="btn" value="Simpan"/>
                     
                    </div>
                  </div>
                </div>
            </div>
                <?=form_close();?>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#provinsi').change(function(){
            var provinsi_id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>home/provinsi/getKab",
                method : "POST",
                data : 'prov_id='+provinsi_id,
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option>'+data[i].nama+'</option>';
                    }
                    $('.kota').html(html);
                     
                }
            });
        });
    });
</script>
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
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>


</html>