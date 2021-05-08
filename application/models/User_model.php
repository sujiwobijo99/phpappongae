<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_keyword($keyword)
    {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->like("nama", $keyword);
        $this->db->or_like("email", $keyword);

        return $this->db->get()->result();
    }
}
