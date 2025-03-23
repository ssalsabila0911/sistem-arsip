<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        // Pastikan user sudah login sebagai admin
        if (!$this->session->userdata('status') || $this->session->userdata('status') != 'petugas_login') {
            redirect('auth/login', 'refresh'); // Redirect ke halaman login
        }
    }

    public function index() {
        $this->load->view("petugas/header");
        $this->load->view("petugas/arsip_tampil");
        $this->load->view("petugas/footer");
    }
}
