<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengaduan_asn extends CI_Controller
{
   
    private $m_pa;

    function __construct(){
        parent::__construct();
        $this->load->model('M_Pengaduan_asn');
        $this->load->database();
        $this->load->library('form_validation');
      
        $this->m_pa = $this->M_Pengaduan_asn;        
    }

    public function index(){
        
        $data1['provinsi']=$this->M_Pengaduan_asn->getProv();
        $data1['kota']=$this->M_Pengaduan_asn->getKab();



        $this->load->view('v_pengaduan_asn',$data1);
    }

    public function add_pengaduan_asn(){

        // $pengaduan_asn=$this->pengaduan_asn_model;
        // $validation=$this->form_validation;
        // $validation->set_rules($pengaduan_asn->rules());
        // if($validation->run()){
        //     $pengaduan_asn->tambah_pengaduan_asn();
        //     $this->session->set_flashdata('success','berasil disimpan');

        // }
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $NAMA= $this->security->xss_clean($this->input->post('nama_PA'));
            $TELEPON=$this->security->xss_clean($this->input->post('telepon_PA'));
            $EMAIL=$this->security->xss_clean($this->input->post('email_PA'));
            $ALAMAT=$this->security->xss_clean($this->input->post('alamat_PA'));
            $PROVINSI=$this->security->xss_clean($this->input->post('provinsi'));
            $KAB_KOTA=$this->security->xss_clean($this->input->post('kota'));
            $NIP_TERLAPOR=$this->security->xss_clean($this->input->post('nip_terlapor_PA'));
            $NAMA_TERLAPOR=$this->security->xss_clean($this->input->post('nama_terlapor_PA'));
            $IDENTITAS_TERLAPOR=$this->security->xss_clean($this->input->post('indentitas_terlapor_PA'));
            $DESKRIPSI_TERLAPOR=$this->security->xss_clean($this->input->post('deskripsi_terlapor_PA'));
            $SAKSI=$this->security->xss_clean($this->input->post('saksi_PA'));
            $this->form_validation->set_rules('nama_PA','Nama','required');
            $this->form_validation->set_rules('telepon_PA','Telepon','required');
            $this->form_validation->set_rules('email_PA','Email','required');
            $this->form_validation->set_rules('alamat_PA','Alamat','required');
            $this->form_validation->set_rules('provinsi','Provinsi','required');
            $this->form_validation->set_rules('kota','Kab/Kota','required');
            $this->form_validation->set_rules('nip_terlapor_PA','NIP Terlapor','required');
            $this->form_validation->set_rules('nama_terlapor_PA','Nama Terlapor','required');
            $this->form_validation->set_rules('indentitas_terlapor_PA','Indentitas Terlapor','required');
            $this->form_validation->set_rules('deskripsi_terlapor_PA','Deskripsi Terlapor','required');
            $this->form_validation->set_rules('saksi_PA','Saksi','required');


            if(!$this->form_validation->run()){
                $this->session->set_flashdata('msg_alert', validation_errors());
				redirect( base_url('/' ) );
            }
            $this->M_Pengaduan_asn->simpan_pengaduan_asn($NAMA,$TELEPON,$EMAIL,$ALAMAT,$PROVINSI, 
            $KAB_KOTA,$NIP_TERLAPOR,$NAMA_TERLAPOR,$IDENTITAS_TERLAPOR,$DESKRIPSI_TERLAPOR,$SAKSI);
        
        

  
            redirect( base_url('/' ) );
      }
    }

  //   public function getKab($id_prov)
	// {
	//   $kab=$this->pengaduan_asn_model->getKab($id_prov);
	//    echo"<option value=''>Pilih Kota/Kab</option>";
	//   foreach($kab as $k){
	//     echo "<option value='{$k->id_kab}'>{$k->nama}</option>";
	//   }
  // }

	

}
