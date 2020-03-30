<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Daftar_pejabat_struktural extends CI_Controller {
        public function index() {
        
            $this->load->view('v_daftar_pejabat_struktural');
        }
    }