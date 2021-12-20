<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mhs_model extends CI_Model{
    public function getMhs()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
    public function save($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }
    public function getById($id)
    {   
        return $this->db->get_where('mahasiswa', ["Id_mhs" => $id])->row();
    }
    public function update($data,$id)
    {
        return $this->db->update('mahasiswa', $data, array('Id_mhs' => $id));
    }
    public function delete($id)
    {
        return $this->db->delete('mahasiswa', array("Id_mhs" => $id));
    }
}
