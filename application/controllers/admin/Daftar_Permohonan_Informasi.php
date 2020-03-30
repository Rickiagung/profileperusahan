<?php
class Daftar_Permohonan_Informasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_Permohonan_informasi');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->M_Permohonan_informasi->get_all_permohonan();
		$this->load->view('admin/v_daftar_permohonan_informasi',$x);
	}

	function simpan_kategori(){
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->M_Permohonan_informasi->simpan_permohonan($kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/Daftar_Permohonan_Informasi');
	}

	function update_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->M_Permohonan_informasi->update_permohonan($kode,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/Daftar_Permohonan_Informasi');
	}
	function hapus_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$this->M_Permohonan_informasi->hapus_permohonan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/Daftar_Permohonan_Informasi');
	}
	

}