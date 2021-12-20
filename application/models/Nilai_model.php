<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Nilai_model extends CI_Model{
    public function getNilai()
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('mahasiswa','nilai.Id_mhs = mahasiswa.Id_mhs','LEFT');	
        return $this->db->get()->result_array();
    }
    public function getById($id)
    {   
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('mahasiswa','nilai.Id_mhs = mahasiswa.Id_mhs','LEFT');
        $this->db->where( "Id_nilai", $id);
        return $this->db->get()->row();
    }
    public function update($data,$id)
    {
        return $this->db->update('nilai', $data, array('Id_nilai' => $id));
    }
}