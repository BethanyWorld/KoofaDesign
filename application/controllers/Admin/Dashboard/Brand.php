<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Brand extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelProductCategory');
        $this->load->model('admin/ModelBrand');
    }

    public function index()
	{
        $headerData['pageTitle'] = 'فهرست برندها'; 
        $dataTable['dataTable'] = $this->ModelBrand->getBrandByPagination();
        $data['data'] = $this->load->view('admin_panel/brand/home/pagination', $dataTable,TRUE);
        $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/brand/home/index', $data);
        $this->load->view('admin_panel/brand/home/index_css');
        $this->load->view('admin_panel/brand/home/index_js', $dataTable);
	    $this->load->view('admin_panel/static/footer');
	}
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $dataTable['dataTable'] = $this->ModelBrand->getBrandByPagination($inputs['pageIndex']);
         echo $this->load->view('admin_panel/brand/home/pagination', $dataTable,TRUE);
    }

    public function add()
    {
        $headerData['pageTitle'] = 'افزودن برند';
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/brand/add/index', $data);
        $this->load->view('admin_panel/brand/add/index_css');
        $this->load->view('admin_panel/brand/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddBrand()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelBrand->doAddBrand($inputs);
        echo json_encode($result);
    }

    public function edit($brandId)
    {
        $headerData['pageTitle'] = 'ویرایش برند';
        $data['data'] = $this->ModelBrand->getBrandByBrandId($brandId)['data'][0];
        $data['brandCategories'] = $this->ModelBrand->getBrandCategoriesByBrandId($brandId)['data'];
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree($data['brandCategories']);

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/brand/edit/index', $data);
        $this->load->view('admin_panel/brand/edit/index_css');
        $this->load->view('admin_panel/brand/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doUpdateBrand()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelBrand->doUpdateBrand($inputs);
        echo json_encode($result);
    }

    public function doDeleteBrand()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
         $result = $this->ModelBrand->doDeleteBrand($inputs);
        echo json_encode($result);
    }

}
