<?php

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller{

  // construct
  public function __construct(){
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
    parent::__construct();
    $this->load->model('PersonM');
    $this->load->model('Master_data');
    $this->load->helper(array('form', 'url'));
		$this->load->helper('url');
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
      $btn = "<a href='#' onclick=\"editDataUser(" . $value['id'] . ")\" title='Edit'><i class='fa fa-pencil'></i></a>
          <a href='#' onclick=\"deleteDataUser(" . $value['id'] . ")\" title='Hapus '><i class='fa fa-close'></i></a>";
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

  public function person_post(){
    $response['data'] = $this->PersonM->all_person_id($this->post('id'));
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

  public function ubah_post(){
    $response = $this->PersonM->update_person(
        $this->post('id'),
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
  public function hapus_delete(){
    $response = $this->PersonM->delete_person(
        $this->delete('id')
      );
    $this->response($response);
  }



}

?>
