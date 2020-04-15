<!DOCTYPE html>
<html class="no-js">

<?php $this->load->view('partial/v_header');?>

<br>
<div id="fh5co-why-us" class="animate-box">
  <div class="container">
    <?=form_open('Keberatan_informasi/add_keberatan_informasi', array('method'=>'post'));?>
                <h2 class="text-center">Keberatan Informasi</h2>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama_KI">Nama</label>
                        <input type="text" name="nama_KI" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div>
                        <label for="telepon_KI">Telepon</label>
                        <input type="number" name="telepon_KI" class="form-control" placeholder="ex:+62xxxxxxx" required>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="email_KI">Email</label>
                        <input type="text" name="email_KI" class="form-control" placeholder="Email@email.com" required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="alamat_KI">Alamat</label>
                        <input type="text" name="alamat_KI" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                    
                
                        <select name="provinsi" id="provinsi" class="form-control" >
                            <option value="">Pilih Provinsi</option>
                           <?php foreach($provinsi as $data){
                    echo '<option value="'.$data->id_prov.'">'.$data->nama;'</option>';
  
                     }?>
                    </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group " id= "kab_box">
                    
                        <label for="kota">Kab/Kota</label>
                        <select name="kota" id="kota" class="form-control" >
                        <option value="">Pilih Kab/Kota</option>
                        <?php foreach($kota as $data){
                    echo '<option value="'.$data->id_kab.'">'.$data->nama;'</option>';
     
                     }?>
                        </select>
                    
                    
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group ">
                        <label for="alasan_keberatan_KI">Alasan Keberatan</label>
                        
                            <select name="alasan_keberatan_KI" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                    <?php
                                foreach($alasankeberatan as $data){
                                    echo '<option value="'.$data->ID_ALASAN_KEBERATAN_INFORMASI.'">'.$data->ALASAN_KEBERATAN;'</option>';}
                                    ?>
                                
                                
                        
                            </select>    
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="deskripsi_keberatan_informasi_KI">Deskripsi Keberatan Informasi</label>
                        <textarea type="text" name="deskripsi_keberatan_informasi_KI" id="deskripsi_keberatan_informasi_KI" class="form-control" placeholder="Deskripsi..." rows="3" required></textarea>
                    </div>
                </div>
             
         
            <div class="col-sm-12">
            <div class="form-group">
            <div class="g-recaptcha" data-sitekey="isi_dengan_site_key_nya"></div>
            </div>
            </div>
                    <div class="form-group">
          
               
                    </div> 
                    <div class="col-sm-12">
                    <div class="row center">
                        <div class="col text-center">
                            <div class="form-group row">
                            <button type="submit" class="btn btn-success mr-2 center">Simpan</button>
                           
                            </div>
                        </div>
                    </div>
                </div>
            
                    <?=form_close();?>
    </div>
</div>
</div>
</div>
<?php $this->load->view('v_footer');?>
	</div>

    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
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
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#provinsi').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Keberatan_informasi/get_kota');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data1[i].id_kab+'>'+data1[i].nama+'</option>';
                            }
                        
                        $('kota').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>
      <script src='https://www.google.com/recaptcha/api.js'></script>

</html>