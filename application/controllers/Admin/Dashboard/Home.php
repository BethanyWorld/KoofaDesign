<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
    }
	public function index()
	{
	    $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'پیشخوان';
	    $this->load->view('admin_panel/static/header', $data);
	    $this->load->view('admin_panel/home/index');
	    $this->load->view('admin_panel/static/footer');
	}

}
