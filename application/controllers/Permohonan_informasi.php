<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Permohonan_informasi extends CI_Controller{

      private $m_pi;
      protected $data1;

       function __construct()
       {
         parent::__construct();
         $this->load->model('M_Permohonan_informasi');
         $this->load->database();
         $this->load->library('form_validation');

         $this->m_pi = $this->M_Permohonan_informasi; 
         
       }

      public function index(){

        $data1['pilihidentitas']=$this->M_Permohonan_informasi->getIndetitas();
        $data1['kategoripermohonan']=$this->M_Permohonan_informasi->getKategoriPemohon();
        $data1['bidangyangdituju']=$this->M_Permohonan_informasi->getBidangYangDituju();
        $data1['provinsi']=$this->M_Permohonan_informasi->getProv();
        $data1['kota']=$this->M_Permohonan_informasi->getKab();
        $this->load->view('v_permohonan_informasi',$data1);
        
      

        

        
        
        
      }
      public function add_permohonan_informasi(){

    
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $IDENTITAS= $this->security->xss_clean($this->input->post('pilih_identitas_PI'));
            $NOMOR= $this->security->xss_clean($this->input->post('nomor_identitas_PI'));
            $NAMA= $this->security->xss_clean($this->input->post('nama_PI'));
            $UNIT_KERJA=$this->security->xss_clean($this->input->post('unit_kerja_PI'));
            $SUB_UNIT_KERJA=$this->security->xss_clean($this->input->post('sub_unit_kerja_PI'));
            $ALAMAT=$this->security->xss_clean($this->input->post('alamat_PI'));
            $PROVINSI=$this->security->xss_clean($this->input->post('provinsi'));
            $KAB_KOTA=$this->security->xss_clean($this->input->post('kota'));
            $KATEGORI_PERMOHONAN=$this->security->xss_clean($this->input->post('kategori_permohonan_PI'));
            $DESKRIPSI_PERMOHONAN_INFORMASI=$this->security->xss_clean($this->input->post('deskripsi_permohonan_informasi_PI'));
            $BIDANG_YANG_DITUJU=$this->security->xss_clean($this->input->post('bidang_yang_dituju_PI'));
            $this->form_validation->set_rules('pilih_identitas_PI','Pilih Identitas','required');
            $this->form_validation->set_rules('nomor_identitas_PI','Nomor Identitas','required');
            $this->form_validation->set_rules('nama_PI','Nama','required');
            $this->form_validation->set_rules('alamat_PI','Alamat','required');
            $this->form_validation->set_rules('provinsi','Provinsi','required');
            $this->form_validation->set_rules('kota','Kab/Kota','required');
            $this->form_validation->set_rules('kategori_permohonan_PI','kategori permohonan','required');
            $this->form_validation->set_rules('deskripsi_permohonan_informasi_PI','Deskripsi Permohonan Informasi','required');
            $this->form_validation->set_rules('bidang_yang_dituju_PI','Bidang Yang Dituju','required');


            if(!$this->form_validation->run()){
                $this->session->set_flashdata('msg_alert', validation_errors());
			      	redirect( base_url('/' ) );
            }
            $this->m_pi->simpan_permohonan_informasi($IDENTITAS,$NOMOR,$NAMA,$UNIT_KERJA,$SUB_UNIT_KERJA,$ALAMAT,
            $PROVINSI,$KAB_KOTA,$KATEGORI_PERMOHONAN,$DESKRIPSI_PERMOHONAN_INFORMASI,$BIDANG_YANG_DITUJU);
        
        

        
            $this->load->view('v_permohonan_informasi');
            }
          }


 }
