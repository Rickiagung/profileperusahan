<?php 
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
		$this->load->model('m_galeri');
		$this->load->model('m_album');
		$this->load->model('M_RekapSosmed');
	
	}
	function index(){
		$x['post']=$this->m_tulisan->get_post_home();
		$x['alb']=$this->m_album->get_all_album();
		$x['data']=$this->m_galeri->get_all_galeri();
		$x['chart'] = $this->M_RekapSosmed->get_all_sosmed();
		
		
		$this->load->view('v_home',$x);
	}
}