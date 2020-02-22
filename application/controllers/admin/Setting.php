<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct(){
        parent::__construct();
		is_admin();
		$this->load->model('SettingModel');
	}
	public function index()
	{
		$data['row'] = $this->SettingModel->get();
		$this->template->load('template', 'admin/lembaga/index', $data);
	}
}
