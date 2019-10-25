<?php

require APPPATH . 'libraries/REST_Controller.php';

class InsertData extends REST_Controller{

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
  public function index_post(){
    $response = $this->PersonM->add_person(
        $this->post('name'),
        $this->post('address'),
        $this->post('phone')
      );
    $this->response($response);
  }
}
