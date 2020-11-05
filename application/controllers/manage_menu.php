<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Menu_model','Menu');
	}

	public function index()
	{
		$this->load->view('form_menu');
	}


	public function reg_train(){
		$data = array(
			'Train_id' => $this->input->post("Train_id"),
			'Station' => $this->input->post("Station"),
			'Out_Station' => $this->input->post("Time_out"),
			'To_HR'=> $this->input->post("To_HR"),
			'Out_HR' => $this->input->post("Out_HR"),
			'Station_destination' => $this->input->post("Station_destination"),
			'To_PT' => $this->input->post("to_time"),
			'Decaption'=> $this->input->post("note"),
		);
		if($this->input->post("Train_id")!= "" && $this->input->post("Station")!== ""){
			$this->Menu->insert($data);
			$this->load->view('view_insert_successwithmenulink');
		}else {
			echo "ไม่สามารถเพิ่มเมนูได้";
		}
	}

	public function showall()
	{
		$result['menus'] = $this->Menu->getAll();
		$this->load->view('view_menu',$result);
	}
}
