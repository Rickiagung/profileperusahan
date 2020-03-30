<?php
class Daftar_Keberatan_Informasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_Keberatan_informasi');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->M_Keberatan_informasi->get_all_keberatan_informasi();
		$this->load->view('admin/v_daftar_keberatan_informasi',$x);
	}

	// function simpan_keberatan(){
	// 	$keberatan=strip_tags($this->input->post('xkategori'));
	// 	$this->M_Keberatan_informasi->simpan_kategori($keberatan);
	// 	echo $this->session->set_flashdata('msg','success');
	// 	redirect('admin/v_daftar_keberatan_informasi');
	// }

	// function update_keberatan(){
	// 	$kode=strip_tags($this->input->post('kode'));
	// 	$keberatan=strip_tags($this->input->post('xkategori'));
	// 	$this->M_Keberatan_informasi->update_kategori($kode,$keberatan);
	// 	echo $this->session->set_flashdata('msg','info');
	// 	redirect('admin/v_daftar_keberatan_informasi');
	// }
	function hapus_keberatan(){
		$kode=strip_tags($this->input->post('kode'));
		$this->M_Keberatan_informasi->hapus_kategori($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/v_daftar_keberatan_informasi');
	}


}