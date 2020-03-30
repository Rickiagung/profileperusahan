<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Informasi_setiap_saat extends CI_Controller {
        public function index() {
          
            $this->load->view('v_informasi_setiap_saat');
        }
    }