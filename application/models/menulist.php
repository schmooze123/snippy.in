<?php
class Menulist extends CI_Model{
	public function menu_list(){
		$menus = $this->db
					 	->select('id, drink_name, drink_desc, price')
					 	->from('drinks')
					 	->where('category', 1)
					 	->get();

		return $menus->result();
	}

	public function category_list()
	{
		$category = $this->db->select('name')
							 ->from('drinks_category')
							 ->get();

			return $category->result();
	}
}
