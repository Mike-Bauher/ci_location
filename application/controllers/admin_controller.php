<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/index_view');
	}
}
