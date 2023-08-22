<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
    }
    public function index()
    {
    }
    public function detail($categoryId, $categoryTitle = ""){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['categoryId'] = $categoryId;
        $allCategories = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['categoryInfo'] = $this->ModelProductCategory->getCategoryByCategoryId($categoryId)[0];
        $data['rootCategories'] = $this->ModelProductCategory->getChildProductCategory(1);
        $data['products'] = $this->ModelProductCategory->getProductByCategoryId($categoryId);
        $data['defaultPageSize'] = $this->config->item('defaultPageSize');
        $data['productCount'] = $this->ModelProduct->getProductCountByProductCategoryId($categoryId);
        $data['latestProduct'] = $this->ModelProduct->getLatestProduct();

        //$data['pageTitle'] = $this->config->item('defaultPageTitle') . 'دسته بندی  ' . $data['categoryInfo']['CategoryTitle'];
        $data['pageTitle'] =  $data['categoryInfo']['CategoryTitle'] . ' | '.$this->config->item('defaultPageTitle');

        $breadCrumb = array();
        //get root category
        foreach ($allCategories as $item) {
            if ($item['CategoryParentId'] == 0) {
                $breadCrumb['root'] = $item;
            }
        }
        //get current category
        $breadCrumb['current'] = $data['categoryInfo'];
        //get other non-root categories
        foreach ($allCategories as $item) {
            if ($item['CategoryId'] == $data['categoryInfo']['CategoryParentId'] && $data['categoryInfo']['CategoryParentId'] != 1) {
                $breadCrumb['parents'][] = $item;
            }
        }
        $data['breadCrumb'] = $breadCrumb;
        $properties = $this->ModelProductCategory->getCategoryPropertyByCategoryId($categoryId)['data'];
        if (is_array($properties)) {
            for ($i = 0; $i < count($properties); $i++) {
                $propertyId = $properties[$i]['PropertyId'];
                $properties[$i]['properties'] = $this->ModelProductCategory->getCategoryPropertyOptionByPropertyId($propertyId);
            }
        }
        $data['properties'] = $properties;


        if ($data['categoryInfo']['CategoryParentId'] == 1) {
            $data['childCategories'] = $this->ModelProductCategory->getChildProductCategory($data['categoryInfo']['CategoryId']);



            $this->load->view('ui/v2/static/header', $data);
            $this->load->view('ui/v2/category/sub_index', $data);
            $this->load->view('ui/v2/category/sub_index_css');
            $this->load->view('ui/v2/category/sub_index_js');
            $this->load->view('ui/v2/static/footer');
        }
        else{
            $data['childCategories'] = $this->ModelProductCategory->getChildProductCategory($data['categoryInfo']['CategoryParentId']);

            $this->load->view('ui/v2/static/header', $data);
            $this->load->view('ui/v2/category/index', $data);
            $this->load->view('ui/v2/category/index_css');
            $this->load->view('ui/v2/category/index_js', $data);
            $this->load->view('ui/v2/static/footer');
        }
    }
    public function search()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelProduct->searchProduct($inputs);
        $data['defaultPageSize'] = $this->config->item('defaultPageSize');
        $view = $this->load->view('ui/v2/category/pagination', $data, TRUE);
        echo $view;
    }
}