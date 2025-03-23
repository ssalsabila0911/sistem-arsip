<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    // Halaman dashboard
    public function index() {
        // Menampilkan halaman dashboard
        $this->load->view('petugas/header');
        $this->load->view('petugas/dashboard');
        $this->load->view('petugas/footer');
    }
}