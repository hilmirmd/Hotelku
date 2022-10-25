<?php 

class Hotelku extends CI_Controller 
{ 
    
    public function index() 
    { 
        $this->load->view('v_reservasi'); 
    } 

    public function cetak() 
    {
        $this->form_validation->set_rules('nik','nik Reservasi','required|min_length[3]',[
            'required' => "NIK harus diisi",
            'min_length' => "NIK terlalu pendek minimal 5 karakter"]);
        $this->form_validation->set_rules('nama','nama Reservasi','required|min_length[3]',[
            'required' => "Nama harus diisi",
            'min_length' => "Nama terlalu pendek minimal 6 karakter"]);
        $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin Reservasi','required|min_length[3]',[
            'required' => "Jenis Kelamin harus diisi",
            'min_length' => "Jenis Kelamin terlalu pendek minimal 3 karakter"]);
        $this->form_validation->set_rules('alamat','alamat Reservasi','required|min_length[3]',[
            'required' => "Alamat  harus diisi",
            'min_length' => "Alamat terlalu pendek minimal 3 karakter"]);
        $this->form_validation->set_rules('tipe','tipe Reservasi','required|min_length[3]',[
            'required' => "Tipe harus diisi",
            'min_length' => "Tipe terlalu pendek minimal 3 karakter"]);
        $this->form_validation->set_rules('tanggal_checkin','tanggal_checkin Reservasi','required|min_length[3]',[
            'required' => "Tanggal Checkin harus diisi",
            'min_length' => "Tanggal Checkin terlalu pendek minimal 5 karakter"]);
        $this->form_validation->set_rules('lama_inap','lama_inap Reservasi','required|min_length[3]',[
            'required' => "Lama Inap harus diisi",
            'min_length' => "Lama Inap terlalu pendek minimal 5 karakter"]);
        if ($this->form_validation->run() != true) { 
            $this->load->view('v_reservasi'); 
        } 
        else {
            $data = [ 
                'nik' => $this->input->post('nik'), 
                'nama' => $this->input->post('nama'), 
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'), 
                'tipe' => $this->input->post('tipe'), 
                'tanggal_checkin' => $this->input->post('tanggal_checkin'), 
                'lama_inap' => $this->input->post('lama_inap'), 
            ]; 
        
            $this->load->view('view-data-datasiswa', $data); 
        } 
    }
} 