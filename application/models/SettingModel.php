<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SettingModel extends CI_Model{
    public function get($id=null){
        $this->db->from('setting');
        $query = $this->db->get();
        return $query;
    }
}
