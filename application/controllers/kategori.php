<?php

class Kategori extends CI_Controller{

    public function software()
    {
        $data['software'] = $this->model_kategori->
        data_software()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('software', $data);
        $this->load->view('templates/footer');
    }

    public function baju()
    {
        $data['baju'] = $this->model_kategori->
        data_baju()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('baju', $data);
        $this->load->view('templates/footer');
    }

    public function celana()
    {
        $data['celana'] = $this->model_kategori->
        data_celana()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('celana', $data);
        $this->load->view('templates/footer');
    }

    public function sepatu()
    {
        $data['sepatu'] = $this->model_kategori->
        data_sepatu()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sepatu', $data);
        $this->load->view('templates/footer');
    }
    
    public function jaket()
    {
        $data['jaket'] = $this->model_kategori->
        data_jaket()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jaket', $data);
        $this->load->view('templates/footer');
    }
}