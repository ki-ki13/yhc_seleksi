<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model{
    public function cek_login($username)
    {
        $hasil = $this->db->where('username', $username)->limit(1)->get('admin');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
}