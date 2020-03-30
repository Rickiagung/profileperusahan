<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Visi_misi extends CI_Controller {
        public function index() {
         
            $this->load->view('v_visi_misi');
        }
    }