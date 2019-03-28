<?php
class Menu extends CI_Controller{
	public function index(){
		$this->load->model('menulist', 'menus');
		$this->load->model('menulist', 'category');
		$menus = $this->menus->menu_list();
		$category = $this->category->category_list();
		$this->load->view('menu', ['menus'=>$menus, 'category'=>$category]);
	}
}