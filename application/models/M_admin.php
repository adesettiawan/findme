<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_batch($arrayData)
    {
        $query = "SELECT * FROM (`data_customer`)";

        $data =  $this->db->query($query)->result_array();

        if ($data > 0) {
            $this->db->empty_table('data_customer');
            $this->db->insert_batch('data_customer', $arrayData);
            if ($this->db->affected_rows() > 0) {
                return 1;
            } else {
                return 0;
            }
        } else {

            $this->db->insert_batch('data_customer', $arrayData);
            if ($this->db->affected_rows() > 0) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    public function checkdata($no_customers)
    {
        $query = "SELECT * FROM (`data_customer`) WHERE no_customer = 1119872";

        return $this->db->query($query)->row_array();
        // echo print_r($no_customers);
        // return $this->db->query($query)->row_array();
    }

    //search keyword
    public function search_keyword($keyword)
    {
        if (!$keyword) {
            return null;
        }

        $query = "SELECT *
        FROM (`data_customer`)
        WHERE MATCH (`Name`, `Date`) AGAINST ('{$keyword}' IN BOOLEAN MODE)
        OR `id` LIKE '%{$keyword}%' OR `no_customer` LIKE '%{$keyword}%'
        OR `Name` LIKE '%{$keyword}%'
        OR `Date` LIKE '%{$keyword}%'";

        // $this->db->query("ALTER TABLE `data_customer` ADD FULLTEXT(`Name`,`Date`,`Address`)");

        return $this->db->query($query)->result_array();
    }
}
