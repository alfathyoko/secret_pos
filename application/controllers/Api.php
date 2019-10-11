<?php

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller{

  // construct
  public function __construct(){
    parent::__construct();
    $this->load->model('PersonM');
    $this->load->model('Master_data');
  }

  // method index untuk menampilkan semua data person menggunakan method get
  public function index_get(){
    $data = $this->PersonM->all_person();
    $no = 1;
    $respone = array();
    $post = array();
    $status = "";

    foreach ($data as $key => $value) {
      // code...
      $btn = "<a href='#' onclick=\"#\" title='Cetak'><i class='fa fa-print'></i></a>
          <a href='#' onclick=\"#\" title='Hapus '><i class='fa fa-close'></i></a>";
      $posts[] = array(
            "no" => $no,
            "name" => $value['name'],
            "address" => $value['address'],
            "phone" => $value['phone'],
            "action" => $btn,
        );
        $no++;
    }
    $response['data'] = $posts;
    $this->response($response);
  }

  // untuk menambah person menaggunakan method post
  public function index_post(){
    $response = $this->PersonM->add_person(
        $this->post('name'),
        $this->post('address'),
        $this->post('phone')
      );
    $this->response($response);
  }

  // update data person menggunakan method put
  public function index_put(){
    $response = $this->PersonM->update_person(
        $this->put('id'),
        $this->put('name'),
        $this->put('address'),
        $this->put('phone')
      );
    $this->response($response);
  }

  // hapus data person menggunakan method delete
  public function index_delete(){
    $response = $this->PersonM->delete_person(
        $this->delete('id')
      );
    $this->response($response);
  }

}

?>
