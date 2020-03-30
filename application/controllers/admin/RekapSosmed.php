<?php
class Rekapsosmed extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_RekapSosmed');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->M_RekapSosmed->get_all_sosmed();
		$this->load->view('admin/v_rekap_sosmed',$x);
	}

	function simpan_sosmed(){
		$sosmed=strip_tags($this->input->post('xrekapsosmed'));
		$this->M_RekapSosmed->simpan_sosmed($sosmed);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kategori');
	}

	function update_sosmed(){
		$kode=strip_tags($this->input->post('kode'));
		$kategori=strip_tags($this->input->post('xsosmed'));
		$this->m_kategori->update_kategori($kode,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/RekapSosmed');
	}
	function hapus_sosmed(){
		$kode=strip_tags($this->input->post('kode'));
		$this->M_RekapSosmed->hapus_sosmed($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/RekapSosmed');
	}
	

}