<?php
require APPPATH . 'libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 var $API ="";

	 public function __construct(){
		parent ::__construct();
    $this->load->helper(array('form', 'url'));
		$this->API="http://localhost/secret_pos/Api";
		$this->load->library('session');
    $this->load->library('curl');
		$this->load->helper('url');

		// $this->load->helper('url');
	}

	public function index()
	{
		$data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/index_get'));
		$this->load->view('header');
		$this->load->view('table_data_tables',$data);
		// $this->load->view('footer');
	}

	public function tesdata(){
		$data = json_decode($this->curl->simple_get($this->API.'/index'));

		echo json_encode($data);
	}

}
