<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MSChange extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('admin/ModelProductCategory');
        $this->load->model('admin/ModelProduct');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
        $this->load->model('admin/ModelDiscount');
    }

    public function index(){
        $headerData['pageTitle'] = 'تغییر جنس و سایز';
        $data['productShape'] = $this->config->item('productShape');
        $data['categories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['materials'] = $this->ModelMaterial->getAllMaterialsWithoutPagination();
        $data['sizes'] = $this->ModelSizes->getAllSizesWithoutPagination();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/ms_change/home/index' , $data);
        $this->load->view('admin_panel/ms_change/home/index_css');
        $this->load->view('admin_panel/ms_change/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doChangeCategoryMaterial()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $result = $this->ModelDiscount->doChangeCategoryMaterial($inputs);
        echo json_encode($result);
    }
    public function doChangeCategorySize()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $result = $this->ModelDiscount->doChangeCategorySize($inputs);
        echo json_encode($result);
    }
	public function doChangeCategoryMaterialSize() {
		$inputs = $this->input->post(NULL, TRUE);
		$inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
		$inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
		$inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
		$result = $this->ModelDiscount->doChangeCategoryMaterialSize($inputs);
		echo json_encode($result);
	}


	public function doDeleteCategoryMaterial()
	{
		$inputs = $this->input->post(NULL, TRUE);
		$inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
		$inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
		$inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
		$result = $this->ModelDiscount->doDeleteCategoryMaterial($inputs);
		echo json_encode($result);
	}
	public function doDeleteCategorySize()
	{
		$inputs = $this->input->post(NULL, TRUE);
		$inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
		$inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
		$inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
		$result = $this->ModelDiscount->doDeleteCategorySize($inputs);
		echo json_encode($result);
	}
	public function doDeleteCategoryMaterialSize() {
		$inputs = $this->input->post(NULL, TRUE);
		$inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
		$inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
		$inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
		$result = $this->ModelDiscount->doDeleteCategoryMaterialSize($inputs);
		echo json_encode($result);
	}


}