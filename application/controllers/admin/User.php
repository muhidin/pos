<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
        parent::__construct();
		is_admin();
		$this->load->model('UserModel');
	}

	public function index(){
		$data['row'] = $this->UserModel->get();
		$this->template->load('template', 'admin/user/index', $data);
	}

	public function add(){
		$this->template->load('template', 'admin/user/add');
	}
}
