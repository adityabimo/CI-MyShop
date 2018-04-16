<?php

class Shop extends CI_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Shop_model');
	}


  public function index() {
    $data['produk'] = $this->Shop_model->get();

    $this->load->view('templates/header',$data);
    $this->load->view('list',$data);
    $this->load->view('templates/footer',$data);

  }

  public function tambah() {

    $data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('harga'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data_produk);
    redirect('shop');

  }

  public function tampil_cart(){
    //$this->load->view('templates/header');
    $this->load->view('cart');
    //$this->load->view('templates/footer');
  }

  public  function clear(){
    $this->cart->destroy();
    redirect('shop');
  }

  public function update(){

    //Get number of items in cart
		$count = $this->cart->total_items();

		//Get info from POST
		$item = $this->input->post('rowid');
	  $qty = $this->input->post('jmlh');

		//Step through items
		for($i=0;$i < $count;$i++)
		{
			$data = array(
               'rowid' => $item[$i],
               'qty'   => $qty[$i]
            );
			$this->cart->update($data);
		}
  redirect('shop');
  }

  public function delete($id) {

    $this->cart->remove($id);
    redirect('shop');
 }


  }
