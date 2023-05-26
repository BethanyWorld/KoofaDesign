<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sizes extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('admin/ModelSizes');
    }

    public function index(){
        $headerData['pageTitle'] = 'فهرست سایز';
        $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/sizes/home/index');
        $this->load->view('admin_panel/sizes/home/index_css');
        $this->load->view('admin_panel/sizes/home/index_js');
	    $this->load->view('admin_panel/static/footer');
	}
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data= $this->ModelSizes->getAllSizes($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/sizes/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function add()
    {
        $headerData['pageTitle'] = 'افزودن سایز جدید';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/sizes/add/index');
        $this->load->view('admin_panel/sizes/add/index_css');
        $this->load->view('admin_panel/sizes/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddSize(){
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelSizes->doAddSize($inputs);
        echo json_encode($result);
    }

    public function edit($id)
    {
        $headerData['pageTitle'] = 'ویرایش سایز';
        $data['data'] = $this->ModelSizes->getSizeBySizeId($id)['data'][0];
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/sizes/edit/index', $data);
        $this->load->view('admin_panel/sizes/edit/index_css');
        $this->load->view('admin_panel/sizes/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditSize()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelSizes->doEditSize($inputs);
        echo json_encode($result);
    }

    public function doDeleteSize()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
         $result = $this->ModelSizes->doDeleteSize($inputs);
        echo json_encode($result);
    }

}
