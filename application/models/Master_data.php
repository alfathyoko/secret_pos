<?php

// extends class Model
class Master_data extends CI_Model{

  public function __construct()
      {
          parent::__construct();
          $this->db_master = $this->load->database('db_secret_pos', TRUE);
      }

  // response jika field ada yang kosong
  public function empty_response(){
    $response['status']=502;
    $response['error']=true;
    $response['message']='Field tidak boleh kosong';
    return $response;
  }

    // mengambil semua data person
    public function all_person(){

      $all = $this->db_master->get("tb_user")->result();
      $response['status']=200;
      $response['error']=false;
      $response['data']=$all;
      return $response;

    }

}
