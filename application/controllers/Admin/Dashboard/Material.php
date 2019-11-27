<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Material extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('admin/ModelMaterial');
    }
    public function index(){
        $headerData['pageTitle'] = 'فهرست جنس محصولات';
        $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/material/home/index');
        $this->load->view('admin_panel/material/home/index_css');
        $this->load->view('admin_panel/material/home/index_js');
	    $this->load->view('admin_panel/static/footer');
	}
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data= $this->ModelMaterial->getAllMaterials($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/material/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function add()
    {
        $headerData['pageTitle'] = 'افزودن جنس جدید';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/material/add/index');
        $this->load->view('admin_panel/material/add/index_css');
        $this->load->view('admin_panel/material/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddMaterial(){
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelMaterial->doAddMaterial($inputs);
        echo json_encode($result);
    }
    public function edit($id)
    {
        $headerData['pageTitle'] = 'ویرایش جنس';
        $data['data'] = $this->ModelMaterial->getMaterialByMaterialId($id)['data'][0];
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/material/edit/index', $data);
        $this->load->view('admin_panel/material/edit/index_css');
        $this->load->view('admin_panel/material/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditMaterial()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelMaterial->doEditMaterial($inputs);
        echo json_encode($result);
    }
    public function doDeleteMaterial()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
         $result = $this->ModelMaterial->doDeleteMaterial($inputs);
        echo json_encode($result);
    }
}
