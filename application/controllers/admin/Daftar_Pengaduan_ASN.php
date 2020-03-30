<?php
class Daftar_Pengaduan_ASN extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_Pengaduan_asn');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->M_Pengaduan_asn->get_all_pengaduan_asn();
		$this->load->view('admin/v_daftar_pengaduan_asn',$x);
	}

	// function simpan_kategori(){
	// 	$kategori=strip_tags($this->input->post('xkategori'));
	// 	$this->M_Pengaduan_asn->simpan_pengaduan($kategori);
	// 	echo $this->session->set_flashdata('msg','success');
	// 	redirect('admin/Daftar_Pengaduan_ASN');
	// }

	// function update_kategori(){
	// 	$kode=strip_tags($this->input->post('kode'));
	// 	$pengaduan=strip_tags($this->input->post('xkategori'));
	// 	$this->M_Pengaduan_asn->update_pengaduan($kode,$pengaduan);
	// 	echo $this->session->set_flashdata('msg','info');
	// 	redirect('admin/Daftar_Pengaduan_ASN');
	// }
	// function hapus_kategori(){
	// 	$kode=strip_tags($this->input->post('kode'));
	// 	$this->M_Pengaduan_asn->hapus_pengaduan($kode);
	// 	echo $this->session->set_flashdata('msg','success-hapus');
	// 	redirect('admin/Daftar_Pengaduan_ASN');
	// }
	

}