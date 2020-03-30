<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Keberatan_informasi extends CI_Controller{

    private $m_ki;

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Keberatan_informasi');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->library('session');
      
        $this->m_ki = $this->M_Keberatan_informasi;
    }

    public function index(){
        $data1['provinsi']=$this->M_Keberatan_informasi->getProv();
        $data1['kota']=$this->M_Keberatan_informasi->getKota();
        $this->load->library("session");
      

        $data1['alasankeberatan']=$this->M_Keberatan_informasi->getAlasanKeberatan();
        $this->load->view('v_keberatan_informasi',$data1);
   
        
  
    }
    function get_kota(){
        $id_prov = $this->input->post('id_prov',TRUE);
        $data1 = $this->M_Keberatan_informasi->getKab($id_prov)->result();
        echo json_encode($data1);
    }


    public function add_keberatan_informasi(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $NAMA= $this->security->xss_clean($this->input->post('nama_KI'));
        $TELEPON=$this->security->xss_clean($this->input->post('telepon_KI'));
        $EMAIL=$this->security->xss_clean($this->input->post('email_KI'));
        $ALAMAT=$this->security->xss_clean($this->input->post('alamat_KI'));
        $PROVINSI=$this->security->xss_clean($this->input->post('provinsi'));
        $KAB_KOTA=$this->security->xss_clean($this->input->post('kota'));
        $ALASAN_KEBERATAN_KI=$this->security->xss_clean($this->input->post('alasan_keberatan_KI'));
        $DESKRIPSI_KEBERATAN_INFORMASI=$this->security->xss_clean($this->input->post('deskripsi_keberatan_informasi_KI'));
        $this->form_validation->set_rules('nama_KI','Nama','required');
        $this->form_validation->set_rules('telepon_KI','Telepon','required');
        $this->form_validation->set_rules('email_KI','Email','required');
        $this->form_validation->set_rules('alamat_KI','Alamat','required');
        $this->form_validation->set_rules('provinsi','Provinsi','required');
        $this->form_validation->set_rules('kota','Kab/Kota','required');
        $this->form_validation->set_rules('alasan_keberatan_KI','Alasan Keberatan','required');
        $this->form_validation->set_rules('deskripsi_keberatan_informasi_KI','Deskripsi Keberatan Informasi','required');
  


        if(!$this->form_validation->run()){
            $this->session->set_flashdata('msg_alert', validation_errors());
        	redirect( base_url('/' ) );
        }
        $this->m_ki->simpan_keberatan_informasi($NAMA,$TELEPON,$EMAIL,$ALAMAT,$PROVINSI, 
        $KAB_KOTA,$ALASAN_KEBERATAN_KI,$DESKRIPSI_KEBERATAN_INFORMASI);


       
        $this->load->view('v_keberatan_informasi');
        }


    }

}
