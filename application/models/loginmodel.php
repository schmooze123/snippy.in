<?php
class Loginmodel extends CI_Model {
	public function validate_login($username, $password){
		
		$query = $this->db->where(['Femail'=>$username, 'upass'=>$password])
						->from('users')
						->get();
	
		if($query->num_rows()){
			return $query->row()->UID; 
			//return TRUE;
		}else{
			return FALSE;
		}
	}
}