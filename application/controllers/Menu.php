<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index() {       
        $data['record']=  $this->db->get('tb_menu')->result();
        $this->load->view('admin/v_view_menu',$data);
    }
    
    function add() {
        if(isset($_POST['submit'])) {
            $data   =   array(  'nama_menu' =>  $_POST['nama'],
                                'link'      =>  $_POST['link'],
                                'icon'      =>  $_POST['icon'],
                                'kat_menu'  =>  $_POST['kat_menu']);
            $this->db->insert('tb_menu',$data);
            redirect('menu');
        }
        else {
            $data['record']=$this->db->get_where('tb_menu', array('kat_menu' =>0))->result();            
            $this->load->view('admin/v_tambah_menu',$data);
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit']))
        {
            $data   =   array(  'nama_menu' =>  $_POST['nama'],
                                'link'      =>  $_POST['link'],
                                'icon'      =>  $_POST['icon'],
                                'kat_menu'  =>  $_POST['kat_menu']);

            $this->db->where('id_menu',$_POST['id']);
            $this->db->update('tb_menu',$data);
            redirect('menu');
        }
        else {
            $id= $this->uri->segment(3);
            $data['record']=  $this->db->get_where('tb_menu',array('id_menu'=> $id))->row_array();
            $data['katmenu']=$this->db->get_where('tb_menu', array('kat_menu' =>0))->result(); 
            $this->load->view('admin/v_edit_menu',$data);
        }
    }
    
    
    function delete($id){
		$this->db->where('id_menu',$id);
		$this->db->delete('tb_menu');
       	redirect('menu');
    }
}