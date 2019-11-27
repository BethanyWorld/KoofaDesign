<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelProfile');
    }
	public function index()
	{
        $data['pageTitle'] = 'ویرایش پروفایل';
        $data['adminInfo'] = $this->ModelProfile->getManagerInfo();
	    $this->load->view('admin_panel/static/header', $data);
	    $this->load->view('admin_panel/profile/index', $data);
        $this->load->view('admin_panel/profile/index_css');
        $this->load->view('admin_panel/profile/index_js');
	    $this->load->view('admin_panel/static/footer');
	}
    public function doUpdateProfile()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $inputs['ManagerId']  =$this->session->userdata('AdminLoginInfo')[0]['ManagerId'];
        $result = $this->ModelProfile->doUpdateProfile($inputs);
        echo json_encode($result);
    }

}
