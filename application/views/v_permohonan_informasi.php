<!DOCTYPE html>
<html class="no-js">

<?php $this->load->view('partial/v_header');?>

<br>
<div id="fh5co-why-us" class="animate-box">
  <div class="container">
<div class="keep-touch--white">
<?=form_open('Permohonan_informasi/add_permohonan_informasi', array('method'=>'post'));?>
                <br>
                <br>
            <h2 class="text-center">Form Permohonan Informasi Publik</h2>
            <div class="col-sm-2">
            <div class="form-group ">
                        <label for="pilih_identitas_PI">Pilih Identitas</label>
                        
                            <select name="pilih_identitas_PI" id="pilih_identitas_PI" class="form-control">
                                <option value="">-- Pilih --</option>
                                    <?php
                                foreach($pilihidentitas as $data){
                                    echo '<option value="'.$data->ID_IDENTITAS.'">'.$data->IDENTITAS;'</option>';}
                                    ?>
                                
                                
                        
                            </select>    
                    </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group">
                    <label for="nomor_identitas_PI">Nomor Indentitas</label>
                    <input type="text" name="nomor_identitas_PI" id="nomor_identitas_PI" class="form-control" placeholder="NIP/NIK">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="nama_PI">Nama</label>
                    <input type="text" name="nama_PI" id="nama_PI" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="unit_kerja_PI">Unit Kerja</label>
                    <input type="text" name="unit_kerja_PI" id="unit_kerja_PI" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="sub_unit_kerja_PI">Sub Unit Kerja</label>
                    <input type="text" name="sub_unit_kerja_PI" id="sub_unit_kerja_PI" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="alamat_PI">Alamat</label>
                    <input type="text" name="alamat_PI" id="alamat_PI" class="form-control" placeholder="">
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
            <div class="form-group " id= "kab_box">
            
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
            <div class="col-sm-8">
            <div class="form-group ">
                        <label for="kategori_permohonan_PI">Kategori Permohonan</label>
                        
                            <select name="kategori_permohonan_PI" id="kategori_permohonan_PI" class="form-control">
                                <option value="">-- Pilih --</option>
                                    <?php
                                foreach($kategoripermohonan as $data){
                                    echo '<option value="'.$data->ID_KATEGORI_PERMOHONAN.'">'.$data->KATEGORI;'</option>';}
                                    ?>
                                
                                
                        
                            </select>    
                    </div>
            </div>
            <div class="col-sm-12">
            <div class="form-group">
                <label for="deskripsi_permohonan_informasi_PI">Deskripsi Permohonan Informasi</label>
                <textarea type="text" name="deskripsi_permohonan_informasi_PI" id="deskripsi_permohonan_informasi_PI" class="form-control" placeholder="Deskripsi..." rows="3"></textarea>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group ">
                        <label for="bidang_yang_dituju_PI">Bidang Yang Dituju</label>
                        
                            <select name="bidang_yang_dituju_PI" id="bidang_yang_dituju_PI" class="form-control">
                                <option value="">-- Pilih --</option>
                                    <?php
                                foreach($bidangyangdituju as $data){
                                    echo '<option value="'.$data->ID_BIDANG_YANG_DITUJU.'">'.$data->BIDANG;'</option>';}
                                    ?>
                                
                                
                        
                            </select>    
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
            <div class="row">
                  <div class="col text-center">
                    <div class="form-group row">
                      <button type="submit" class="btn btn-success mr-2">Simpan</button>
                   
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
    <script src='https://www.google.com/recaptcha/api.js'></script>


</html>