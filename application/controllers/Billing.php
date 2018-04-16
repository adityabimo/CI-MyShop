<?php

class Billing extends CI_Controller {

  public function index() {
    $this->load->view('templates/header');
    $this->load->view('order');
    $this->load->view('templates/footer');
  }

  public function save_order() {

    // This will store all values which inserted from user.
$customer = array(
'nama' => $this->input->post('nama'),
'email' => $this->input->post('email'),
);
// And store user information in database.
$cust_id = $this->Shop_model->insert_customer($customer);

$order = array(
'pelanggan' => $cust_id
);

$ord_id = $this->Shop_model->insert_order($order);


foreach ($this->cart->contents() as $item):
$order_detail = array(
'order_id' => $ord_id,
'produk' => $item['id'],
'qty' => $item['qty'],
'harga' => $item['price']
);

// Insert product imformation with order detail, store in cart also store in database.

$cust_id = $this->Shop_model->insert_order_detail($order_detail);
endforeach;


redirect('shop');

  }



}
