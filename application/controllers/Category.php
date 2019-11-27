<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
    }
    public function index(){}
    public function detail($categoryId , $categoryTitle = ""){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'دسته بندی محصول ';

        $data['categoryInfo'] = $this->ModelProductCategory->getCategoryByCategoryId($categoryId)[0];
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree($categoryId);
        $data['products'] = $this->ModelProductCategory->getProductByCategoryId($categoryId);
        //echo $data['categoryTree'];
        //var_dump($data['products']);
        //die();

        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/category/index', $data);
        $this->load->view('ui/category/index_css');
        $this->load->view('ui/category/index_js');
        $this->load->view('ui/static/footer');
    }
}