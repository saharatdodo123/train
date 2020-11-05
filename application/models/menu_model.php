<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        
		function getAll(){
			$this->db->select('Train_id, Station, Out_Station,To_HR,Out_HR,Station_destination,To_PT,Decaption');
			$this->db->order_by('Out_Station','desc');
			$result = $this->db->get('train');
			return $result;
		}

        function insert($data){
			$this->db->insert('train',$data);
        }
        
		
}