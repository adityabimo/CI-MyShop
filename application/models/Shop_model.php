<?php

class Shop_model extends CI_Model {

  public function get(){
    $query = $this->db->get('produk');
    return $query->result_array();
  }

  public function insert_customer($data)
{
$this->db->insert('pelanggan', $data);
$id = $this->db->insert_id();
return (isset($id)) ? $id : FALSE;
}

// Insert order date with customer id in "orders" table in database.
public function insert_order($data)
{
$this->db->insert('tbl_order', $data);
$id = $this->db->insert_id();
return (isset($id)) ? $id : FALSE;
}

// Insert ordered product detail in "order_detail" table in database.
public function insert_order_detail($data)
{
$this->db->insert('tbl_detail_order', $data);
}


}
