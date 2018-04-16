<?php

class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->database();
    $this->load->helper('url');

    $this->load->library('grocery_CRUD');
  }

  public function admin_output($output = null)
  {
    $this->load->view('admin.php',(array)$output);
  }

  public function produk()
  {
      $crud = new grocery_CRUD();

      $crud->set_theme('datatables');
      $crud->set_table('produk');
      $crud->set_subject('Produk');

      $crud->set_field_upload('gambar','assets/images/produk');

      $output = $crud->render();

      $this->admin_output($output);
  }



}
