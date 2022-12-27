<?php

class Model_kategori extends CI_Model{
    
    public function data_software(){
        return $this->db->get_where("tb_barang",
        array('kategori' =>'software'));
    }

    public function data_baju(){
        return $this->db->get_where("tb_barang",
        array('kategori' =>'baju'));
    }

    public function data_celana(){
        return $this->db->get_where("tb_barang",
        array('kategori' =>'celana'));
    }

    public function data_sepatu(){
        return $this->db->get_where("tb_barang",
        array('kategori' =>'sepatu'));
    }

    public function data_jaket(){
        return $this->db->get_where("tb_barang",
        array('kategori' =>'jaket'));
    }
}