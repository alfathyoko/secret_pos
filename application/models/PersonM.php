<?php

// extends class Model
class PersonM extends CI_Model{
  public function __construct()
      {
          parent::__construct();
          $this->db = $this->load->database('default', TRUE);
      }
  // response jika field ada yang kosong
  public function empty_response(){
    $response['status']=502;
    $response['error']=true;
    $response['message']='Field tidak boleh kosong';
    return $response;
  }

  // function untuk insert data ke tabel tb_person
  public function add_person($name,$address,$phone){

    if(empty($name) || empty($address) || empty($phone)){
      return $this->empty_response();
    }else{
      $data = array(
        "name"=>$name,
        "address"=>$address,
        "phone"=>$phone
      );

      $insert = $this->db->insert("tb_person", $data);

      if($insert){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Data person ditambahkan.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data person gagal ditambahkan.';
        return $response;
      }
    }

  }

  // mengambil semua data person
  public function all_person(){

    $all = $this->db->get("tb_person")->result_array();
    // $response['status']=200;
    // $response['error']=false;
    // $response['data']=$all;
    return $all;

  }

  public function all_person_id($id){
      $this->db->select('*');
      $this->db->from('tb_person');
      $this->db->where('id',$id);
      $all = $this->db->get()->result();
      $response['data'] = $all;
      return $all;
  }

  // hapus data person
  public function delete_person($id){

    if($id == ''){
      $response['id'] = 'Kosong';
      // return $this->empty_response();
      return $response;
    }else{
      $where = array(
        "id"=>$id
      );

      $this->db->where($where);
      $delete = $this->db->delete("tb_person");
      if($delete){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Data person dihapus.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data person gagal dihapus.';
        return $response;
      }
    }

  }

  // update person
  public function update_person($id,$name,$address,$phone){

    if($id == '' || empty($name) || empty($address) || empty($phone)){
      return $this->empty_response();
    }else{
      $where = array(
        "id"=>$id
      );

      $set = array(
        "name"=>$name,
        "address"=>$address,
        "phone"=>$phone
      );

      $this->db->where($where);
      $update = $this->db->update("tb_person",$set);
      if($update){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Data person diubah.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data person gagal diubah.';
        return $response;
      }
    }

  }

}

?>
