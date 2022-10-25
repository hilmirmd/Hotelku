<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Hotelku extends CI_Controller{ 
    function __construct(){
         parent::__construct();
         $this->load->helper('url');
    }

    public function index(){ 
        $data['judul'] = "Selamat Datang di Hotelku"; 
        $this->load->view('v_header',$data); 
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data); 
    } 
    public function reservasi() { 
        $data['judul'] = "Silahkan reservasi"; 
        $this->load->view('v_header', $data); 
        $this->load->view('v_reservasi', $data); 
        $this->load->view('v_footer', $data); 
    }
    }
?>