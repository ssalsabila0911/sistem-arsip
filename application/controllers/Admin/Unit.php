<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        // Pastikan user sudah login sebagai admin
        if (!$this->session->userdata('status') || $this->session->userdata('status') != 'admin_login') {
            redirect('auth/login', 'refresh'); // Redirect ke halaman login
        }
    }

    public function index() {
        $this->load->view("admin/header");
        $this->load->view("admin/unit_tampil");
        $this->load->view("admin/footer");
    }
}
