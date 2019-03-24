<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model{

    public $tableName = "members";

    public function __construct()
    {
        parent::__construct();
    }

    /** Tüm verileri veritabanına kayıy edecek olan metot.. */
    public function add($data = array()){
        return $this->db->insert($this->tableName, $data);
    }


}