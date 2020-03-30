<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Informasi_berkala extends CI_Controller {
        public function index() {
          
            $this->load->view('v_informasi_berkala');
        }
    }