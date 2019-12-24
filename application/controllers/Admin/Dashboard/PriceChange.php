<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PriceChange extends CI_Controller
{
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
        $headerData['pageTitle'] = 'تغییر قیمت';
        $data['categories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['materials'] = $this->ModelMaterial->getAllMaterialsWithoutPagination();
        $data['sizes'] = $this->ModelSizes->getAllSizesWithoutPagination();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/price_change/home/index' , $data);
        $this->load->view('admin_panel/price_change/home/index_css');
        $this->load->view('admin_panel/price_change/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doChangeAllPrice(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $result = $this->ModelDiscount->doChangeAllPrice($inputs);
        echo json_encode($result);
    }
    public function doChangeCategoryPrice()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $result = $this->ModelDiscount->doChangeCategoryPrice($inputs);
        echo json_encode($result);
    }
    public function doChangeSizePrice()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $result = $this->ModelDiscount->doChangeSizePrice($inputs);
        echo json_encode($result);
    }
    public function doChangeMaterialPrice()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $result = $this->ModelDiscount->doChangeMaterialPrice($inputs);
        echo json_encode($result);
    }
    public function doChangeCategoryMaterialPrice()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $result = $this->ModelDiscount->doChangeCategoryMaterialPrice($inputs);
        echo json_encode($result);
    }
    public function doChangeCategorySizePrice()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $result = $this->ModelDiscount->doChangeCategorySizePrice($inputs);
        echo json_encode($result);
    }

}
